<?php

namespace Pyz\Glue\AntelopesRestApi;

use Pyz\Client\AntelopeSearch\AntelopeSearchClientInterface;
use Spryker\Glue\Kernel\AbstractBundleDependencyProvider;
use Spryker\Glue\Kernel\Container;

class AntelopesRestApiDependencyProvider extends AbstractBundleDependencyProvider
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

        return $container;
    }

    // TODO-1: Add the method `addAntelopeSearchClient` and call it in the `provideDependencies()`
    // Hint-1: Something similar was already done for another module here: `src/Pyz/Zed/AntelopeGui/AntelopeGuiDependencyProvider.php` (`addAntelopeFacade()`)
    // Hint-2: Use the constant CLIENT_ANTELOPE_SEARCH
}
