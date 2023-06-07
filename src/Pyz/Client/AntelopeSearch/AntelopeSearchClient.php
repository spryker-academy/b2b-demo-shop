<?php

namespace Pyz\Client\AntelopeSearch;

use Generated\Shared\Transfer\AntelopeTransfer;
use Pyz\Client\AntelopeSearch\Plugin\Elasticsearch\ResultFormatter\AntelopeSearchResultFormatterPlugin;
use Spryker\Client\Kernel\AbstractClient;

/**
 * @method \Pyz\Client\AntelopeSearch\AntelopeSearchFactory getFactory()
 */
class AntelopeSearchClient extends AbstractClient implements AntelopeSearchClientInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param string $name
     *
     * @return \Generated\Shared\Transfer\AntelopeTransfer|null
     */
    public function getAntelopeByName(string $name): ?AntelopeTransfer
    {
        // TODO-1: Create the search-query through the factory
        // Hint-1: Use the helper method `getFactory()` to have access to the method which instantiates the AntelopeQueryPlugin
        // Hint-2: Don't forget to pass the right parameter
        $searchQuery = null;

        // TODO-2: Get the search-query-formatters through the factory
        // Hint-1: Use the helper method `getFactory()` to have access to the method which returns the formatters which we defined in the DependencyProvider
        $resultFormatters = [];

        // TODO-3: Use the SearchClient to perform a search
        // Hint-1: Use the helper method `getFactory()` to access the SearchClient
        // Hint-2: Choose the right method to "search" and pass the search-query and result-formatters
        $searchResults = [];

        return $searchResults[AntelopeSearchResultFormatterPlugin::NAME];
    }
}
