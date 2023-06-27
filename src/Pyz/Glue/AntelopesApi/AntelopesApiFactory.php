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

    // TODO-1: Create the `getAntelopeSearchClient` method here - The return type should be `AntelopeSearchClientInterface`
    // Hint-1: Use the getProvidedDependency() method and provide the key you used in the AntelopeApiDependencyProvider class: CLIENT_ANTELOPE_SEARCH

    /**
     * @return \Pyz\Glue\AntelopesApi\Processor\Reader\AntelopeReader
     */
    public function createAntelopeReader(): AntelopeReader
    {
        // TODO-2: Provide all the dependencies to the AntelopeReader constructor
        // Hint-1: The which dependencies are needed in what order you can find out by the class itself
        return new AntelopeReader();
    }


}
