<?php

namespace Pyz\Zed\AntelopeDataImport\Business;

use Generated\Shared\Transfer\DataImporterConfigurationTransfer;
use Pyz\Zed\AntelopeDataImport\Business\DataImportStep\AntelopeWriterStep;
use Pyz\Zed\AntelopeDataImport\Business\DataImportStep\ColorToLowercaseStep;
use Spryker\Zed\DataImport\Business\DataImportBusinessFactory;
use Spryker\Zed\DataImport\Business\Model\DataImporterInterface;

class AntelopeDataImportBusinessFactory extends DataImportBusinessFactory
{
    /**
     * @param \Generated\Shared\Transfer\DataImporterConfigurationTransfer|null $dataImporterConfigurationTransfer
     *
     * @return \Spryker\Zed\DataImport\Business\Model\DataImporterInterface
     */
    public function getAntelopeDataImport(?DataImporterConfigurationTransfer $dataImporterConfigurationTransfer = null): DataImporterInterface
    {
        $dataImporter = $this->getCsvDataImporterFromConfig($dataImporterConfigurationTransfer);

        $dataSetStepBroker = $this->createTransactionAwareDataSetStepBroker();

        // TODO-3: Add the ColorToLowercaseStep to the $dataSetStepBroker
        // Hint: The DataSetStepBroker-class implements the interface `vendor/spryker/data-import/src/Spryker/Zed/DataImport/Business/Model/DataImportStep/DataImportStepAwareInterface.php`

        // TODO-4: Add the WriterStep to the $dataSetStepBroker

        // TODO-5: Add the $dataSetStepBroker to the $dataImporter
        // Hint: The DataImporter-class implements the interface `vendor/spryker/data-import/src/Spryker/Zed/DataImport/Business/Model/DataSet/DataSetStepBrokerAwareInterface.php`

        return $dataImporter;
    }

    // TODO-1: Create the method createColorToLowercaseStep that returns an instance of ColorToLowercaseStep

    // TODO-2: Create the method createAntelopeWriterStep that returns an instance of AntelopeWriterStep
}
