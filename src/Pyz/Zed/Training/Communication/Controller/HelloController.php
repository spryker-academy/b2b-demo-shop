<?php

namespace Pyz\Zed\Training\Communication\Controller;

use Spryker\Zed\Kernel\Communication\Controller\AbstractController;

class HelloController extends AbstractController
{
    public function indexAction()
    {
        return $this->viewResponse([
            'helloWorldText' => 'Hello World!'
        ]);
    }
}
