<?php

namespace Pyz\Yves\TrainingPage;

use Spryker\Yves\Kernel\AbstractBundleDependencyProvider;
use Spryker\Yves\Kernel\Container;

class TrainingPageDependencyProvider extends AbstractBundleDependencyProvider
{
    public const CLIENT_TRAINING = 'CLIENT_TRAINING';

    public function provideDependencies(Container $container): Container
    {
        $container = $this->addTrainingClient($container);

        return $container;
    }

    protected function addTrainingClient(Container $container): Container
    {
        // TODO: Make the TrainingClient available
        // Hint: It works exactly like shown in `src/Pyz/Client/Training/TrainingDependencyProvider.php`
    }
}
