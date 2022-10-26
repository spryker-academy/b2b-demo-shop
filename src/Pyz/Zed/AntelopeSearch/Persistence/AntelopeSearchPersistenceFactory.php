<?php

namespace Pyz\Zed\AntelopeSearch\Persistence;

use Orm\Zed\Antelope\Persistence\PyzAntelopeQuery;
use Orm\Zed\AntelopeSearch\Persistence\PyzAntelopeSearchQuery;
use Pyz\Zed\AntelopeSearch\AntelopeSearchDependencyProvider;
use Pyz\Zed\AntelopeSearch\Persistence\Propel\AntelopeSearch\Mapper\AntelopeSearchMapper;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

/**
 * @method \Pyz\Zed\AntelopeSearch\Persistence\AntelopeSearchRepositoryInterface getRepository()
 * @method \Pyz\Zed\AntelopeSearch\Persistence\AntelopeSearchEntityManagerInterface getEntityManager()
 */
class AntelopeSearchPersistenceFactory extends AbstractPersistenceFactory
{
    /**
     * @return \Orm\Zed\AntelopeSearch\Persistence\PyzAntelopeSearchQuery
     */
    public function createAntelopeSearchQuery(): PyzAntelopeSearchQuery
    {
        return PyzAntelopeSearchQuery::create();
    }

    /**
     * @return \Pyz\Zed\AntelopeSearch\Persistence\Propel\AntelopeSearch\Mapper\AntelopeSearchMapper
     */
    public function createAntelopeSearchMapper(): AntelopeSearchMapper
    {
        return new AntelopeSearchMapper();
    }

    /**
     * @return \Orm\Zed\Antelope\Persistence\PyzAntelopeQuery
     */
    public function getAntelopePropelQuery(): PyzAntelopeQuery
    {
        return $this->getProvidedDependency(AntelopeSearchDependencyProvider::PROPEL_QUERY_ANTELOPE);
    }
}
