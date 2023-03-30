<?php

namespace Pyz\Zed\AntelopeDataImport\Business;

use Generated\Shared\Transfer\DataImporterConfigurationTransfer;
use Generated\Shared\Transfer\DataImporterReportTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Pyz\Zed\AntelopeDataImport\Business\AntelopeDataImportBusinessFactory getFactory()
 */
class AntelopeDataImportFacade extends AbstractFacade implements AntelopeDataImportFacadeInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\DataImporterConfigurationTransfer|null $dataImporterConfigurationTransfer
     *
     * @return \Generated\Shared\Transfer\DataImporterReportTransfer
     */
    public function importAntelope(
        ?DataImporterConfigurationTransfer $dataImporterConfigurationTransfer = null,
    ): DataImporterReportTransfer {
        // TODO: Use the factory to get the AntelopeDataImport, call the `import()`-method and return its result
        // Hint-1: You can access the AntelopeDataImportBusinessFactory through $this->getFactory()
        // Hint-2: Do not forget to pass the DataImporterConfigurationTransfer to BOTH methods
    }
}
