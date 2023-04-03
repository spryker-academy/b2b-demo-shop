<?php

namespace Pyz\Zed\Training\Communication\Controller;

use Spryker\Zed\Kernel\Communication\Controller\AbstractController;

/**
 * @method \Pyz\Zed\Training\Communication\TrainingCommunicationFactory getFactory()
 */
class ConfigController extends AbstractController
{
    public function indexAction()
    {
        $configValue = $this->getFactory()
            ->getConfig()
            ->getMyConfigValue();

        return $this->viewResponse([
            'configValue' => $configValue,
        ]);
    }
}
