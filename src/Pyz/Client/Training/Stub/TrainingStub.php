<?php

namespace Pyz\Client\Training\Stub;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;
use Spryker\Client\ZedRequest\Stub\ZedRequestStub;

class TrainingStub extends ZedRequestStub
{
    public function findAntelope(AntelopeCriteriaTransfer $antelopeCriteria): AntelopeResponseTransfer
    {
        /** @var \Generated\Shared\Transfer\AntelopeResponseTransfer $antelopeResponseTransfer */

        // TODO: Fill in the right path for '/module-name/controller-name/action-name'
        // Hint: We want to call the src/Pyz/Zed/Training/Communication/Controller/GatewayController.php::findAntelopeAction()

        $antelopeResponseTransfer = $this->zedStub->call('/module-name/controller-name/action-name', $antelopeCriteria);

        return $antelopeResponseTransfer;
    }
}
