<?php

namespace Pyz\Client\AntelopeSearch\Plugin\Elasticsearch\Query;

use Elastica\Query;
use Elastica\Query\BoolQuery;
use Elastica\Query\Exists;
use Elastica\Query\MatchQuery;
use Generated\Shared\Transfer\SearchContextTransfer;
use Spryker\Client\SearchExtension\Dependency\Plugin\QueryInterface;
use Spryker\Client\SearchExtension\Dependency\Plugin\SearchContextAwareQueryInterface;

// TODO-1: Use the right interfaces
// Hint-1: Check the use-statements, it has to be 2 interfaces
class AntelopeSearchQueryPlugin
{
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var string
     */
    protected const SOURCE_IDENTIFIER = 'TODO-2: Use the correct identifier to address the antelope';

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
        // TODO-3: Create a BoolQuery that looks for the existence of the field `id_antelope` and if the property `name` matches the searched name-string
        // Hint-1: You can use the method `addMust()` of the BoolQuery to specify certain query rules
        // Hint-2: In this exercise the argument for `addMust()` should either be of the type `Exists` or the type `MatchQuery`
        // Hint-3: The antelope-name to query for is stored in a property of the current class
        $boolQuery = null;

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
