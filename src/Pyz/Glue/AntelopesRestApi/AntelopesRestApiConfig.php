<?php

namespace Pyz\Glue\AntelopesRestApi;

use Spryker\Glue\Kernel\AbstractBundleConfig;

class AntelopesRestApiConfig extends AbstractBundleConfig
{
    /**
     * @api
     *
     * @var string
     */
    public const RESOURCE_TYPE_ANTELOPES = 'antelopes';

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
