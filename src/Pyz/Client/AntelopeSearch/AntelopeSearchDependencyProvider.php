<?php

namespace Pyz\Client\AntelopeSearch;

use Pyz\Client\AntelopeSearch\Plugin\Elasticsearch\ResultFormatter\AntelopeSearchResultFormatterPlugin;
use Spryker\Client\Kernel\AbstractDependencyProvider;
use Spryker\Client\Kernel\Container;
use Spryker\Client\Search\SearchClientInterface;

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
        $container = $this->addSearchClient($container);
        $container = $this->addAntelopeSearchResultFormatterPlugins($container);

        return $container;
    }

    /**
     * @param \Spryker\Client\Kernel\Container $container
     *
     * @return \Spryker\Client\Kernel\Container
     */
    protected function addSearchClient(Container $container): Container
    {
        $container[static::CLIENT_SEARCH] = function (Container $container): SearchClientInterface {
            return $container->getLocator()->search()->client();
        };

        return $container;
    }

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
            new AntelopeSearchResultFormatterPlugin(),
        ];
    }
}
