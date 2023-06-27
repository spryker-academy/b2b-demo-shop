<?php

namespace Pyz\Glue\AntelopesApi\Plugin\GlueStorefrontApiApplication;

use Generated\Shared\Transfer\GlueResourceMethodCollectionTransfer;
use Generated\Shared\Transfer\GlueResourceMethodConfigurationTransfer;
use Pyz\Glue\AntelopesApi\AntelopesApiConfig;
use Pyz\Glue\AntelopesApi\Controller\AntelopesResourceController;
use Spryker\Glue\GlueApplication\Plugin\GlueApplication\AbstractResourcePlugin;
use Spryker\Glue\GlueJsonApiConventionExtension\Dependency\Plugin\JsonApiResourceInterface;

class AntelopesResourcePlugin extends AbstractResourcePlugin implements JsonApiResourceInterface
{
    /**
     * @return string
     */
    public function getType(): string
    {
        // TODO-1: Return the resource type "antelopes"
        // Hint-1: Use a constant from AntelopesApiConfig
    }

    /**
     * @return string
     */
    public function getController(): string
    {
        // TODO-2: Return the full class-name of our Antelope resource-controller
        // Hint-1: With `::class` you can get the full class name of a class
    }

    /**
     * @return \Generated\Shared\Transfer\GlueResourceMethodCollectionTransfer
     */
    public function getDeclaredMethods(): GlueResourceMethodCollectionTransfer
    {
        return (new GlueResourceMethodCollectionTransfer())
            ->setGet(new GlueResourceMethodConfigurationTransfer());
    }
}
