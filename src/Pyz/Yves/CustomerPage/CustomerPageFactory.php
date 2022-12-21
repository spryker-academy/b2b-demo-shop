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
    public function getSessionClient(): SessionClientInterface
    {
        return $this->getProvidedDependency(CustomerPageDependencyProvider::CLIENT_SESSION);
    }

    public function getTrainingClient(): TrainingClientInterface
    {
        // TODO-1: Get the provided dependency for the TrainingClient
        // Hint-1: Have a look at src/Pyz/Client/Training/TrainingFactory.php::getZedRequestClient() for the right syntax
        // Hint-2: The name of the constant to use is 'CustomerPageDependencyProvider::CLIENT_TRAINING'
    }

    // TODO-2: Instantiate and return the AntelopeTransformer to make it available inside the module
    // Hint: Naming convention for methods creating instances of a class: createNameOfTheClass()

    // TODO-3: Override createCustomerFormFactory() from SprykerCustomerPageFactory
    // and make it return our newly created FormFactory instead of the FormFactory of the core
}
