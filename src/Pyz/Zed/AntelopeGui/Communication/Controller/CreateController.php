<?php

namespace Pyz\Zed\AntelopeGui\Communication\Controller;

use Generated\Shared\Transfer\AntelopeTransfer;
use Spryker\Service\UtilText\Model\Url\Url;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \Pyz\Zed\AntelopeGui\Communication\AntelopeGuiCommunicationFactory getFactory()
 */
class CreateController extends AbstractController
{
    /**
     * @var string
     */
    protected const URL_ANTELOPE_OVERVIEW = '/antelope-gui';

    /**
     * @var string
     */
    protected const MESSAGE_ANTELOPE_CREATED_SUCCESS = 'Antelope was successfully created.';

    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|array<string, mixed>
     */
    public function indexAction(Request $request)
    {
        $antelopeCreateForm = $this->getFactory()
            ->createAntelopeCreateForm(new AntelopeTransfer())
            ->handleRequest($request);

        if ($antelopeCreateForm->isSubmitted() && $antelopeCreateForm->isValid()) {
            return $this->createAntelope($antelopeCreateForm);
        }

        return $this->viewResponse([
            'antelopeCreateForm' => $antelopeCreateForm->createView(),
            'backUrl' => $this->getAntelopeOverviewUrl(),
        ]);
    }

    /**
     * @param \Symfony\Component\Form\FormInterface $antelopeCreateForm
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    protected function createAntelope(FormInterface $antelopeCreateForm)
    {
        /** @var \Generated\Shared\Transfer\AntelopeTransfer|null $antelopeTransfer */
        $antelopeTransfer = $antelopeCreateForm->getData();

        $antelopeTransfer = $this->getFactory()
            ->getAntelopeFacade()
            ->createAntelope($antelopeTransfer);

        $this->addSuccessMessage(static::MESSAGE_ANTELOPE_CREATED_SUCCESS);

        return $this->redirectResponse($this->getAntelopeOverviewUrl());
    }

    /**
     * @return string
     */
    protected function getAntelopeOverviewUrl(): string
    {
        return (string)Url::generate(static::URL_ANTELOPE_OVERVIEW);
    }
}
