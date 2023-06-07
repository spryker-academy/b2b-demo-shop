<?php

namespace Pyz\Zed\AntelopeDataImport\Business\DataImportStep;

use Orm\Zed\Antelope\Persistence\PyzAntelopeQuery;
use Pyz\Shared\AntelopeSearch\AntelopeSearchConfig;
use Pyz\Zed\AntelopeDataImport\Business\DataSet\AntelopeDataSetInterface;
use Spryker\Zed\DataImport\Business\Model\DataImportStep\DataImportStepInterface;
use Spryker\Zed\DataImport\Business\Model\DataImportStep\PublishAwareStep;
use Spryker\Zed\DataImport\Business\Model\DataSet\DataSetInterface;

class AntelopeWriterStep extends PublishAwareStep implements DataImportStepInterface
{
    /**
     * @param \Spryker\Zed\DataImport\Business\Model\DataSet\DataSetInterface $dataSet
     *
     * @return void
     */
    public function execute(DataSetInterface $dataSet): void
    {
        $antelopeEntity = PyzAntelopeQuery::create()
            ->filterByName($dataSet[AntelopeDataSetInterface::COLUMN_NAME])
            ->findOneOrCreate();

        $antelopeEntity->setColor($dataSet[AntelopeDataSetInterface::COLUMN_COLOR]);

        if ($antelopeEntity->isNew() || $antelopeEntity->isModified()) {
            $antelopeEntity->save();
            $this->addPublishEvents(AntelopeSearchConfig::ANTELOPE_PUBLISH, $antelopeEntity->getIdAntelope());
        }
    }
}
