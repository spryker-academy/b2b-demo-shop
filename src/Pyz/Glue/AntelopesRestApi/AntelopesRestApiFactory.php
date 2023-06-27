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

    // TODO-1: Create the `getAntelopeSearchClient` method here - The return type should be `AntelopeSearchClientInterface`
    // Hint-1: Use the getProvidedDependency() method and provide the key you used in the AntelopePageDependencyProvider class: CLIENT_ANTELOPE_SEARCH

    /**
     * @return \Pyz\Glue\AntelopesRestApi\Processor\Reader\AntelopeResourceReader
     */
    public function createAntelopeResourceReader(): AntelopeResourceReader
    {
        // TODO-2: Provide all the dependencies to the AntelopeResourceReader constructor
        // Hint-1: The which dependencies are needed in what order you can find out by the class itself
        return new AntelopeResourceReader();
    }


}
