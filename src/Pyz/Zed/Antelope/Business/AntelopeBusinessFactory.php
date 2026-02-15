<?php

namespace Pyz\Zed\Antelope\Business;

use Pyz\Zed\Antelope\Business\Writer\AntelopeWriter;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \Pyz\Zed\Antelope\Persistence\AntelopeEntityManagerInterface getEntityManager()
 */
class AntelopeBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \Pyz\Zed\Antelope\Business\Writer\AntelopeWriter
     */
    public function createAntelopeWriter(): AntelopeWriter
    {
        return new AntelopeWriter(
            $this->getEntityManager()
        );
    }
}
