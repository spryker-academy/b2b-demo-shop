<?php

namespace Pyz\Yves\AntelopePage;

use Pyz\Client\AntelopeSearch\AntelopeSearchClientInterface;
use Spryker\Yves\Kernel\AbstractBundleDependencyProvider;
use Spryker\Yves\Kernel\Container;

class AntelopePageDependencyProvider extends AbstractBundleDependencyProvider
{
    /**
     * @var string
     */
    public const CLIENT_ANTELOPE_SEARCH = 'CLIENT_ANTELOPE_SEARCH';

    /**
     * @param \Spryker\Yves\Kernel\Container $container
     *
     * @return \Spryker\Yves\Kernel\Container
     */
    public function provideDependencies(Container $container): Container
    {
        $container = parent::provideDependencies($container);
        $container = $this->addAntelopeSearchClient($container);

        return $container;
    }

    /**
     * @param \Spryker\Yves\Kernel\Container $container
     *
     * @return \Spryker\Yves\Kernel\Container
     */
    protected function addAntelopeSearchClient(Container $container): Container
    {
        $container->set(static::CLIENT_ANTELOPE_SEARCH, function (Container $container): AntelopeSearchClientInterface {
            return $container->getLocator()->antelopeSearch()->client();
        });

        return $container;
    }
}
