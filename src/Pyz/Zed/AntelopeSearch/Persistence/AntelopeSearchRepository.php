<?php

namespace Pyz\Zed\AntelopeSearch\Persistence;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeSearchCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeSearchTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;
use Spryker\Zed\Kernel\Persistence\AbstractRepository;

/**
 * @method \Pyz\Zed\AntelopeSearch\Persistence\AntelopeSearchPersistenceFactory getFactory()
 */
class AntelopeSearchRepository extends AbstractRepository implements AntelopeSearchRepositoryInterface
{
    /**
     * @param \Generated\Shared\Transfer\AntelopeCriteriaTransfer $antelopeCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeTransfer[]
     */
    public function getAntelopes(AntelopeCriteriaTransfer $antelopeCriteriaTransfer): array
    {
        $antelopeEntities = $this->getFactory()
            ->getAntelopePropelQuery()
            ->filterByIdAntelope_In($antelopeCriteriaTransfer->getIdsAntelope())
            ->find();

        $antelopeTransfers = [];

        foreach ($antelopeEntities as $antelopeEntity) {
            $antelopeTransfers[] = (new AntelopeTransfer())
                ->fromArray($antelopeEntity->toArray(), true);
        }

        return $antelopeTransfers;
    }

    /**
     * @param \Generated\Shared\Transfer\AntelopeSearchCriteriaTransfer $antelopeSearchCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeSearchTransfer[]
     */
    public function getAntelopeSearches(AntelopeSearchCriteriaTransfer $antelopeSearchCriteriaTransfer): array
    {
        $antelopeSearchEntities = $this->getFactory()
            ->createAntelopeSearchQuery()
            ->filterByfkAntelope_In($antelopeSearchCriteriaTransfer->getFksAntelope())
            ->find();

        $antelopeSearchTransfers = [];

        foreach ($antelopeSearchEntities as $antelopeSearchEntity) {
            $antelopeSearchTransfers[] = $this->getFactory()
                ->createAntelopeSearchMapper()
                ->mapAntelopeSearchEntityToAntelopeSearchTransfer($antelopeSearchEntity, new AntelopeSearchTransfer());
        }

        return $antelopeSearchTransfers;
    }
}
