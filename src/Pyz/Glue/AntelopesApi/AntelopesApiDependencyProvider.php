<?php

namespace Pyz\Glue\AntelopesApi;

use Pyz\Client\AntelopeSearch\AntelopeSearchClientInterface;
use Spryker\Glue\Kernel\AbstractBundleDependencyProvider;
use Spryker\Glue\Kernel\Container;

class AntelopesApiDependencyProvider extends AbstractBundleDependencyProvider
{
    public const CLIENT_ANTELOPE_SEARCH = 'CLIENT_ANTELOPE_SEARCH';

    /**
     * @param \Spryker\Glue\Kernel\Container $container
     *
     * @return \Spryker\Glue\Kernel\Container
     */
    public function provideDependencies(Container $container): Container
    {
        $container = parent::provideDependencies($container);

        $container = $this->addAntelopeSearchClient($container);

        return $container;
    }

    /**
     * @param \Spryker\Glue\Kernel\Container $container
     *
     * @return \Spryker\Glue\Kernel\Container
     */
    protected function addAntelopeSearchClient(Container $container): Container
    {
        $container[static::CLIENT_ANTELOPE_SEARCH] = function (Container $container): AntelopeSearchClientInterface {
            return $container->getLocator()->antelopeSearch()->client();
        };

        return $container;
    }
}
