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
        $searchQuery = $this->getFactory()
            ->createAntelopeQueryPlugin($name);

        $resultFormatters = $this->getFactory()
            ->getSearchQueryFormatters();

        $searchResults = $this->getFactory()
            ->getSearchClient()
            ->search(
                $searchQuery,
                $resultFormatters,
            );

        return $searchResults[AntelopeSearchResultFormatterPlugin::NAME];
    }
}
