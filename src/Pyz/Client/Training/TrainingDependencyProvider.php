<?php

namespace Pyz\Client\Training;

use Spryker\Client\Kernel\AbstractDependencyProvider;
use Spryker\Client\Kernel\Container;

class TrainingDependencyProvider extends AbstractDependencyProvider
{
    public const CLIENT_ZED_REQUEST = 'CLIENT_ZED_REQUEST';

    public const CLIENT_STORE = 'CLIENT_STORE';

    public function provideServiceLayerDependencies(Container $container)
    {
        $container = $this->addZedRequestClient($container);
        $container = $this->addStoreClient($container);

        return $container;
    }

    protected function addZedRequestClient(Container $container)
    {
        // TODO: Make the ZedRequestClient available
        // Hint: Take a look at the `addStoreClient()` method - The only things different are the constant
        // and what you write after the `getLocator()`
    }

    protected function addStoreClient(Container $container)
    {
        $container->set(static::CLIENT_STORE, function (Container $container) {
            return $container->getLocator()->store()->client();
        });

        return $container;
    }
}
