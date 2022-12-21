<?php

namespace Pyz\Zed\Training\Persistence;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;
use Orm\Zed\Antelope\Persistence\Base\PyzAntelopeQuery;
use Spryker\Zed\Kernel\Persistence\AbstractRepository;

/**
 * @method \Pyz\Zed\Training\Persistence\TrainingPersistenceFactory getFactory()
 */
class TrainingRepository extends AbstractRepository implements TrainingRepositoryInterface
{
    public function findAntelope(AntelopeCriteriaTransfer $antelopeCriteria): ?AntelopeTransfer
    {
        $antelopeQuery = $this->getFactory()
            ->createAntelopeQuery();

        $antelopeQuery = $this->addFiltersToAntelopeQueryFromCriteria($antelopeQuery, $antelopeCriteria);

        $antelopeEntity = $antelopeQuery->findOne();

        if (!$antelopeEntity) {
            return null;
        }

        return $this->getFactory()
            ->createAntelopeMapper()
            ->mapEntityToAntelopeTransfer($antelopeEntity, new AntelopeTransfer());
    }

    protected function addFiltersToAntelopeQueryFromCriteria(
        PyzAntelopeQuery $antelopeQuery,
        AntelopeCriteriaTransfer $antelopeCriteria
    ): PyzAntelopeQuery {
        if ($antelopeCriteria->getIdAntelope() !== null) {
            $antelopeQuery = $antelopeQuery->filterByIdAntelope($antelopeCriteria->getIdAntelope());
        }

        if ($antelopeCriteria->getName() !== null) {
            $antelopeQuery = $antelopeQuery->filterByName($antelopeCriteria->getName());
        }

        return $antelopeQuery;
    }
}
