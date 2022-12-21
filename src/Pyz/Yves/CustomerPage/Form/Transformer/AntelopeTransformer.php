<?php

namespace Pyz\Yves\CustomerPage\Form\Transformer;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;
use Pyz\Client\Training\TrainingClientInterface;
use Symfony\Component\Form\DataTransformerInterface;

class AntelopeTransformer implements DataTransformerInterface
{
    protected TrainingClientInterface $trainingClient;

    // TODO: Make TrainingClient available through the constructor

    public function transform($value)
    {
        if (!$value) {
            return '';
        }

        // TODO-1: Use the TrainingClient to find an antelope
        // Hint: The `value` is the ID of the antelope
        $antelopeResponseTransfer = new AntelopeResponseTransfer();

        if (!$antelopeResponseTransfer->getAntelope()) {
            return '';
        }

        return $antelopeResponseTransfer->getAntelope()->getName();
    }

    public function reverseTransform($value)
    {
        if (!$value) {
            return null;
        }

        // TODO-2: Use the TrainingClient to find an antelope
        // Hint: The `value` is the name of the antelope
        $antelopeResponseTransfer = new AntelopeResponseTransfer();

        if ($antelopeResponseTransfer->getAntelope()) {
            // TODO-3: Return the antelope id
            return null;
        }

        // TODO-4: Use the TrainingClient to create an antelope and return the antelope's id
        return null;
    }
}
