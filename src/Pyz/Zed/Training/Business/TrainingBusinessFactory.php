<?php

namespace Pyz\Zed\Training\Business;

use Pyz\Zed\Training\Business\Reader\AntelopeReader;
use Pyz\Zed\Training\Business\Writer\AntelopeWriter;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \Pyz\Zed\Training\Persistence\TrainingEntityManagerInterface getEntityManager()
 * @method \Pyz\Zed\Training\Persistence\TrainingRepositoryInterface getRepository()
 */
class TrainingBusinessFactory extends AbstractBusinessFactory
{
    public function createAntelopeWriter(): AntelopeWriter
    {
        // TODO: Instantiate the AntelopeWriter with the right dependency
        // Hint: You can access the TrainingEntityManager through $this->getEntityManager()
    }

    public function createAntelopeReader(): AntelopeReader
    {
        // TODO: Instantiate the AntelopeReader with the right dependency
        // Hint: You can access the TrainingRepository through $this->getRepository()
    }
}
