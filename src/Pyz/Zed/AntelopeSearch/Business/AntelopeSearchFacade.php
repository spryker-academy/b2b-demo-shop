<?php

namespace Pyz\Zed\AntelopeSearch\Business;

use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Pyz\Zed\AntelopeSearch\Business\AntelopeSearchBusinessFactory getFactory()
 * @method \Pyz\Zed\AntelopeSearch\Persistence\AntelopeSearchRepositoryInterface getRepository()
 * @method \Pyz\Zed\AntelopeSearch\Persistence\AntelopeSearchEntityManagerInterface getEntityManager()
 */
class AntelopeSearchFacade extends AbstractFacade implements AntelopeSearchFacadeInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param array<\Generated\Shared\Transfer\EventEntityTransfer> $eventTransfers
     *
     * @return void
     */
    public function writeCollectionByAntelopeEvents(array $eventTransfers): void
    {
        // TODO-1: Use the logic writeCollectionByAntelopeEvents from the `AntelopeSearchWriter`
        // Hint-1: You can get the BusinessFactory by using `$this->getFactory()`
    }
}
