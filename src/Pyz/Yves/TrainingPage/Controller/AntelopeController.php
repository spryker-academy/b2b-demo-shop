<?php

namespace Pyz\Yves\TrainingPage\Controller;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use SprykerShop\Yves\ShopApplication\Controller\AbstractController;

/**
 * @method \Pyz\Yves\TrainingPage\TrainingPageFactory getFactory()
 */
class AntelopeController extends AbstractController
{
    public function getAction(string $name)
    {
        $antelopeCriteriaTransfer = null;
        // TODO: Instantiate AntelopeCriteriaTransfer and set the antelope name

        $antelopeResponseTransfer = null;
        // TODO: Use the TrainingClient which is accessible by using `$this->getFactory()`
        // to find an antelope by an AntelopeCriteriaTransfer

        return $this->view(
            ['antelope' => $antelopeResponseTransfer->getAntelope()],
            [],
            '@TrainingPage/views/antelope/get.twig'
        );
    }
}
