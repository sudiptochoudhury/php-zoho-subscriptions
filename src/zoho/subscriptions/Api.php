<?php

namespace SudiptoChoudhury\Zoho\Subscriptions;

use SudiptoChoudhury\Support\Forge\Api\Client as ApiForge;


/**
 * Class Api
 *
 * @package SudiptoChoudhury\Zoho\Subscriptions
 */
class Api extends ApiForge
{

    protected $DEFAULT_API_JSON_PATH = './config/subscriptions.json';
    protected $DEFAULT_SOURCE_JSON_PATH = './config/postman.json';

    protected $DEFAULTS = [
        'authtoken' => '',
        'zohoOrgId' => '',
        'client' => [
            'base_uri' => 'https://subscriptions.zoho.com/api/v1/',
            'verify' => false,
            'headers' => [
                'Authorization' => 'Zoho-authtoken {{authtoken}}',
                'X-com-zoho-subscriptions-organizationid' => "{{zohoOrgId}}",
            ],
        ],
    ];

}