<?php

namespace Pyz\Zed\Training\Persistence;

use Orm\Zed\Antelope\Persistence\PyzAntelopeQuery;
use Pyz\Zed\Training\Persistence\Mapper\AntelopeMapper;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

class TrainingPersistenceFactory extends AbstractPersistenceFactory
{
    public function createAntelopeQuery(): PyzAntelopeQuery
    {
        return PyzAntelopeQuery::create();
    }

    /**
     * @return \Pyz\Zed\Training\Persistence\Mapper\AntelopeMapper
     */
    public function createAntelopeMapper(): AntelopeMapper
    {
        return new AntelopeMapper();
    }
}
