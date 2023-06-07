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
        // TODO-1: Use the AntelopeSearchClient which is accessible by using `$this->getFactory()` to search an antelope by a given name
        $antelope = null;

        return $this->view(
            [
                'antelope' => $antelope,
            ],
            [],
            '@AntelopePage/views/index/index.twig',
        );
    }
}
