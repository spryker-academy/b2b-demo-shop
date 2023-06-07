<?php

namespace Pyz\Client\AntelopeSearch;

use Generated\Shared\Transfer\AntelopeTransfer;

interface AntelopeSearchClientInterface
{
    /**
     * Specification:
     * - Searches for an antelope by a given name and returns the first match
     *
     * @api
     *
     * @param string $name
     *
     * @return \Generated\Shared\Transfer\AntelopeTransfer|null
     */
    public function getAntelopeByName(string $name): ?AntelopeTransfer;
}
