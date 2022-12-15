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
        $antelopeEntity = $this->getFactory()
            ->createAntelopeMapper()
            ->mapAntelopeTransferToEntity($antelopeTransfer, new PyzAntelope());

        $antelopeEntity->save();

        return $this->getFactory()
            ->createAntelopeMapper()
            ->mapEntityToAntelopeTransfer($antelopeEntity, new AntelopeTransfer());
    }
}
