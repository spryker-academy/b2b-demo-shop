<?php

namespace Pyz\Zed\Training\Persistence;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;
use Spryker\Zed\Kernel\Persistence\AbstractRepository;

/**
 * @method \Pyz\Zed\Training\Persistence\TrainingPersistenceFactory getFactory()
 */
class TrainingRepository extends AbstractRepository implements TrainingRepositoryInterface
{
    public function findAntelope(AntelopeCriteriaTransfer $antelopeCriteria): ?AntelopeTransfer
    {
        $antelopeEntity = null;
        // TODO: Get AntelopeQuery through factory and query one antelope by name and assign to $antelopeEntity
        // access factory: $this->getFactory() (see @method annotation)
        // example query: $query->filterByName('some-name')->findOne()

        // TODO: Return null if there is no antelope

        // TODO: Use AntelopeMapper through factory to map $antelopeEntity to $antelopeTransfer and return it
        return null; // TODO: To be replaced with the $antelopeTransfer from the AntelopeMapper
    }
}
