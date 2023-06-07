<?php

namespace Pyz\Zed\AntelopeSearch\Persistence;

use Generated\Shared\Transfer\AntelopeSearchCriteriaTransfer;

interface AntelopeSearchRepositoryInterface
{
    /**
     * @param \Generated\Shared\Transfer\AntelopeSearchCriteriaTransfer $antelopeSearchCriteriaTransfer
     *
     * @return array<\Generated\Shared\Transfer\AntelopeSearchTransfer>
     */
    public function getAntelopeSearches(AntelopeSearchCriteriaTransfer $antelopeSearchCriteriaTransfer): array;
}
