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

        // TODO-1: Use the AntelopeSearchClient to get an Antelope by its name
        // Hint-1: Check the properties for accessing the AntelopeSearchClient
        $antelopeTransfer = null;

        // TODO-2: Return an AntelopeNotFound-Error if there is no Antelope with that name
        // Hint-1: You can use the method `addAntelopeNotFoundError()` of the current class

        // TODO-3: Use the AntelopeMapper to map the AntelopeTransfer to AntelopesApiAttributesTransfer
        // Hint-1: Check the properties for accessing the AntelopeSearchClient
        $antelopesApiAttributesTransfer = null;

        $glueResourceTransfer = (new GlueResourceTransfer())
            ->setId($antelopesApiAttributesTransfer->getNameOrFail());

        // TODO-4: Set the type of the resource we will return and set the AntelopesApiAttributesTransfer
        // Hint-1: Check the class AntelopesApiConfig for the right constant
        // Hint-2: The methods you are looking for are `setType()` and `setAttributes`

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
