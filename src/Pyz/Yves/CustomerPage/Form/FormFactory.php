<?php

namespace Pyz\Yves\CustomerPage\Form;

use SprykerShop\Yves\CustomerPage\Form\FormFactory as SprykerFormFactory;

class FormFactory extends SprykerFormFactory
{
    /**
     * @return \Symfony\Component\Form\FormInterface
     */
    public function getProfileForm()
    {
        return $this->getFormFactory()->create(ProfileForm::class);
    }
}
