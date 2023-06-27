<?php

namespace Pyz\Glue\AntelopesRestApi\Controller;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;
use Spryker\Glue\Kernel\Controller\AbstractStorefrontApiController;

/**
 * @method \Pyz\Glue\AntelopesRestApi\AntelopesRestApiFactory getFactory()
 */
class AntelopesResourceController extends AbstractStorefrontApiController
{
    /**
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function getAction(GlueRequestTransfer $glueRequestTransfer): GlueResponseTransfer
    {
        // TODO-1: Use the factory to create the AntelopeResourceReader and return an Antelope-GlueResponse
        // Hint-1: The method `getAntelope()` requires a GlueRequestTransfer and returns a GlueResponseTransfer
    }
}
