<?php

namespace Pyz\Zed\Training\Business\Writer;

use Generated\Shared\Transfer\AntelopeTransfer;
use Pyz\Zed\Training\Persistence\TrainingEntityManagerInterface;

class AntelopeWriter
{
    protected TrainingEntityManagerInterface $trainingEntityManager;

    // TODO: Make TrainingEntityManager available through the constructor

    public function create(AntelopeTransfer $antelopeTransfer): AntelopeTransfer
    {
        // TODO: Use the TrainingEntityManager to create an antelope
    }
}
