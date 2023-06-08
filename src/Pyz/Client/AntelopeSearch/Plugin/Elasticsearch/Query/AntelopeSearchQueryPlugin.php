<?php

namespace Pyz\Client\AntelopeSearch\Plugin\Elasticsearch\Query;

use Elastica\Query;
use Elastica\Query\BoolQuery;
use Elastica\Query\Exists;
use Elastica\Query\MatchQuery;
use Generated\Shared\Transfer\SearchContextTransfer;
use Spryker\Client\SearchExtension\Dependency\Plugin\QueryInterface;
use Spryker\Client\SearchExtension\Dependency\Plugin\SearchContextAwareQueryInterface;

class AntelopeSearchQueryPlugin implements QueryInterface, SearchContextAwareQueryInterface
{
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var string
     */
    protected const SOURCE_IDENTIFIER = 'antelope';

    /**
     * @var \Generated\Shared\Transfer\SearchContextTransfer
     */
    protected SearchContextTransfer $searchContextTransfer;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->setupDefaultSearchContext();

        $this->name = $name;
    }

    /**
     * @return \Elastica\Query
     */
    public function getSearchQuery(): Query
    {
        $boolQuery = (new BoolQuery())
            ->addMust(
                new Exists('id_antelope'),
            )
            ->addMust(
                new MatchQuery('name', $this->name),
            );

        $query = (new Query())
            ->setQuery($boolQuery);

        return $query;
    }

    /**
     * {@inheritDoc}
     *
     * @return \Generated\Shared\Transfer\SearchContextTransfer
     */
    public function getSearchContext(): SearchContextTransfer
    {
        if (!$this->hasSearchContext()) {
            $this->setupDefaultSearchContext();
        }

        return $this->searchContextTransfer;
    }

    /**
     * {@inheritDoc}
     *
     * @param \Generated\Shared\Transfer\SearchContextTransfer $searchContextTransfer
     *
     * @return void
     */
    public function setSearchContext(SearchContextTransfer $searchContextTransfer): void
    {
        $this->searchContextTransfer = $searchContextTransfer;
    }

    /**
     * @return void
     */
    protected function setupDefaultSearchContext(): void
    {
        $searchContextTransfer = new SearchContextTransfer();
        $searchContextTransfer->setSourceIdentifier(static::SOURCE_IDENTIFIER);

        $this->searchContextTransfer = $searchContextTransfer;
    }

    /**
     * @return bool
     */
    protected function hasSearchContext(): bool
    {
        return (bool)$this->searchContextTransfer;
    }
}
