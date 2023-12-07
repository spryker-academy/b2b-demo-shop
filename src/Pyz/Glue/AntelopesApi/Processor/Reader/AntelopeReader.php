<?php

namespace Pyz\Glue\AntelopesApi\Processor\Reader;

use Generated\Shared\Transfer\GlueErrorTransfer;
use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\GlueResourceTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;
use Pyz\Client\AntelopeSearch\AntelopeSearchClientInterface;
use Pyz\Glue\AntelopesApi\AntelopesApiConfig;
use Pyz\Glue\AntelopesApi\Processor\Mapper\AntelopeMapper;
use Symfony\Component\HttpFoundation\Response;

class AntelopeReader
{
    protected AntelopeSearchClientInterface $antelopeSearchClient;

    protected AntelopeMapper $antelopeMapper;

    /**
     * @param \Pyz\Client\AntelopeSearch\AntelopeSearchClientInterface $antelopeSearchClient
     * @param \Pyz\Glue\AntelopesApi\Processor\Mapper\AntelopeMapper $antelopeMapper
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

        $antelopesApiAttributesTransfer = $this->antelopeMapper->mapAntelopeTransferToAntelopesApiAttributesTransfer($antelopeTransfer);

        $glueResourceTransfer = (new GlueResourceTransfer())
            ->setId($antelopesApiAttributesTransfer->getNameOrFail())
            ->setType(AntelopesApiConfig::RESOURCE_ANTELOPES)
            ->setAttributes($antelopesApiAttributesTransfer);

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
                    ->setCode(AntelopesApiConfig::RESPONSE_CODE_ANTELOPE_NOT_FOUND)
                    ->setMessage(AntelopesApiConfig::RESPONSE_DETAIL_ANTELOPE_NOT_FOUND)
                    ->setStatus(Response::HTTP_NOT_FOUND),
            );
    }
}
