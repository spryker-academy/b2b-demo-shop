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
        // TODO-1: Return an instance of the AntelopeSearchQueryPlugin
        // Hint-1: Do not forget to pass the right parameter for the constructor
    }

    /**
     * @return array<\Spryker\Client\SearchExtension\Dependency\Plugin\ResultFormatterPluginInterface>
     */
    public function getSearchQueryFormatters(): array
    {
        return $this->getProvidedDependency(AntelopeSearchDependencyProvider::ANTELOPE_SEARCH_RESULT_FORMATTER_PLUGINS);
    }

    // TODO-2: Create the getSearchClient method here - The return type should be `SearchClientInterface`
    // Hint-1: Use the getProvidedDependency() method and provide the key you used in the AntelopeSearchDependencyProvider class: CLIENT_SEARCH
}
