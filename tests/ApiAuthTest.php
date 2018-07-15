<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use SudiptoChoudhury\Zoho\Subscriptions\Api;

class ApiAuthTest extends TestCase
{
    private $api;

    protected function setUp()
    {
        // Get authtoken from https://accounts.zoho.com/apiauthtoken/nb/create
        // Set Organization ID to zohoOrgId
        $this->api = new Api([
            'authtoken' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
            'zohoOrgId' => 'xxxxxxxxxxxx',
        ]);
    }

    protected function tearDown()
    {
        $this->api = null;
    }

    public function testInstance()
    {
        $this->assertInstanceOf(Api::class, $this->api);
    }
    public function testGetList()
    {
        $result = $this->api->get();
        $this->assertEquals("success", $result['message']);
    }

    public function testGetOrgs()
    {
        $result = $this->api->getOrganizations();
        $this->assertEquals("success", $result['message']);
    }

}
