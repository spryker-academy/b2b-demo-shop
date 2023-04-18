<?php

namespace Pyz\Zed\Antelope\Persistence;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;
use Spryker\Zed\Kernel\Persistence\AbstractRepository;

/**
 * @method \Pyz\Zed\Antelope\Persistence\AntelopePersistenceFactory getFactory()
 */
class AntelopeRepository extends AbstractRepository implements AntelopeRepositoryInterface
{
    /**
     * @param \Generated\Shared\Transfer\AntelopeCriteriaTransfer $antelopeCriteriaTransfer
     *
     * @return array<\Generated\Shared\Transfer\AntelopeTransfer>
     */
    public function getAntelopes(AntelopeCriteriaTransfer $antelopeCriteriaTransfer): array
    {
        $antelopeEntities = $this->getFactory()
            ->createAntelopeQuery()
            ->filterByIdAntelope_In($antelopeCriteriaTransfer->getIdsAntelope())
            ->find();

        $antelopeTransfers = [];
        $antelopeMapper = $this->getFactory()->createAntelopeMapper();

        foreach ($antelopeEntities as $antelopeEntity) {
            $antelopeTransfers[] = $antelopeMapper->mapAntelopeEntityToAntelopeTransfer(
                $antelopeEntity,
                new AntelopeTransfer(),
            );
        }

        return $antelopeTransfers;
    }
}
