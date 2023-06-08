<?php

namespace Pyz\Yves\AntelopePage\Controller;

use Spryker\Yves\Kernel\Controller\AbstractController;
use Spryker\Yves\Kernel\View\View;

/**
 * @method \Pyz\Yves\AntelopePage\AntelopePageFactory getFactory()
 */
class IndexController extends AbstractController
{
    /**
     * @param string $name
     *
     * @return \Spryker\Yves\Kernel\View\View
     */
    public function indexAction(string $name): View
    {
        $antelope = $this->getFactory()
            ->getAntelopeSearchClient()
            ->getAntelopeByName($name);

        return $this->view(
            [
                'antelope' => $antelope,
            ],
            [],
            '@AntelopePage/views/index/index.twig',
        );
    }
}
