<?php

namespace Pyz\Client\AntelopeSearch;

use Pyz\Client\AntelopeSearch\Plugin\Elasticsearch\Query\AntelopeSearchQueryPlugin;
use Spryker\Client\Kernel\AbstractFactory;
use Spryker\Client\Search\SearchClientInterface;

class AntelopeSearchFactory extends AbstractFactory
{
    /**
     * @param string $name
     *
     * @return \Pyz\Client\AntelopeSearch\Plugin\Elasticsearch\Query\AntelopeSearchQueryPlugin
     */
    public function createAntelopeQueryPlugin(string $name): AntelopeSearchQueryPlugin
    {
        return new AntelopeSearchQueryPlugin($name);
    }

    /**
     * @return array<\Spryker\Client\SearchExtension\Dependency\Plugin\ResultFormatterPluginInterface>
     */
    public function getSearchQueryFormatters(): array
    {
        return $this->getProvidedDependency(AntelopeSearchDependencyProvider::ANTELOPE_SEARCH_RESULT_FORMATTER_PLUGINS);
    }

    /**
     * @return \Spryker\Client\Search\SearchClientInterface
     */
    public function getSearchClient(): SearchClientInterface
    {
        return $this->getProvidedDependency(AntelopeSearchDependencyProvider::CLIENT_SEARCH);
    }
}
