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
    /**
     * @return \Pyz\Zed\AntelopeGui\Communication\Table\AntelopeTable
     */
    public function createAntelopeTable()
    {
        return new AntelopeTable(
            $this->getAntelopePropelQuery()
        );
    }

    /**
     * @param \Generated\Shared\Transfer\AntelopeTransfer $antelopeTransfer
     * @param array<string, mixed> $options
     *
     * @return \Symfony\Component\Form\FormInterface
     */
    public function createAntelopeCreateForm(AntelopeTransfer $antelopeTransfer, array $options = []): FormInterface
    {
        return $this->getFormFactory()->create(AntelopeCreateForm::class, $antelopeTransfer, $options);
    }

    /**
     * @return \Pyz\Zed\Antelope\Business\AntelopeFacadeInterface
     */
    public function getAntelopeFacade(): AntelopeFacadeInterface
    {
        return $this->getProvidedDependency(AntelopeGuiDependencyProvider::FACADE_ANTELOPE);
    }

    /**
     * @return \Orm\Zed\Antelope\Persistence\PyzAntelopeQuery
     */
    public function getAntelopePropelQuery(): PyzAntelopeQuery
    {
        return $this->getProvidedDependency(AntelopeGuiDependencyProvider::PROPEL_QUERY_ANTELOPE);
    }
}
