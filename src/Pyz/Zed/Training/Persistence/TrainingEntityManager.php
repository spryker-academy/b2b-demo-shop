<?php

namespace Pyz\Zed\Training\Persistence;

use Generated\Shared\Transfer\AntelopeTransfer;
use Orm\Zed\Antelope\Persistence\PyzAntelope;
use Spryker\Zed\Kernel\Persistence\AbstractEntityManager;

/**
 * @method \Pyz\Zed\Training\Persistence\TrainingPersistenceFactory getFactory()
 */
class TrainingEntityManager extends AbstractEntityManager implements TrainingEntityManagerInterface
{
    public function createAntelope(AntelopeTransfer $antelopeTransfer): AntelopeTransfer
    {
        $antelopeEntity = new PyzAntelope();

        // TODO: Use AntelopeMapper through factory to map $antelopeTransfer to $antelopeEntity

        $antelopeEntity->save();

        // TODO: Use AntelopeMapper through factory to map $antelopeEntity to $antelopeTransfer and return it
        return new AntelopeTransfer(); // TODO: To be replaced with the $antelopeTransfer from the AntelopeMapper
    }
}
