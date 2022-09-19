<?php

namespace Pyz\Zed\Antelope\Business;

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
}
