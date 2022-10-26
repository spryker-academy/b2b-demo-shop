<?php

namespace Pyz\Zed\AntelopeSearch\Persistence;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeSearchCriteriaTransfer;

interface AntelopeSearchRepositoryInterface
{
    /**
     * @param \Generated\Shared\Transfer\AntelopeCriteriaTransfer $antelopeCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeTransfer[]
     */
    public function getAntelopes(AntelopeCriteriaTransfer $antelopeCriteriaTransfer): array;

    /**
     * @param \Generated\Shared\Transfer\AntelopeSearchCriteriaTransfer $antelopeSearchCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeSearchTransfer[]
     */
    public function getAntelopeSearches(AntelopeSearchCriteriaTransfer $antelopeSearchCriteriaTransfer): array;
}
