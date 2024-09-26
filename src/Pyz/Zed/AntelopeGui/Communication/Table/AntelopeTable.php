<?php

namespace Pyz\Zed\AntelopeGui\Communication\Table;

use Orm\Zed\Antelope\Persistence\Map\PyzAntelopeTableMap;
use Orm\Zed\Antelope\Persistence\PyzAntelopeQuery;
use Propel\Runtime\Collection\ObjectCollection;
use Spryker\Zed\Gui\Communication\Table\AbstractTable;
use Spryker\Zed\Gui\Communication\Table\TableConfiguration;

class AntelopeTable extends AbstractTable
{
    /**
     * @var string
     */
    public const COL_ID_ANTELOPE = 'id_antelope';

    /**
     * @var string
     */
    public const COL_NAME = 'name';

    /**
     * @var string
     */
    public const COL_COLOR = 'color';

    /**
     * @var \Orm\Zed\Antelope\Persistence\PyzAntelopeQuery
     */
    protected $antelopeQuery;

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
    protected function configure(TableConfiguration $config)
    {
        $config->setHeader([
            static::COL_ID_ANTELOPE => 'Antelope ID',
            static::COL_NAME => 'Name',
            static::COL_COLOR => 'Color',
        ]);

        $config->setSortable([
            static::COL_ID_ANTELOPE,
            static::COL_NAME,
            static::COL_COLOR,
        ]);

        $config->setSearchable([
            PyzAntelopeTableMap::COL_NAME,
            PyzAntelopeTableMap::COL_COLOR,
        ]);

        return $config;
    }

    /**
     * @param \Spryker\Zed\Gui\Communication\Table\TableConfiguration $config
     *
     * @return array<array<mixed>>
     */
    protected function prepareData(TableConfiguration $config)
    {
        $antelopeEntityCollection = $this->runQuery(
            $this->antelopeQuery,
            $config,
            true
        );

        if (!$antelopeEntityCollection->count()) {
            return [];
        }

        return $this->mapReturns($antelopeEntityCollection);
    }

    /**
     * @param \Propel\Runtime\Collection\ObjectCollection<\Orm\Zed\Antelope\Persistence\PyzAntelope> $antelopeEntityCollection
     *
     * @return array<array<mixed>>
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
