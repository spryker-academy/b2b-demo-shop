<?php

namespace Pyz\Zed\AntelopeGui\Communication\Controller;

use Generated\Shared\Transfer\AntelopeTransfer;
use Spryker\Service\UtilText\Model\Url\Url;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \Pyz\Zed\AntelopeGui\Communication\AntelopeGuiCommunicationFactory getFactory()
 */
class CreateController extends AbstractController
{
    protected const URL_ANTELOPE_OVERVIEW = '/antelope-gui';

    protected const MESSAGE_ANTELOPE_CREATED_SUCCESS = 'Antelope was successfully created.';

    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|array
     */
    public function indexAction(Request $request)
    {
        // TODO-1: Get an AntelopeCreateForm-instance through the factory
        // Hint: Pass a new AntelopeTransfer instance as an argument.
        $antelopeCreateForm = null;

        $antelopeCreateForm->handleRequest($request);

        if ($antelopeCreateForm->isSubmitted() && $antelopeCreateForm->isValid()) {
            return $this->createAntelope($antelopeCreateForm);
        }

        return $this->viewResponse([
            'antelopeCreateForm' => '', // TODO-2: Pass the created view of the form
            'backUrl' => $this->getAntelopeOverviewUrl(),
        ]);
    }

    /**
     * @param \Symfony\Component\Form\FormInterface $antelopeCreateForm
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    protected function createAntelope(FormInterface $antelopeCreateForm): RedirectResponse
    {
        /** @var \Generated\Shared\Transfer\AntelopeTransfer|null $antelopeTransfer */
        // TODO-3: Get the antelope-data from the form
        $antelopeTransfer = null;

        // TODO-4: Persist the AntelopeTransfer through the AntelopeFacade
        $antelopeTransfer = null;

        $this->addSuccessMessage(static::MESSAGE_ANTELOPE_CREATED_SUCCESS);
        // TODO-5: Return a redirect-response to the antelope overview (table-view)
    }

    /**
     * @return string
     */
    protected function getAntelopeOverviewUrl(): string
    {
        return (string)Url::generate(static::URL_ANTELOPE_OVERVIEW);
    }
}
