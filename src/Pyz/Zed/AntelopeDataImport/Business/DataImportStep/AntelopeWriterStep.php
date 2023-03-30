<?php

namespace Pyz\Zed\AntelopeDataImport\Business\DataImportStep;

use Orm\Zed\Antelope\Persistence\PyzAntelopeQuery;
use Pyz\Zed\AntelopeDataImport\Business\DataSet\AntelopeDataSetInterface;
use Spryker\Zed\DataImport\Business\Model\DataImportStep\DataImportStepInterface;
use Spryker\Zed\DataImport\Business\Model\DataSet\DataSetInterface;

class AntelopeWriterStep implements DataImportStepInterface
{
    /**
     * @param \Spryker\Zed\DataImport\Business\Model\DataSet\DataSetInterface $dataSet
     *
     * @return void
     */
    public function execute(DataSetInterface $dataSet): void
    {
        // TODO-1: Find or create an instance of antelope entity
        // Hint-1: PyzAntelopeQuery has a static method `create()`
        // Hint-2: Filter by name by calling 'filterByName()' method
        // Hint-3: `findOneOrCreate()` can be used to query one from the database or create a fresh entity
        $antelopeEntity = null;

        // TODO-2: Assign the color from the dataset to the entity by using the setter

        // TODO-3: Save the entity ONLY if it's new or modified
        // Hint: Take a look at `src/Orm/Zed/Antelope/Persistence/Base/PyzAntelope.php` for the right methods
    }
}
