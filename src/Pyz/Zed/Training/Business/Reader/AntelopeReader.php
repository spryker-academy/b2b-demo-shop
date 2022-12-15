<?php

namespace Pyz\Zed\Training\Business\Reader;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;
use Pyz\Zed\Training\Persistence\TrainingRepositoryInterface;

class AntelopeReader
{
    protected TrainingRepositoryInterface $trainingRepository;

    // TODO: Make TrainingRepository available through the constructor

    public function findAntelope(AntelopeCriteriaTransfer $antelopeCriteria): AntelopeResponseTransfer
    {
        $antelopeTransfer = null;// TODO: Use the TrainingRepository to find an antelope

        // TODO: Create and return AntelopeResponseTransfer
        // and set the properties `isSuccessful` and `antelope` based on
        // the return value from the TrainingRepository
        // Hint: If no antelope is returned from the repository `isSuccessful` must be false
    }
}
