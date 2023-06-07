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

        return $container;
    }

    // TODO-1: Add the method `addAntelopeSearchClient` and call it in the `provideDependencies()`
    // Hint-1: Something similar was already done for another module here: `src/Pyz/Zed/AntelopeGui/AntelopeGuiDependencyProvider.php` (`addAntelopeFacade()`)
    // Hint-2: Use the constant CLIENT_ANTELOPE_SEARCH
}
