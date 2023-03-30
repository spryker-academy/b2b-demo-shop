<?php

namespace Pyz\Zed\AntelopeGui;

use Orm\Zed\Antelope\Persistence\PyzAntelopeQuery;
use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;

class AntelopeGuiDependencyProvider extends AbstractBundleDependencyProvider
{
    public const FACADE_ANTELOPE = 'FACADE_ANTELOPE';

    public const PROPEL_QUERY_ANTELOPE = 'PROPEL_QUERY_ANTELOPE';

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    public function provideCommunicationLayerDependencies(Container $container): Container
    {
        $container = parent::provideCommunicationLayerDependencies($container);

        return $container;
    }

    // (For the Table part of the exercise)
    // TODO-1: Add the method `addAntelopePropelQuery` and call it in the `provideCommunicationLayerDependencies()`
    // Hint-1: Something similar was already done for another module here: `src/Pyz/Zed/DataImport/DataImportDependencyProvider.php` (`addCurrencyFacade()`)
    // Hint-2: Use the constant PROPEL_QUERY_ANTELOPE
    // Hint-3: Instead of using Spryker `Locator` just use `PyzAntelopeQuery::create()` and return the value in the closure

    // (Later: For the Form part of the exercise)
    // TODO-2: Add the method `addAntelopeFacade` and call it in the `provideCommunicationLayerDependencies()`
    // Hint-1: Something similar was already done for another module here: `src/Pyz/Zed/DataImport/DataImportDependencyProvider.php` (`addCurrencyFacade()`)
    // Hint-2: Use the constant FACADE_ANTELOPE
}
