<?php

namespace Pyz\Zed\AntelopeSearch;

use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;

class AntelopeSearchDependencyProvider extends AbstractBundleDependencyProvider
{
    public const FACADE_EVENT_BEHAVIOR = 'FACADE_EVENT_BEHAVIOR';

    public const FACADE_ANTELOPE = 'FACADE_ANTELOPE';

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    public function provideBusinessLayerDependencies(Container $container): Container
    {
        $container = parent::provideBusinessLayerDependencies($container);

        // TODO-3: Make the EventBehaviourFacade and AntelopeFacade available to the Business Layer
        // Hint-1: Call the addEventBehaviorFacade() and addAntelopeFacade() methods

        return $container;
    }

    // TODO-1: Create the addEventBehaviorFacade method
    // Hint-1: You can call the $container set method, pass the class constant FACADE_EVENT_BEHAVIOR as key and a closure as a second parameter.
    // Hint-2: You can call the getLocator() method, concatenate name of the facade and then facade() method
    // Example: return $container->getLocator()->myModule()->facade();

    // TODO-2: Create the addAntelopeFacade method
    // Hint-1: You can call the $container set method, pass the class constant FACADE_ANTELOPE as key and a closure as a second parameter.
    // Hint-2: You can call the getLocator() method, concatenate name of the facade and then facade() method
}
