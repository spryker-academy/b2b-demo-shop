<?php

namespace Pyz\Zed\AntelopeSearch\Business;

use Pyz\Zed\AntelopeSearch\AntelopeSearchDependencyProvider;
use Pyz\Zed\AntelopeSearch\Business\Writer\AntelopeSearchWriter;
use Spryker\Zed\EventBehavior\Business\EventBehaviorFacadeInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \Pyz\Zed\AntelopeSearch\Persistence\AntelopeSearchEntityManagerInterface getEntityManager()
 * @method \Pyz\Zed\AntelopeSearch\Persistence\AntelopeSearchRepositoryInterface getRepository()
 */
class AntelopeSearchBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \Pyz\Zed\AntelopeSearch\Business\Writer\AntelopeSearchWriter
     */
    public function createAntelopeSearchWriter()
    {
        return new AntelopeSearchWriter(
            $this->getEventBehaviorFacade(),
            $this->getRepository(),
            $this->getEntityManager()
        );
    }

    /**
     * @return \Spryker\Zed\EventBehavior\Business\EventBehaviorFacadeInterface
     */
    public function getEventBehaviorFacade(): EventBehaviorFacadeInterface
    {
        return $this->getProvidedDependency(AntelopeSearchDependencyProvider::FACADE_EVENT_BEHAVIOR);
    }
}
