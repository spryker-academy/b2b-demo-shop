<?php

namespace Pyz\Zed\AntelopeGui\Communication\Table;

use Orm\Zed\Antelope\Persistence\PyzAntelopeQuery;
use Propel\Runtime\Collection\ObjectCollection;
use Spryker\Zed\Gui\Communication\Table\AbstractTable;
use Spryker\Zed\Gui\Communication\Table\TableConfiguration;

class AntelopeTable extends AbstractTable
{
    public const COL_ID_ANTELOPE = 'id_antelope';

    public const COL_NAME = 'name';

    public const COL_COLOR = 'color';

    protected PyzAntelopeQuery $antelopeQuery;

    /**
     * @param \Orm\Zed\Antelope\Persistence\PyzAntelopeQuery $antelopeQuery
     */
    public function __construct(PyzAntelopeQuery $antelopeQuery)
    {
        $this->antelopeQuery = $antelopeQuery;
    }

    /**
     * @param \Spryker\Zed\Gui\Communication\Table\TableConfiguration $config
     *
     * @return \Spryker\Zed\Gui\Communication\Table\TableConfiguration
     */
    protected function configure(TableConfiguration $config): TableConfiguration
    {
        // Info: Have a look inside the class TableConfiguration for the right setters

        // TODO-1: Set the table header for id, name and color by passing an associative array of columns
        // Hint-1: As array keys you can use the constants of the current class
        // Hint-2: The values are the column names of the table visible in the browser

        // TODO-2: Make the columns for id, name and color sortable
        // Hint-1: Pass the keys of the columns that should be sortable

        // TODO-3: Make the columns for name and color searchable
        // Hint-1: Pass the keys of the columns that should be searchable

        return $config;
    }

    /**
     * @param \Spryker\Zed\Gui\Communication\Table\TableConfiguration $config
     *
     * @return array
     */
    protected function prepareData(TableConfiguration $config): array
    {
        // TODO-4: Fetch an $antelopeEntityCollection and return it in an array format
        // Hint-1: You can use the `runQuery()`-method from the parent class to fetch a collection of antelope entities
        // Hint-2: Third parameter of runQuery should be set to true
        // Hint-3: You are allowed to use the `mapReturns()`-method
        $antelopeEntityCollection = null;

        return [];
    }

    /**
     * @param \Propel\Runtime\Collection\ObjectCollection<\Orm\Zed\Antelope\Persistence\PyzAntelope> $antelopeEntityCollection
     *
     * @return array
     */
    protected function mapReturns(ObjectCollection $antelopeEntityCollection): array
    {
        $returns = [];

        foreach ($antelopeEntityCollection as $antelopeEntity) {
            $returns[] = $antelopeEntity->toArray();
        }

        return $returns;
    }
}
