<?php

namespace Pyz\Client\AntelopeSearch;

use Pyz\Client\AntelopeSearch\Plugin\Elasticsearch\ResultFormatter\AntelopeSearchResultFormatterPlugin;
use Spryker\Client\Kernel\AbstractDependencyProvider;
use Spryker\Client\Kernel\Container;

class AntelopeSearchDependencyProvider extends AbstractDependencyProvider
{
    public const CLIENT_SEARCH = 'CLIENT_SEARCH';

    public const ANTELOPE_SEARCH_RESULT_FORMATTER_PLUGINS = 'ANTELOPE_SEARCH_RESULT_FORMATTER_PLUGINS';

    /**
     * @param \Spryker\Client\Kernel\Container $container
     *
     * @return \Spryker\Client\Kernel\Container
     */
    public function provideServiceLayerDependencies(Container $container): Container
    {
        $container = $this->addAntelopeSearchResultFormatterPlugins($container);

        return $container;
    }

    // TODO-1: Add the method `addSearchClient` and call it in the `provideServiceLayerDependencies()`
    // Hint-1: Something similar was already done for another module here: `src/Pyz/Zed/AntelopeGui/AntelopeGuiDependencyProvider.php` (`addAntelopeFacade()`)
    // Hint-2: Use the constant CLIENT_SEARCH

    /**
     * @param \Spryker\Client\Kernel\Container $container
     *
     * @return \Spryker\Client\Kernel\Container
     */
    public function addAntelopeSearchResultFormatterPlugins(Container $container): Container
    {
        $container[static::ANTELOPE_SEARCH_RESULT_FORMATTER_PLUGINS] = function () {
            return $this->getAntelopeSearchResultFormatterPlugins();
        };

        return $container;
    }

    /**
     * @return array<\Spryker\Client\SearchExtension\Dependency\Plugin\ResultFormatterPluginInterface>
     */
    public function getAntelopeSearchResultFormatterPlugins(): array
    {
        return [
            // TODO-2: Return an instance of our ResultFormatter-Plugin we defined for the AntelopeSearch
            // Hint-1: Have a look in the directory `src/Pyz/Client/AntelopeSearch/Plugin/Elasticsearch/ResultFormatter/` for the right class
        ];
    }
}
