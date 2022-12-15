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

        $antelopeCriteriaTransfer = new AntelopeCriteriaTransfer();
        $antelopeCriteriaTransfer->setName($antelopeName);

        $antelopeResponseTransfer = $this->getFacade()
            ->findAntelope($antelopeCriteriaTransfer);

        $antelopeTransfer = $antelopeResponseTransfer->getAntelope();

        if (!$antelopeTransfer) {
            $antelopeTransfer = $this->getFacade()
                ->createAntelope((new AntelopeTransfer())->setName($antelopeName));
        }

        return $this->viewResponse([
            'antelope' => $antelopeTransfer,
        ]);
    }
}
