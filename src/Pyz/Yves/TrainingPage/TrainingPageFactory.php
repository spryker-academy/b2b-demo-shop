<?php

namespace Pyz\Yves\TrainingPage;

use Pyz\Client\Training\TrainingClientInterface;
use Spryker\Yves\Kernel\AbstractFactory;

class TrainingPageFactory extends AbstractFactory
{
    public function getTrainingClient(): TrainingClientInterface
    {
        // TODO: Get the provided dependency for the TrainingClient
        // Hint-1: Have a look at src/Pyz/Client/Training/TrainingFactory.php::getZedRequestClient() for the right syntax
        // Hint-2: The name of the constant to use is 'TrainingPageDependencyProvider::CLIENT_TRAINING'
    }
}
