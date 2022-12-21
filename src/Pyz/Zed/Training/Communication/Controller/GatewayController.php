<?php

namespace Pyz\Zed\Training\Communication\Controller;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

/**
 * @method \Pyz\Zed\Training\Business\TrainingFacadeInterface getFacade()
 */
class GatewayController extends AbstractGatewayController
{
    public function findAntelopeAction(AntelopeCriteriaTransfer $antelopeCriteria)
    {
        return $this->getFacade()->findAntelope($antelopeCriteria);
    }

    // TODO: Add method for creating an antelope by using the facade
    // Hint: The method should accept an AntelopeTransfer for the needed antelope data as parameter
}
