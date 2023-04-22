<?php

return [
    /* ------------------------------------------------------------------------------------------------
     |  Credentials
     | ------------------------------------------------------------------------------------------------
     */
    'secret'  => getenv('NOCAPTCHA_SECRET') ?: 'no-captcha-secret',
    'sitekey' => getenv('NOCAPTCHA_SITEKEY') ?: 'no-captcha-sitekey',


    /* -----------------------------------------------------------------
     |  Version
     | -----------------------------------------------------------------
     |  Supported: v3, v2
     */

    'version' => 'v2',

    /* ------------------------------------------------------------------------------------------------
     |  Localization
     | ------------------------------------------------------------------------------------------------
     */
    'lang'    => app()->getLocale(),

    /* -----------------------------------------------------------------
     |  Skip IPs
     | -----------------------------------------------------------------
     */

    'skip-ips' => [
        // 127.0.0.1
    ],
];
