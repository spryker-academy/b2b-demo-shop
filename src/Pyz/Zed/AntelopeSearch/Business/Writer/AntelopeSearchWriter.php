<?php

namespace Pyz\Zed\AntelopeSearch\Business\Writer;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeSearchCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeSearchTransfer;
use Pyz\Zed\Antelope\Business\AntelopeFacadeInterface;
use Pyz\Zed\AntelopeSearch\Persistence\AntelopeSearchEntityManagerInterface;
use Pyz\Zed\AntelopeSearch\Persistence\AntelopeSearchRepositoryInterface;
use Spryker\Zed\EventBehavior\Business\EventBehaviorFacadeInterface;

class AntelopeSearchWriter
{
    protected EventBehaviorFacadeInterface $eventBehaviorFacade;

    protected AntelopeFacadeInterface $antelopeFacade;

    protected AntelopeSearchRepositoryInterface $antelopeSearchRepository;

    protected AntelopeSearchEntityManagerInterface $antelopeSearchEntityManager;

    /**
     * @param \Spryker\Zed\EventBehavior\Business\EventBehaviorFacadeInterface $eventBehaviorFacade
     * @param \Pyz\Zed\Antelope\Business\AntelopeFacadeInterface $antelopeFacade
     * @param \Pyz\Zed\AntelopeSearch\Persistence\AntelopeSearchRepositoryInterface $antelopeSearchRepository
     * @param \Pyz\Zed\AntelopeSearch\Persistence\AntelopeSearchEntityManagerInterface $antelopeSearchEntityManager
     */
    public function __construct(
        EventBehaviorFacadeInterface $eventBehaviorFacade,
        AntelopeFacadeInterface $antelopeFacade,
        AntelopeSearchRepositoryInterface $antelopeSearchRepository,
        AntelopeSearchEntityManagerInterface $antelopeSearchEntityManager,
    ) {
        $this->eventBehaviorFacade = $eventBehaviorFacade;
        $this->antelopeFacade = $antelopeFacade;
        $this->antelopeSearchRepository = $antelopeSearchRepository;
        $this->antelopeSearchEntityManager = $antelopeSearchEntityManager;
    }

    /**
     * @param array<\Generated\Shared\Transfer\EventEntityTransfer> $eventTransfers
     *
     * @return void
     */
    public function writeCollectionByAntelopeEvents(array $eventTransfers): void
    {
        $antelopeIds = $this->eventBehaviorFacade->getEventTransferIds($eventTransfers);

        $this->writeCollectionByAntelopeIds($antelopeIds);
    }

    /**
     * @param array<int> $antelopeIds
     *
     * @return void
     */
    protected function writeCollectionByAntelopeIds(array $antelopeIds): void
    {
        if (!$antelopeIds) {
            return;
        }

        $antelopeTransfersIndexed = $this->getAntelopeTransfersIndexed($antelopeIds);
        $antelopeSearchTransfersIndexed = $this->getAntelopeSearchTransfersIndexed(
            array_keys($antelopeTransfersIndexed),
        );

        foreach ($antelopeTransfersIndexed as $antelopeId => $antelopeTransfer) {
            $searchData = $antelopeTransfer->toArray();

            $antelopeSearchTransfer = $antelopeSearchTransfersIndexed[$antelopeId] ?? new AntelopeSearchTransfer();

            $antelopeSearchTransfer
                ->setFkAntelope($antelopeId)
                ->setData($searchData);

            if ($antelopeSearchTransfer->getIdAntelopeSearch() === null) {
                $this->antelopeSearchEntityManager->createAntelopeSearch($antelopeSearchTransfer);

                continue;
            }

            $this->antelopeSearchEntityManager->updateAntelopeSearch($antelopeSearchTransfer);
        }
    }

    /**
     * @param array<int> $antelopeIds
     *
     * @return array<\Generated\Shared\Transfer\AntelopeTransfer>
     */
    protected function getAntelopeTransfersIndexed(array $antelopeIds): array
    {
        $antelopeCriteriaTransfer = (new AntelopeCriteriaTransfer())
            ->setIdsAntelope($antelopeIds);

        $antelopeTransfers = $this->antelopeFacade
            ->getAntelopes($antelopeCriteriaTransfer);

        $antelopeTransfersIndexed = [];
        foreach ($antelopeTransfers as $antelopeTransfer) {
            $antelopeTransfersIndexed[$antelopeTransfer->getIdAntelope()] = $antelopeTransfer;
        }

        return $antelopeTransfersIndexed;
    }

    /**
     * @param array<int> $antelopeIds
     *
     * @return array<\Generated\Shared\Transfer\AntelopeSearchTransfer>
     */
    protected function getAntelopeSearchTransfersIndexed(array $antelopeIds): array
    {
        $antelopeSearchCriteriaTransfer = (new AntelopeSearchCriteriaTransfer())
            ->setFksAntelope($antelopeIds);

        $antelopeSearchTransfers = $this->antelopeSearchRepository
            ->getAntelopeSearches($antelopeSearchCriteriaTransfer);

        $antelopeSearchTransfersIndexed = [];
        foreach ($antelopeSearchTransfers as $antelopeSearchTransfer) {
            $antelopeSearchTransfersIndexed[$antelopeSearchTransfer->getFkAntelope()] = $antelopeSearchTransfer;
        }

        return $antelopeSearchTransfersIndexed;
    }
}
