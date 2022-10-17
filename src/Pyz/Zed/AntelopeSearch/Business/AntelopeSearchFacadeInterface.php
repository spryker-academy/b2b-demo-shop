<?php

namespace Pyz\Zed\AntelopeSearch\Business;

interface AntelopeSearchFacadeInterface
{
    /**
     * Specification:
     * - Retrieves all antelopes using IDs from $eventTransfers.
     * - Updates entities from `pyz_antelope_search` with actual data from obtained antelopes.
     * - Sends a copy of data to queue based on module config.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\EventEntityTransfer[] $eventTransfers
     *
     * @return void
     */
    public function writeCollectionByAntelopeEvents(array $eventTransfers): void;
}
