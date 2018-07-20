<?php

namespace SudiptoChoudhury\Zoho\Subscriptions;

use SudiptoChoudhury\Support\Forge\Api\Import as ParentImport;


/**
 * Class Import
 *
 * @package SudiptoChoudhury\Zoho\Subscriptions
 */
class Import extends ParentImport
{

    protected $DEFAULT_API_JSON_PATH = './config/subscription.json';
    protected $DEFAULT_SOURCE_JSON_PATH = './config/postman.json';

    protected function deliberateSkips($params = [])
    {
        /** @var $operation */
        /** @var $apiName */
        /** @var $api */
        /** @var $apiGroup */

        // ['operation' => false, 'docs' => false, 'mdDoc' => false, 'phpDoc' => false];
        extract($params);
        $skipAll = ['operation' => false, 'docs' => false];
        $skipMatches = [];
        $deliberations = parent::deliberateSkips($params);
        //        if (stripos($apiName, '_') === 0) {
        //            return $skipAll;
        //        }
        if (in_array(strtolower($apiName), $skipMatches, true)) {
            return $skipAll;
        }
        if ($apiName === 'getOrganizations' && $apiGroup['name'] === '--Getting Started--') {
            return $skipAll;
        }

        return $deliberations;
    }

    /**
     * @param array $params
     *
     * @return string
     */
    protected function readApiName($params = [])
    {
        $operations = $params['operations'];
        $apiName = parent::readApiName($params);

        $overwriteMatches = [
            'listingallorganizations' => 'getOrganizations',
            '_addNewSubscriptionHostedpages' => 'addNewCustomerNewSubscriptionHostedpages',
            '_deleteSalesPerson' => 'deleteSalesPersons',
            '_getPlansForProduct' => 'getPlans',
            '_addSubscriptionBankAccount' => 'addSubscriptionNewBankAccount',
            '_setSubscriptionOnline' => 'setSubscriptionOffline',
            '_addSubscriptionLineItem' => 'addSubscriptionAddonLineItem',
            '_cancelSubscriptionImmediately' => 'cancelSubscriptionAtEnd',
        ];

        $apiName = $overwriteMatches[$apiName] ?? $overwriteMatches[strtolower($apiName)] ?? $apiName;
        if ($operations[$apiName] ?? false) {
            //            var_dump("God!!!! `{$apiName}[{$api['name']}]` it still exists! it's going to replace!!");
        }

        return $apiName;
    }

    /**
     * @inheritdoc
     *
     */
    protected function preProcessApi($api)
    {
        if ($api['name'] === 'Mark a product as active') {
            $url = &$api['request']['url'];
            $url['raw'] = str_replace('markasinactive', 'markasactive', $url['raw']);
            $url['path'][4] = "markasactive";
        }
        if ($api['name'] === 'Update custom fields for payment') {
            $url = &$api['request']['url'];
            $url['raw'] = str_replace('/creditnotes/{creditnote_id}/customfields', '/products/{product_id}/customfields', $url['raw']);
            $url['path'][2] = "products";
            $url['path'][3] = "{product_id}";
        }
        if ($api['name'] === 'Bulk Delete SalesPerons') {
            $api['name'] = 'Bulk Delete Sales Persons';
        }

        if ($api['name'] === 'Change to Offline mode') {
            $api['request']['url']['defaults'] = [
                'auto_collect' => "false",
            ];
        }

        if ($api['name'] === 'Change to Online mode') {
            $api['request']['url']['defaults'] = [
                'auto_collect' => "true",
            ];
        }

        if ($api['name'] === 'Creating an offline subscription for an existing customer') {
            $api['request']['url']['defaults'] = [
                'auto_collect' => "false",
            ];
        }

        if ($api['name'] === 'Creating an addon of tier type') {
            $api['request']['url']['defaults'] = [
                'pricing_scheme' => "tire",
            ];
        }

        if ($api['name'] === 'Creating an addon of unit type') {
            $api['request']['url']['defaults'] = [
                'pricing_scheme' => "unit",
            ];
        }

        if ($api['name'] === 'Creating an addon of volume type') {
            $api['request']['url']['defaults'] = [
                'pricing_scheme' => "volume",
            ];
        }

        if ($api['name'] === 'Creating an addon of package type') {
            $api['request']['url']['defaults'] = [
                'pricing_scheme' => "package",
            ];
        }

        $api = parent::preProcessApi($api);
        return $api;

    }

    /**
     * @inheritdoc
     *
     */
    protected function getOperationModels($operation = [])
    {
        return parent::getOperationModels($operation);

    }

