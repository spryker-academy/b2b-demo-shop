<?php

namespace Pyz\Zed\Customer\Communication\Controller;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Spryker\Zed\Customer\Communication\Controller\ViewController as SprykerViewController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \Pyz\Zed\Customer\Communication\CustomerCommunicationFactory getFactory()
 */
class ViewController extends SprykerViewController
{
    public function indexAction(Request $request)
    {
        $response = parent::indexAction($request);

        if (!is_array($response)) {
            return $response;
        }

        if (!isset($response['customer']) || !$response['customer']->getFkAntelope()) {
            return $response;
        }

        $antelopeCriteriaTransfer = new AntelopeCriteriaTransfer();
        $antelopeCriteriaTransfer->setIdAntelope($response['customer']->getFkAntelope());

        // TODO: Fetch and assign an antelope to the response array which gets passed to the template
        // Hint-1: Use the factory which has access to the TrainingFacade which offers the method
        // to find an antelope which returns an AntelopeResponseTransfer
        // Hint-2: Make sure to return the antelope object from the AntelopeResponseTransfer
        $response['antelope'] = null;

        return $response;
    }
}
