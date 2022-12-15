<?php

namespace Pyz\Zed\Training\Communication\Controller;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \Pyz\Zed\Training\Business\TrainingFacadeInterface getFacade()
 */
class AntelopeController extends AbstractController
{
    public function addAction(Request $request)
    {
        $antelopeName = $request->query->get('name', 'Oskar');

        $antelopeCriteriaTransfer = null;
        // TODO: Instantiate AntelopeCriteriaTransfer and set the antelope name

        $antelopeResponseTransfer = $this->getFacade()
            ->findAntelope($antelopeCriteriaTransfer);

        $antelopeTransfer = $antelopeResponseTransfer->getAntelope();

        if (!$antelopeTransfer) {
            // TODO: If there isn't an antelope with that name already,
            // create an AntelopeTransfer and set the right antelope name
            // and persist it with the help of the method `$this->getFacade()->createAntelope()`
        }

        return $this->viewResponse([
            'antelope' => $antelopeTransfer,
        ]);
    }
}