    /**
     * @param       $value
     * @param array $helperData
     *
     * @return mixed
     */
    public function filterFinalName($value, $helperData = [])
    {
        $replaceFullMap = [
            "addhostedpagesnewsubscription" => "addNewSubscriptionHostedpages",
            "addhostedpagesupdatecard" => "addUpdateCardHostedpages",
            "addhostedpagesupdatesubscription" => "addUpdateSubscriptionHostedpages",
            "addcustomersmarkasactive" => "activateCustomers",
            "addproductmarkasactive" => "activateProduct",
            "addcustomermarkasactive" => "activateCustomer",
            "addcustomerpaymentreminderdisable" => "disableCustomerPaymentReminder",
            "bulkdeletecustomers" => "deleteCustomers",
            "addcustomersmarkasinactive" => "deactivateCustomers",
            "addcustomermarkasinactive" => "deactivateCustomer",
            "addcustomerpaymentreminderenable" => "enableCustomerPaymentReminder",
            "addproductmarkasinactive" => "deactivateProduct",
            "getcreditnotesrefund" => "getRefundCreditnote",
            "addcreditnoteconverttoopen" => "openVoidCreditnote",
            "bulkdeletecreditnotes" => "deleteCreditnotes",
            "addcreditnotevoid" => "voidCreditnote",
            "getplans" => "getPlansForProduct",
            "addplanmarkasinactive" => "deactivatePlan",
            "addplanmarkasactive" => "activatePlan",
            "addsubscriptionreactivate" => "reactivateSubscription",
            "addsubscriptionsbulkcancel" => "cancelSubscriptions",
            "addsubscriptionautocollect" => "setSubscriptionOnline",
            "addsubscriptionbuyonetimeaddon" => "addSubscriptionOnetimeAddon",
            "creatinganofflinesubscriptionforanexistingcustomer" => "addOfflineSubscription",
            "changetoofflinemode" => "setSubscriptionOffline",
            "associateupdatecardtoanewcard" => "updateSubscriptionCard",
            "addsubscriptioncharge" => "addSubscriptionOnetimeCharge",
            "creatingasubscriptionforanewcustomer" => "addNewCustomerSubscription",
            "addsubscriptionpostpone" => "postponeSubscription",
            "listingallsubscriptionsofaparticularcustomer" => "getCustomersSubscriptions",
            "addeditdescriptionforanaddoninlineitemslist" => "setAddOnLineItemDescription",
            "addsubscriptioncancel" => "cancelSubscriptionImmediately",
            "addcouponmarkasactive" => "activateCoupon",
            "addcouponmarkasinactive" => "deactivateCoupon",
            "addcustomercontactpersonprimary" => "addCustomerPrimaryContactPerson",
            "addaddonmarkasactive" => "activateAddon",
            "listalladdonsofaproduct" => "getProductAddons",
            "creatinganaddonoftiertype" => "addTireAddon",
            "creatinganaddonofunittype" => "addUnitAddon",
            "listalladdonsassociatedtoaplan" => "getPlanAddons",
            "creatinganaddonofvolumetype" => "addVolumeAddon",
            "addaddonmarkasinactive" => "deactivateAddon",
            "downloadaninvoiceasapdffile" => "downloadInvoiceAsPdf",
            "addinvoicessent" => "setInvoicesAsSent",
            "addinvoicepaymentreminderenable" => "enableInvoicePaymentReminder",
            "addinvoicesent" => "setInvoiceAsSent",
            "addinvoiceconvertoopen" => "openInvoice",
            "emailaninvoice" => "emailInvoice",
            "addinvoicepaymentreminderdisable" => "disableInvoicePaymentReminder",
            "getbankaccountpendinginvoices" => "getBankAccountPendingInvoices",
            "addinvoicewriteoff" => "writeoffInvoice",
            "addinvoicecancelwriteoff" => "cancelInvoiceWriteoff",
            "deleteinvoicecreditsapplied" => "deleteInvoiceCreditsApplied",
            "collectchargewithbankaccount" => "addBankAccountCharge",
            "addinvoicepaymentdate" => "setInvoicePaymentDate",
            "addinvoicevoid" => "voidInvoice",
            "addhostedpagesbuyonetimeaddon" => "addOnetimeAddonHostedpages",
        ];

        $replacePartialMap = [
            "person" => "Person",
            "card" => "Card",
            "credits" => "Credits",
            "Lineitem" => "LineItem",
            "Autocollect" => "AutoCollect",
            "Scheduledchanges" => "ScheduledChanges",
            "Recentactivities" => "RecentActivities",
            "Paymentreminder" => "PaymentReminder",
            "Customfields" => "CustomFields",
            "account" => "Account",
            "AddOn" => "Addon",
        ];

        $value = str_ireplace(array_keys($replacePartialMap), array_values($replacePartialMap), $value);

        $value = $replaceFullMap[$value] ?? $replaceFullMap[strtolower($value)] ?? $value;

        return $value;
    }

    public function filterDocMethodDescription($value, $helperData = [])
    {
        /** @var $apiName */
        extract($helperData);

        if ($apiName === 'addAddon') {
            $value .= ' Package type';
        }

        return $value;
    }

    public function filterDocMDDescription($value, $helperData = [])
    {
        /** @var $apiName */
        extract($helperData);
        $value = str_replace('\|', '  \|  ', $value);

        return $value;
    }
}