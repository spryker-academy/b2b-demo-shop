<?php

namespace Pyz\Zed\Training\Communication\Controller;

use Spryker\Zed\Kernel\Communication\Controller\AbstractController;

class HelloController extends AbstractController
{
    public function indexAction()
    {
        // TODO: initialize the antelope DTO and set a name

        return $this->viewResponse([
            // TODO: pass the DTO to the view
            'helloWorldText' => 'Hello World!'
        ]);
    }
}
