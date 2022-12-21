<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Yves\CustomerPage;

use Pyz\Client\Training\TrainingClientInterface;
use Pyz\Yves\CustomerPage\Form\FormFactory;
use Pyz\Yves\CustomerPage\Form\Transformer\AntelopeTransformer;
use Spryker\Client\Session\SessionClientInterface;
use SprykerShop\Yves\CustomerPage\CustomerPageFactory as SprykerCustomerPageFactory;

class CustomerPageFactory extends SprykerCustomerPageFactory
{
    /**
     * @return \Spryker\Client\Session\SessionClientInterface
     */
    public function getPyzSessionClient(): SessionClientInterface
    {
        return $this->getProvidedDependency(CustomerPageDependencyProvider::PYZ_CLIENT_SESSION);
    }

    public function getTrainingClient(): TrainingClientInterface
    {
        return $this->getProvidedDependency(CustomerPageDependencyProvider::CLIENT_TRAINING);
    }

    public function createAntelopeTransformer(): AntelopeTransformer
    {
        return new AntelopeTransformer(
            $this->getTrainingClient()
        );
    }

    public function createCustomerFormFactory(): FormFactory
    {
        return new FormFactory();
    }
}
