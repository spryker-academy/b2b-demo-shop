<?php

namespace Pyz\Client\Training;

use Pyz\Client\Training\Stub\TrainingStub;
use Spryker\Client\ZedRequest\ZedRequestClientInterface;
use Spryker\Client\Kernel\AbstractFactory;

class TrainingFactory extends AbstractFactory
{
    public function createTrainingStub(): TrainingStub
    {
        // TODO: Instantiate the TrainingStub with the right dependency
        // Hint: You can see the needed parameter(s) for the constructor either through your IDE
        // or by looking into the parent class of TrainingStub
    }

    public function getZedRequestClient(): ZedRequestClientInterface
    {
        return $this->getProvidedDependency(TrainingDependencyProvider::CLIENT_ZED_REQUEST);
    }
}
