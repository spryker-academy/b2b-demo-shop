<?php

namespace Pyz\Zed\Training\Business;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;

interface TrainingFacadeInterface
{
    /**
     * Specification:
     * - Creates and persists antelope
     * - Returns antelope with assigned ID
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\AntelopeTransfer $antelopeTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeTransfer
     */
    public function createAntelope(AntelopeTransfer $antelopeTransfer): AntelopeTransfer;

    /**
     * Specification:
     * - Finds antelope by defined criteria
     * - Returns a response-transfer which can hold an antelope if one is found
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\AntelopeCriteriaTransfer $antelopeCriteria
     *
     * @return \Generated\Shared\Transfer\AntelopeResponseTransfer
     */
    public function findAntelope(AntelopeCriteriaTransfer $antelopeCriteria): AntelopeResponseTransfer;
}
