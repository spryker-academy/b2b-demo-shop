<?php

namespace Pyz\Glue\AntelopesRestApi;

use Pyz\Client\AntelopeSearch\AntelopeSearchClientInterface;
use Pyz\Glue\AntelopesRestApi\Processor\Mapper\AntelopeMapper;
use Pyz\Glue\AntelopesRestApi\Processor\Reader\AntelopeResourceReader;
use Spryker\Glue\Kernel\AbstractStorefrontApiFactory;

class AntelopesRestApiFactory extends AbstractStorefrontApiFactory
{
    /**
     * @return \Pyz\Glue\AntelopesRestApi\Processor\Mapper\AntelopeMapper
     */
    public function createAntelopeMapper(): AntelopeMapper
    {
        return new AntelopeMapper();
    }

    /**
     * @return \Pyz\Glue\AntelopesRestApi\Processor\Reader\AntelopeResourceReader
     */
    public function createAntelopeResourceReader(): AntelopeResourceReader
    {
        return new AntelopeResourceReader(
            $this->getAntelopeSearchClient(),
            $this->createAntelopeMapper(),
        );
    }

    /**
     * @return \Pyz\Client\AntelopeSearch\AntelopeSearchClientInterface
     */
    public function getAntelopeSearchClient(): AntelopeSearchClientInterface
    {
        return $this->getProvidedDependency(AntelopesRestApiDependencyProvider::CLIENT_ANTELOPE_SEARCH);
    }
}
