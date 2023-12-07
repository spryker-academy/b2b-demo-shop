<?php

namespace Pyz\Glue\AntelopesApi;

use Spryker\Glue\Kernel\AbstractBundleConfig;

class AntelopesApiConfig extends AbstractBundleConfig
{
    /**
     * @api
     *
     * @var string
     */
    public const RESOURCE_ANTELOPES = 'antelopes';

    /**
     * @api
     *
     * @var string
     */
    public const RESPONSE_CODE_ANTELOPE_NOT_FOUND = '9404';

    /**
     * @api
     *
     * @var string
     */
    public const RESPONSE_DETAIL_ANTELOPE_NOT_FOUND = 'Antelope not found.';
}
