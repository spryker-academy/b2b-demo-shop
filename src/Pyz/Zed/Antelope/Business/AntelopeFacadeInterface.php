<?php

namespace Pyz\Zed\Antelope\Business;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;

interface AntelopeFacadeInterface
{
    /**
     * Specification:
     * - Creates a new antelope into the database
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\AntelopeTransfer $antelopeTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeTransfer
     */
    public function createAntelope(AntelopeTransfer $antelopeTransfer): AntelopeTransfer;

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\AntelopeCriteriaTransfer $antelopeCriteriaTransfer
     *
     * @return array<\Generated\Shared\Transfer\AntelopeTransfer>
     */
    public function getAntelopes(AntelopeCriteriaTransfer $antelopeCriteriaTransfer): array;
}
