<?php

namespace Pyz\Zed\AntelopeSearch\Persistence;

use Generated\Shared\Transfer\AntelopeSearchTransfer;

interface AntelopeSearchEntityManagerInterface
{
    /**
     * @param \Generated\Shared\Transfer\AntelopeSearchTransfer $antelopeSearchTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeSearchTransfer
     */
    public function createAntelopeSearch(AntelopeSearchTransfer $antelopeSearchTransfer): AntelopeSearchTransfer;

    /**
     * @param \Generated\Shared\Transfer\AntelopeSearchTransfer $antelopeSearchTransfer
     *
     * @throws \Pyz\Zed\AntelopeSearch\Persistence\Exception\AntelopeSearchNotFoundException
     *
     * @return \Generated\Shared\Transfer\AntelopeSearchTransfer
     */
    public function updateAntelopeSearch(AntelopeSearchTransfer $antelopeSearchTransfer): AntelopeSearchTransfer;
}
