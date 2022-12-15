<?php

namespace Pyz\Client\Training;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;

interface TrainingClientInterface
{
    /**
     * Specification:
     * - Finds antelope by defined criteria
     * - Returns a response-transfer which can hold an antelope if one is found
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\AntelopeCriteriaTransfer $antelopeCriteria
     * @return \Generated\Shared\Transfer\AntelopeResponseTransfer
     */
    public function findAntelope(AntelopeCriteriaTransfer $antelopeCriteria): AntelopeResponseTransfer;
}
