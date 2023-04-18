<?php

namespace Pyz\Zed\AntelopeSearch\Business;

use Pyz\Zed\Antelope\Business\AntelopeFacadeInterface;
use Pyz\Zed\AntelopeSearch\AntelopeSearchDependencyProvider;
use Pyz\Zed\AntelopeSearch\Business\Writer\AntelopeSearchWriter;
use Spryker\Zed\EventBehavior\Business\EventBehaviorFacadeInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \Pyz\Zed\AntelopeSearch\Persistence\AntelopeSearchRepositoryInterface getRepository()
 * @method \Pyz\Zed\AntelopeSearch\Persistence\AntelopeSearchEntityManagerInterface getEntityManager()
 */
class AntelopeSearchBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \Pyz\Zed\AntelopeSearch\Business\Writer\AntelopeSearchWriter
     */
    public function createAntelopeSearchWriter(): AntelopeSearchWriter
    {
        // TODO-3: Provide all the dependencies to the AntelopeSearchWriter constructor
        // Hint-1: getRepository(), available in this factory class, returns the Repository from the Persistence Layer
        // Hint-2: getEntityManager(), available in this factory class, returns the EntityManager from the Persistence Layer
        return new AntelopeSearchWriter();
    }

    // TODO-1: Create the method getEventBehaviorFacade which returns the EventBehaviorFacade
    // Hint-1: You can call the getProvidedDependency() method available in this class, and pass the facade constant FACADE_EVENT_BEHAVIOR as the key.
    // Hint-2: The return type should be EventBehaviorFacadeInterface


    // TODO-2: Create the getAntelopeFacade method here
    // Hint-1: Use the getProvidedDependency() method and provide the key you used in the AntelopeSearchDependencyProvider class: FACADE_ANTELOPE
}
