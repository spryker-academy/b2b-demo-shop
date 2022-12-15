<?php

namespace Pyz\Zed\Training\Business;


use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;

/**
 * @method \Pyz\Zed\Training\Business\TrainingBusinessFactory getFactory()
 */
interface TrainingFacadeInterface
{
    /**
     * {@inheritDoc}
     *
     * @param \Generated\Shared\Transfer\AntelopeTransfer $antelopeTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeTransfer
     * @api
     *
     */
    public function createAntelope(AntelopeTransfer $antelopeTransfer
    ): AntelopeTransfer;

    /**
     * {@inheritDoc}
     *
     * @param \Generated\Shared\Transfer\AntelopeCriteriaTransfer $antelopeCriteria
     *
     * @return \Generated\Shared\Transfer\AntelopeResponseTransfer
     * @api
     *
     */
    public function findAntelope(AntelopeCriteriaTransfer $antelopeCriteria
    ): AntelopeResponseTransfer;
}
