<?php

namespace Pyz\Zed\AntelopeDataImport\Business\DataImportStep;

use Pyz\Zed\AntelopeDataImport\Business\DataSet\AntelopeDataSetInterface;
use Spryker\Zed\DataImport\Business\Model\DataImportStep\DataImportStepInterface;
use Spryker\Zed\DataImport\Business\Model\DataSet\DataSetInterface;

class ColorToLowercaseStep implements DataImportStepInterface
{
    /**
     * @param \Spryker\Zed\DataImport\Business\Model\DataSet\DataSetInterface $dataSet
     *
     * @return void
     */
    public function execute(DataSetInterface $dataSet): void
    {
        if (isset($dataSet[AntelopeDataSetInterface::COLUMN_COLOR])) {
            $dataSet[AntelopeDataSetInterface::COLUMN_COLOR] = strtolower(
                $dataSet[AntelopeDataSetInterface::COLUMN_COLOR],
            );
        }
    }
}
