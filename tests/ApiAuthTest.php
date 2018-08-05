<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use SudiptoChoudhury\Zoho\Subscriptions\Api;
use SudiptoChoudhury\Zoho\Subscriptions\Import;

class ApiAuthTest extends TestCase
{
    /** @var $api Api */
    private $api;

    protected function setUp()
    {
        $this->api = new Api([
            'authtoken' => '2a2baef89da4bd82f739e6cc4c3b87d1',
            'zohoOrgId' => '671191938',
        ]);

//        $this->import = new Import();
    }

    protected function tearDown()
    {
        $this->api = null;
    }

    /**
     * @throws \Exception
     */
//    public function testImport()
//    {
////        $result = $this->import->writeDefinition(null, ['docsPath' => __DIR__. '/../subscriptions2.md']);
//        $result = $this->api->importApi(null, null, [
//                'mdDocPath' => __DIR__. '/../subscriptions.md'
//            ]);
////        $result = $this->api->importApi();
//        $this->assertTrue(!!$result);
//    }

//
//    public function testInstance()
//    {
//        $this->assertTrue(!!$this->api);
//    }
//    public function testGetList()
//    {
//        $result = $this->api->get();
//        var_dump($result);
//        $this->assertTrue(!!$result);
//    }

    public function testImport()
    {
        $result = $this->api->importApi();
        var_dump("Imported...");
        $this->assertTrue(!!$result);
    }

//    public function testGetPlans()
//    {
//        $result = $this->api->getPlans();
//        var_dump($result);
//        $this->assertTrue(!!$result);
//    }

    //
    //
//        public function testListAllProducts()
//        {
//            $result = $this->api->listAllProducts();
//            var_dump($result);
//            $this->assertTrue(!!$result);
//        }
    //
    //    public function testListingAllPlansForAProduct()
    //    {
    //        $result = $this->api->listingAllPlansForAProduct();
    //        var_dump($result);
    //        $this->assertTrue(!!$result);
    //    }
    //
    //    public function testGetListOfOrganizations()
    //    {
    //        $result = $this->api->getListOfOrganizations();
    //        //var_dump($result);
    //        $this->assertTrue(!!$result);
    //    }

//    public function testCreateACustomer()
//    {
//        $data = [
//            "display_name" => "Bowman Furniture",
//            "salutation" => "Mr",
//            "first_name" => "Benjamin",
//            "last_name" => "George",
//            "email" => "benjamin.george@bowmanfurniture.com",
//            "company_name" => "Bowman Furniture",
//            "phone" => "23467278",
//            "mobile" => "938237475",
//            "website" => "www.bowmanfurniture.com",
//            "twitter" => "https=>//twitter.com/BowmanFurniture",
//            "facebook" => "https=>//facebook.com/BowmanFurniture",
//            "billing_address" => [
//                "street" => "Micheal Street",
//                "city" => "Austin",
//                "state" => "Texas",
//                "zip" => "75211",
//                "country" => "U.S.A",
//                "fax" => "41237389",
//            ],
//            "shipping_address" => [
//                "street" => "Micheal Street",
//                "city" => "Austin",
//                "state" => "Texas",
//                "zip" => "75211",
//                "country" => "U.S.A",
//                "fax" => "41237389",
//            ],
//            "currency_code" => "INR",
//            "notes" => "Bowman Furniture",
//            "payment_terms" => 0,
//            "payment_terms_label" => "Due on Receipt",
//            "ach_supported" => false,
//            "custom_fields" => [
//                [
//                    "label" => "CIF",
//                    "value" => "1231245879",
//                ],
//                [
//                    "label" => "Membership",
//                    "value" => "Premium",
//                ],
//            ],
//            "default_templates" => [
//                "invoice_template_id" => "90300000311340",
//                "creditnote_template_id" => "90300000232140",
//            ],
//
//        ];
//
//        $result = $this->api->createACustomer($data);
//        var_dump($result);
//        $this->assertTrue(!!$result);
//    }

//    public function testCreateACustomer()
//    {
//        $data = [
//            "display_name" => "Bowman Furniture",
//            "salutation" => "Mr",
//            "first_name" => "Benjamin",
//            "last_name" => "George",
//            "email" => "benjamin.george@bowmanfurniture.com",
//            "company_name" => "Bowman Furniture",
//            "phone" => "23467278",
//            "mobile" => "938237475",
//            "website" => "www.bowmanfurniture.com",
//            "twitter" => "BowmanFurniture",
//            "facebook" => "https://facebook.com/BowmanFurniture",
//            "billing_address" => [
//                "street" => "Micheal Street",
//                "city" => "Austin",
//                "state" => "Texas",
//                "zip" => "75211",
//                "country" => "U.S.A",
//                "fax" => "41237389",
//            ],
//            "shipping_address" => [
//                "street" => "Micheal Street",
//                "city" => "Austin",
//                "state" => "Texas",
//                "zip" => "75211",
//                "country" => "U.S.A",
//                "fax" => "41237389",
//            ],
//            "currency_code" => "INR",
//            "notes" => "Bowman Furniture",
//            "payment_terms" => 0,
//            "payment_terms_label" => "Due on Receipt",
//            "ach_supported" => false,
////            "custom_fields" => [
////                [
////                    "label" => "CIF",
////                    "value" => "1231245879",
////                ],
////                [
////                    "label" => "Membership",
////                    "value" => "Premium",
////                ],
////            ],
////            "default_templates" => [
////                "invoice_template_id" => "90300000311340",
////                "creditnote_template_id" => "90300000232140",
////            ],
//
//        ];
//
//        $result = $this->api->createACustomer($data);
//        $this->assertEquals($result['message'], "The customer has been added.");
//    }

}
