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
            return (new AntelopeTransfer())->fromArray($document->getSource());
        }

        return null;
    }
}
