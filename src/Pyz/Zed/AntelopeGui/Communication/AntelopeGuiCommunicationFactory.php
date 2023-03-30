<?php

namespace Pyz\Zed\AntelopeGui\Communication;

use Generated\Shared\Transfer\AntelopeTransfer;
use Orm\Zed\Antelope\Persistence\PyzAntelopeQuery;
use Pyz\Zed\Antelope\Business\AntelopeFacadeInterface;
use Pyz\Zed\AntelopeGui\AntelopeGuiDependencyProvider;
use Pyz\Zed\AntelopeGui\Communication\Form\AntelopeCreateForm;
use Pyz\Zed\AntelopeGui\Communication\Table\AntelopeTable;
use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;
use Symfony\Component\Form\FormInterface;

class AntelopeGuiCommunicationFactory extends AbstractCommunicationFactory
{
    // (For the Table part of the exercise)
    // TODO-1: Provide the PyzAntelopeQuery from the AntelopeGuiDependencyProvider
    // Hint-1: Naming convention for methods getting things from somewhere else are prefixed by "get"
    // i.e.: getMyClassName()
    // Hint-2: Have a look at `src/Pyz/Zed/DataImport/Business/DataImportBusinessFactory.php::getCurrencyFacade()` for the right syntax

    // (For the Table part of the exercise)
    // TODO-2: Instantiate the AntelopeTable with the right dependency and return it
    // Hint-1: Naming convention for methods instantiating classes would be the class name prefixed by "create"
    // i.e.: createMyClassName()

    /**
     * @param \Generated\Shared\Transfer\AntelopeTransfer $antelopeTransfer
     * @param array $options
     *
     * @return \Symfony\Component\Form\FormInterface
     */
    public function createAntelopeCreateForm(AntelopeTransfer $antelopeTransfer, array $options = []): FormInterface
    {
        return $this->getFormFactory()->create(AntelopeCreateForm::class, $antelopeTransfer, $options);
    }

    // (Later: For the Form part of the exercise)
    // TODO-3: Provide the AntelopeFacade from the AntelopeGuiDependencyProvider
    // Hint-1: Naming convention for methods getting things from somewhere else are prefixed by "get"
    // i.e.: getMyClassName()
    // Hint-2: Have a look at `src/Pyz/Zed/DataImport/Business/DataImportBusinessFactory.php::getCurrencyFacade()` for the right syntax
    // Hint-3: Use the interface as return type
}
