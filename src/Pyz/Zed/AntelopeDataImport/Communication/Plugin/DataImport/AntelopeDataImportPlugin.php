<?php

namespace Pyz\Zed\AntelopeDataImport\Communication\Plugin\DataImport;

use Generated\Shared\Transfer\DataImporterConfigurationTransfer;
use Generated\Shared\Transfer\DataImporterReportTransfer;
use Pyz\Zed\AntelopeDataImport\AntelopeDataImportConfig;
use Spryker\Zed\DataImport\Dependency\Plugin\DataImportPluginInterface;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;

/**
 * @method \Pyz\Zed\AntelopeDataImport\Business\AntelopeDataImportFacadeInterface getFacade()
 */
class AntelopeDataImportPlugin extends AbstractPlugin implements DataImportPluginInterface
{
    // TODO: Implement the required interface methods
    // Hint-1: `getFacade()` provides you the AntelopeDataImportFacade with import functionality
    // Hint-2: AntelopeDataImportConfig provides a constant for the import type
}
