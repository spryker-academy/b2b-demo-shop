<?php

namespace Pyz\Zed\Training\Communication\Controller;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

/**
 * @method \Pyz\Zed\Training\Business\TrainingFacadeInterface getFacade()
 */
class GatewayController extends AbstractGatewayController
{
    public function findAntelopeAction(AntelopeCriteriaTransfer $antelopeCriteria)
    {
        // TODO: With the help of the facade find an antelope and return it
    }
}
