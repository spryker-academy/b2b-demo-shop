<?php

namespace Pyz\Zed\Antelope\Persistence;

use Orm\Zed\Antelope\Persistence\PyzAntelopeQuery;
use Pyz\Zed\Antelope\Persistence\Propel\Mapper\AntelopeMapper;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

class AntelopePersistenceFactory extends AbstractPersistenceFactory
{
    /**
     * @return \Orm\Zed\Antelope\Persistence\PyzAntelopeQuery
     */
    public function createAntelopeQuery(): PyzAntelopeQuery
    {
        return PyzAntelopeQuery::create();
    }

    /**
     * @return \Pyz\Zed\Antelope\Persistence\Propel\Mapper\AntelopeMapper
     */
    public function createAntelopeMapper(): AntelopeMapper
    {
        return new AntelopeMapper();
    }
}
