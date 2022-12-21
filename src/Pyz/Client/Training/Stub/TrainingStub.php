<?php

namespace Pyz\Client\Training\Stub;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;
use Spryker\Client\ZedRequest\ZedRequestClientInterface;

class TrainingStub
{
    /**
     * @var \Spryker\Client\ZedRequest\ZedRequestClientInterface
     */
    protected ZedRequestClientInterface $zedRequestClient;

    /**
     * @param \Spryker\Client\ZedRequest\ZedRequestClientInterface $zedRequestClient
     */
    public function __construct(ZedRequestClientInterface $zedRequestClient)
    {
        $this->zedRequestClient = $zedRequestClient;
    }

    public function findAntelope(AntelopeCriteriaTransfer $antelopeCriteria): AntelopeResponseTransfer
    {
        /** @var \Generated\Shared\Transfer\AntelopeResponseTransfer $antelopeResponseTransfer */
        $antelopeResponseTransfer = $this->zedRequestClient->call('/training/gateway/find-antelope', $antelopeCriteria);

        return $antelopeResponseTransfer;
    }

    public function createAntelope(AntelopeTransfer $antelopeTransfer): AntelopeTransfer
    {
        /** @var \Generated\Shared\Transfer\AntelopeTransfer $antelopeTransfer */
        $antelopeTransfer = $this->zedRequestClient->call('/training/gateway/create-antelope', $antelopeTransfer);

        return $antelopeTransfer;
    }
}
