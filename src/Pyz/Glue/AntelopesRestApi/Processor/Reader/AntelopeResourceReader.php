<?php

namespace Pyz\Glue\AntelopesRestApi\Processor\Reader;

use Generated\Shared\Transfer\GlueErrorTransfer;
use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\GlueResourceTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;
use Pyz\Client\AntelopeSearch\AntelopeSearchClientInterface;
use Pyz\Glue\AntelopesRestApi\AntelopesRestApiConfig;
use Pyz\Glue\AntelopesRestApi\Processor\Mapper\AntelopeMapper;
use Symfony\Component\HttpFoundation\Response;

class AntelopeResourceReader
{
    protected AntelopeSearchClientInterface $antelopeSearchClient;

    protected AntelopeMapper $antelopeMapper;

    /**
     * @param \Pyz\Client\AntelopeSearch\AntelopeSearchClientInterface $antelopeSearchClient
     * @param \Pyz\Glue\AntelopesRestApi\Processor\Mapper\AntelopeMapper $antelopeMapper
     */
    public function __construct(
        AntelopeSearchClientInterface $antelopeSearchClient,
        AntelopeMapper $antelopeMapper,
    ) {
        $this->antelopeSearchClient = $antelopeSearchClient;
        $this->antelopeMapper = $antelopeMapper;
    }

    /**
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function getAntelope(GlueRequestTransfer $glueRequestTransfer): GlueResponseTransfer
    {
        $glueResponseTransfer = new GlueResponseTransfer();
        $antelopeName = $glueRequestTransfer->getResourceOrFail()->getIdOrFail();

        $antelopeTransfer = $this->antelopeSearchClient->getAntelopeByName($antelopeName);

        if (!$antelopeTransfer) {
            return $this->addAntelopeNotFoundError($glueResponseTransfer);
        }

        $antelopeRestAttributesTransfer = $this->antelopeMapper->mapAntelopeTransferToAntelopeRestAttributesTransfer($antelopeTransfer);

        $glueResourceTransfer = (new GlueResourceTransfer())
            ->setId($antelopeRestAttributesTransfer->getNameOrFail())
            ->setType(AntelopesRestApiConfig::RESOURCE_TYPE_ANTELOPES)
            ->setAttributes($antelopeRestAttributesTransfer);

        $glueResponseTransfer->addResource($glueResourceTransfer);

        return $glueResponseTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\GlueResponseTransfer $glueResponseTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    protected function addAntelopeNotFoundError(GlueResponseTransfer $glueResponseTransfer): GlueResponseTransfer
    {
        return $glueResponseTransfer
            ->setHttpStatus(Response::HTTP_NOT_FOUND)
            ->addError(
                (new GlueErrorTransfer())
                    ->setCode(AntelopesRestApiConfig::RESPONSE_CODE_ANTELOPE_NOT_FOUND)
                    ->setMessage(AntelopesRestApiConfig::RESPONSE_DETAIL_ANTELOPE_NOT_FOUND)
                    ->setStatus(Response::HTTP_NOT_FOUND),
            );
    }
}
