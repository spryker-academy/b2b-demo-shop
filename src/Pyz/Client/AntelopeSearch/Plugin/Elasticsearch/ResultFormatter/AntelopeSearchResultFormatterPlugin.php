<?php

namespace Pyz\Client\AntelopeSearch\Plugin\Elasticsearch\ResultFormatter;

use Elastica\ResultSet;
use Generated\Shared\Transfer\AntelopeTransfer;
use Spryker\Client\SearchElasticsearch\Plugin\ResultFormatter\AbstractElasticsearchResultFormatterPlugin;

class AntelopeSearchResultFormatterPlugin extends AbstractElasticsearchResultFormatterPlugin
{
    public const NAME = 'antelope';

    /**
     * @return string
     */
    public function getName(): string
    {
        return static::NAME;
    }

    /**
     * @param \Elastica\ResultSet $searchResult
     * @param array $requestParameters
     *
     * @return \Generated\Shared\Transfer\AntelopeTransfer|null
     */
    protected function formatSearchResult(ResultSet $searchResult, array $requestParameters): ?AntelopeTransfer
    {
        foreach ($searchResult->getResults() as $document) {
            // TODO: Return the result data of the document`s source as AntelopeTransfer
            // Hint-1: $document is of type Elastica\Result with the property "source" which can be access with the dedicated getter
            // Hint-2: You can use the method `fromArray()` of AntelopeTransfer to fill the data which should have the same property names as the antelope data in the search result
            return null;
        }

        return null;
    }
}
