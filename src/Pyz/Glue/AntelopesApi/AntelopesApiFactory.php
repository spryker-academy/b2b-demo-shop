<?php

namespace Pyz\Glue\AntelopesApi;

use Pyz\Client\AntelopeSearch\AntelopeSearchClientInterface;
use Pyz\Glue\AntelopesApi\Processor\Mapper\AntelopeMapper;
use Pyz\Glue\AntelopesApi\Processor\Reader\AntelopeReader;
use Spryker\Glue\Kernel\AbstractStorefrontApiFactory;

class AntelopesApiFactory extends AbstractStorefrontApiFactory
{
    /**
     * @return \Pyz\Glue\AntelopesApi\Processor\Mapper\AntelopeMapper
     */
    public function createAntelopeMapper(): AntelopeMapper
    {
        return new AntelopeMapper();
    }

    /**
     * @return \Pyz\Glue\AntelopesApi\Processor\Reader\AntelopeReader
     */
    public function createAntelopeReader(): AntelopeReader
    {
        return new AntelopeReader(
            $this->getAntelopeSearchClient(),
            $this->createAntelopeMapper(),
        );
    }

    /**
     * @return \Pyz\Client\AntelopeSearch\AntelopeSearchClientInterface
     */
    public function getAntelopeSearchClient(): AntelopeSearchClientInterface
    {
        return $this->getProvidedDependency(AntelopesApiDependencyProvider::CLIENT_ANTELOPE_SEARCH);
    }
}
