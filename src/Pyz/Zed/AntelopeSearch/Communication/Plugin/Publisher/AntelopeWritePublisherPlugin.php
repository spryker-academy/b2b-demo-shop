<?php

namespace Pyz\Zed\AntelopeSearch\Communication\Plugin\Publisher;

use Pyz\Shared\AntelopeSearch\AntelopeSearchConfig;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Spryker\Zed\PublisherExtension\Dependency\Plugin\PublisherPluginInterface;

/**
 * @method \Pyz\Zed\AntelopeSearch\Business\AntelopeSearchFacadeInterface getFacade()
 */
class AntelopeWritePublisherPlugin extends AbstractPlugin implements PublisherPluginInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param array<\Generated\Shared\Transfer\EventEntityTransfer> $eventEntityTransfers
     * @param string $eventName
     *
     * @return void
     */
    public function handleBulk(array $eventEntityTransfers, $eventName): void
    {
        // TODO-1: Use the module's facade to writeCollectionByAntelopeEvents
        // Hint-1: Use the `getFacade()` method of this class to have access to the Module's facade
        // Hint-2: Call its method meant to write the data provided by `$eventEntityTransfers`
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @return array<string>
     */
    public function getSubscribedEvents(): array
    {
        return [
            // TODO-2: Return the event names for antelope-publish, antelope-entity-creation and antelope-entity-updating
            // Hint-1: The strings are found as constants in the `AntelopeSearchConfig` class
            // Hint-2: Use the constants rather than plain strings
        ];
    }
}
