<?php

namespace Pyz\Zed\Training;

use Pyz\Shared\Training\TrainingConstants;
use Spryker\Zed\Kernel\AbstractBundleConfig;

class TrainingConfig extends AbstractBundleConfig
{
    public function getMyConfigValue(): string
    {
        return $this->get(TrainingConstants::MY_CONFIG_VALUE, 'This is a default value');
    }
}
