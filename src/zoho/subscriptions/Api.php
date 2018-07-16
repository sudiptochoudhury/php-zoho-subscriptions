<?php

namespace SudiptoChoudhury\Zoho\Subscriptions;

use SudiptoChoudhury\Support\Forge\Api\Client as ApiForge;


/**
 * Class Api
 *
 * @method	array	getHostedpage(array $parameters)	Getting the details of a particular hosted page
 * @method	array	getHostedpages()	Listing all the hostedpages
 * @method	array	addHostedpagesNewsubscription(array $parameters)	Creating a hosted page for a new subscription for an existing customer
 * @method	array	creatingHostedPageForANewSubscriptionForANewCustomer(array $parameters)	Creating a hosted page for a new subscription for a new customer
 * @method	array	addHostedpagesUpdatecard(array $parameters)	Creating a hosted page for updating a card linked to a specific subscription
 * @method	array	addHostedpagesBuyonetimeaddon(array $parameters)	Creating a hosted page for onetime addon purchase
 * @method	array	addHostedpagesUpdatesubscription(array $parameters)	Creating a hosted page for updating an existing subscription
 * @method	array	getTransactions(array $parameters)	List all transactions of a particular customer
 * @method	array	deleteCustomerComment(array $parameters)	Delete a particular customer comment.
 * @method	array	addCustomersMarkasactive(array $parameters)	Bulk marking multiple customers as active
 * @method	array	addCustomerPaymentreminderDisable(array $parameters)	Disabling payment reminder for a particular customer
 * @method	array	addCustomerMarkasactive(array $parameters)	Marking a particular customer as active
 * @method	array	getCustomers()	Retrieving details of all the customers
 * @method	array	getCustomer(array $parameters)	Retrieving details of a particular customer
 * @method	array	getCustomerComments(array $parameters)	Retrieving comments of a particular customer
 * @method	array	updateCustomer(array $parameters)	Updating the details of a particular customer
 * @method	array	deleteCustomer(array $parameters)	Delete a particular customer.
 * @method	array	getCustomerUnusedcredits(array $parameters)	Unused credit of a particular customer
 * @method	array	addCustomersMarkasinactive(array $parameters)	Bulk marking multiple customers as inactive
 * @method	array	addCustomer(array $parameters)	Creating a new customer
 * @method	array	bulkDeleteCustomers(array $parameters)	Bulk deleting customers
 * @method	array	addCustomerMarkasinactive(array $parameters)	Marking a particular customer as inactive
 * @method	array	addCustomerPaymentreminderEnable(array $parameters)	Enabling payment reminder for a particular customer
 * @method	array	deleteCustomerAddress(array $parameters)	Delete an existing customer's address.
 * @method	array	deleteCustomerPaypalaccount(array $parameters)	To delete a particular PayPal account of a particular customer
 * @method	array	deleteProduct(array $parameters)	Delete an existing product.
 * @method	array	updateProduct(array $parameters)	Updating the details of a particular product
 * @method	array	addProduct(array $parameters)	Creating a new product
 * @method	array	getProduct(array $parameters)	Retreiving details of a product
 * @method	array	addProductMarkasinactive(array $parameters)	Marking a particular product as active
 * @method	array	getProducts()	List of all Products
 * @method	array	markAProductAsInactive(array $parameters)	Marking a particular product as inactive
 * @method	array	deleteSalesperson(array $parameters)	Delete an existing salesperson
 * @method	array	bulkDeleteSalesperons(array $parameters)	Bulk delete multiple sales persons
 * @method	array	getSalespersons()	List details of all sales person
 * @method	array	deleteCreditnoteRefund(array $parameters)	Delete an existing credit note refund
 * @method	array	deleteCreditnote(array $parameters)	Delete an existing credit note
 * @method	array	deleteCreditnoteComment(array $parameters)	Delete a comment for a credit note
 * @method	array	getCreditnotesRefund(array $parameters)	Details of an existing refund
 * @method	array	addCreditnoteRefunds(array $parameters)	Refund an existing credit note
 * @method	array	deleteCreditnoteInvoice(array $parameters)	Delete the credits applied to invoices
 * @method	array	addCreditnoteInvoices(array $parameters)	Apply credits from credit note to invoices
 * @method	array	addInvoiceEmail(array $parameters)	Email a particular credit note
 * @method	array	addCreditnoteConverttoopen(array $parameters)	Convert a voided credit note to open
 * @method	array	addCreditnoteVoid(array $parameters)	Void an existing credit note for a particular customer
 * @method	array	getCreditnote(array $parameters)	Retrieve an existing credit note
 * @method	array	addCreditnoteCustomfields(array $parameters)	Updating custom fields for a credit note You can update custom fields only if they are configured
 * @method	array	addCreditnote(array $parameters)	Creating a Credit note for particular customer
 * @method	array	bulkDeleteCreditnotes(array $parameters)	Delete an existing credit note refund
 * @method	array	getPlans(array $parameters)	Listing all the plans for a specific product
 * @method	array	updatePlan(array $parameters)	Updating the details of a particular plan
 * @method	array	addPlan(array $parameters)	Creating a new plan
 * @method	array	addPlanMarkasinactive(array $parameters)	Marking a plan as inactive
 * @method	array	addPlanMarkasactive(array $parameters)	Marking a plan as active
 * @method	array	getPlan(array $parameters)	Retreiving details of a particular plan
 * @method	array	deletePlan(array $parameters)	Delete an existing plan. A plan can only be deleted if it has no transactions associated with it.
 * @method	array	listingAllPlans()	Listing all the plans
 * @method	array	addSubscriptionNotes(array $parameters)	Notes related to a particular subscription can be added by any user at any time
 * @method	array	addSubscriptionReactivate(array $parameters)	Reactivating a subscription Only a subscription which is in
 * @method	array	deleteSubscriptionNote(array $parameters)	Delete a specific note associated to a particular subscription
 * @method	array	addSubscription(array $parameters)	Creating an online subscription for an already existing customer
 * @method	array	addSubscriptionsBulkcancel(array $parameters)	Bulk cancelling multiple subscriptions
 * @method	array	addSubscriptionLineitem(array $parameters)	Add/Edit description to a particular plan in the line items list
 * @method	array	deleteSubscriptionCard(array $parameters)	Delete a card associated with the subscription. Once removed, the subscription will become an offline subscription.
 * @method	array	updateSubscription(array $parameters)	Updating the details of a particular subscription
 * @method	array	addSubscriptionBankaccount(array $parameters)	Associate an existing bank account/Update to an existing bank account with a subscription
 * @method	array	getSubscriptions()	Listing all the subscriptions
 * @method	array	addSubscriptionAutocollect(array $parameters)	Change a particular subscription to online mode
 * @method	array	getSubscription(array $parameters)	Getting the details about a particular subscription
 * @method	array	addSubscriptionBuyonetimeaddon(array $parameters)	Include a one-time addon to a particular subscription
 * @method	array	creatingAnOfflineSubscriptionForAnExistingCustomer(array $parameters)	Creating an offline subscription for an already existing customer
 * @method	array	addSubscriptionCoupon(array $parameters)	Associating a coupon to a paricular subscription
 * @method	array	deleteSubscription(array $parameters)	Deleting an existing subscription
 * @method	array	getSubscriptionScheduledchanges(array $parameters)	Retrieving the scheduled changes of a particular subscription
 * @method	array	addSubscriptionCard(array $parameters)	Associate/Update card with an existing card for a particular subscription
 * @method	array	getSubscriptionRecentactivities(array $parameters)	Retrieving all activities of a particular subscription
 * @method	array	getSubscriptionNotes(array $parameters)	Retrieving notes of a particular subscription
 * @method	array	deleteSubscriptionScheduledchanges(array $parameters)	Dropping the scheduled changes of a particular subscription
 * @method	array	addSubscriptionCustomfields(array $parameters)	Update custome fields for a particular subscription
 * @method	array	associateUpdateBankAccountToANewBankAccount(array $parameters)	Associate/Update bank account with a new bank account for a particular subscription
 * @method	array	addSubscriptionsCompute(array $parameters)	Preview amount of the subscription and invoice. This can be called while both at time of creating a subscription/updating a subscription. For compute during update, you will have to pass the subscription_id node in the JSON body
 * @method	array	changeToOfflineMode(array $parameters)	Change a particular subscription to offline mode
 * @method	array	associateUpdateCardToANewCard(array $parameters)	Associate/Update card with a new card for a particular subscription
 * @method	array	addSubscriptionCharge(array $parameters)	Charge a one-time amount for a subscription
 * @method	array	creatingASubscriptionForANewCustomer(array $parameters)	Creating a subscription for a new customer This works as a
 * @method	array	addSubscriptionCancel(array $parameters)	Cancelling the subscription immediately
 * @method	array	addSubscriptionPaypalaccount(array $parameters)	Associate/Update PayPal account with an existing PayPal account for a particular subscription
 * @method	array	addSubscriptionPostpone(array $parameters)	Renewal date refers to the billing date of the subsequent term. You can postpone date of renewal of the subscription by specifying an appropriate date on which the customer should be billed. No prorated charges will be applied. Billing date for the subscription will be replaced by the date which you provide
 * @method	array	deleteSubscriptionBankaccount(array $parameters)	Delete a bank account associated with the subscription. Once removed, the subscription will become an offline subscription.
 * @method	array	addSubscriptionContactpersons(array $parameters)	Associate an existing contact person with a particular subscription
 * @method	array	addSubscriptionReference(array $parameters)	Update reference id to easily identify and keep track of your subscription
 * @method	array	listingAllSubscriptionsOfAParticularCustomer(array $parameters)	Listing all the subscriptions
 * @method	array	addEditDescriptionForAnAddOnInLineItemsList(array $parameters)	Add/Edit description to a particular add-on in the line items list
 * @method	array	deleteSubscriptionCoupons(array $parameters)	To remove coupon associated with a subscription
 * @method	array	cancellingASubscriptionAtTheEndOfTerm(array $parameters)	Cancelling the subscription at the end of term of subscription
 * @method	array	addSubscriptionSalesperson(array $parameters)	Update sales person associated with a particular subscription
 * @method	array	getCustomerCard(array $parameters)	Retrieving details of a particular card for a particular customer
 * @method	array	deleteCustomerCard(array $parameters)	To delete a particular credit card for a customer
 * @method	array	addCustomerCards(array $parameters)	Creating a new card for an existing customer
 * @method	array	getCustomerCards(array $parameters)	Retrieving details of all cards for a particular customer
 * @method	array	updateCustomerCard(array $parameters)	Editing the existing Credit card information for a customer
 * @method	array	addCouponMarkasactive(array $parameters)	Marking a coupon as active
 * @method	array	deleteCoupon(array $parameters)	Delete an existing coupon.
 * @method	array	updateCoupon(array $parameters)	Updating the details of a particular coupon
 * @method	array	addCouponMarkasinactive(array $parameters)	Marking a coupon as inactive
 * @method	array	addCoupon(array $parameters)	Creating a new coupon
 * @method	array	getCoupons()	Retrieving details of all coupons
 * @method	array	getCoupon(array $parameters)	Retrieving details of a particular coupon
 * @method	array	getOrganizations()	The Postman collection for the Zoho Subscriptions API contains the basic endpoints which are required to get started with the app. You can find the complete API documentation for Zoho Subscriptions . You can also use our to get familiar with the UI. The following are the prerequisites for using this collection. - You should have at least one organization in . -
 * @method	array	get()	Lists all resources API endpoint of Zoho Subscriptions
 * @method	array	getEvent(array $parameters)	Retrieving details of an existing event
 * @method	array	getEvents()	Retrieving list of all events
 * @method	array	addPayment(array $parameters)	Recording a new offline payment for a customer
 * @method	array	getPayment(array $parameters)	Retrieve details of a particular payment
 * @method	array	addPaymentRefunds(array $parameters)	A new credit note is created for the amount to be refund. Refund is then made for the credit note.
 * @method	array	deletePayment(array $parameters)	Delete an existing payment.
 * @method	array	updateCustomFieldsForPayment(array $parameters)	Updating custom fields for a payment You can update custom fields only if they are configured
 * @method	array	updatePayment(array $parameters)	Update an existing new payment
 * @method	array	getWebhook(array $parameters)	Retrieving details of a particular webhooks that has been triggered
 * @method	array	getWebhooks()	Retrieving details of all webhooks triggered
 * @method	array	updateCustomerContactperson(array $parameters)	Updating a particular contact person for a particular customer
 * @method	array	addCustomerContactpersons(array $parameters)	Creating a contact person for an existing customer
 * @method	array	getCustomerContactpersons(array $parameters)	List of all contact persons for a particular customer
 * @method	array	addCustomerContactpersonPrimary(array $parameters)	Mark a contact person as primary contact for a customer
 * @method	array	deleteCustomerContactperson(array $parameters)	Delete an existing contact person.
 * @method	array	getCustomerContactperson(array $parameters)	Retrieving details of a particular contact person for a particular customer
 * @method	array	deleteCustomerBankaccount(array $parameters)	To delete a particular Bank account of a particular customer
 * @method	array	updateCustomerBankaccount(array $parameters)	Editing the existing Bank Account information for a particular customer
 * @method	array	addCustomerBankaccounts(array $parameters)	Creating a new bank account for a particular customer
 * @method	array	getCustomerBankaccount(array $parameters)	Retrieving details of a particular bank account for a particular customer
 * @method	array	addAddonMarkasactive(array $parameters)	Marking an addon as active
 * @method	array	addAddon(array $parameters)	Creating a new addon of
 * @method	array	getAddon(array $parameters)	Getting the Details of a particular add-on
 * @method	array	getAddons()	Listing all the add-ons
 * @method	array	listAllAddOnsOfAProduct(array $parameters)	Listing all the add-ons of a particular product
 * @method	array	creatingAnAddonOfTierType(array $parameters)	Creating a new addon of
 * @method	array	creatingAnAddonOfUnitType(array $parameters)	Creating a new addon of
 * @method	array	updateAddon(array $parameters)	Updating the details of a particular addon
 * @method	array	listAllAddOnsAssociatedToAPlan(array $parameters)	Listing all the add-ons associated to a particular plan
 * @method	array	creatingAnAddonOfVolumeType(array $parameters)	Creating a new addon of
 * @method	array	deleteAddon(array $parameters)	Deleting a particular addon
 * @method	array	addAddonMarkasinactive(array $parameters)	Marking an addon as inactive
 * @method	array	addInvoiceCollect(array $parameters)	Charge a customer for an invoice with an existing card
 * @method	array	updateInvoiceAddress(array $parameters)	Update shipping and billing address of an invoice
 * @method	array	getInvoice(array $parameters)	Retrieve details of an existing invoice
 * @method	array	downloadAnInvoiceAsAPdfFile(array $parameters)	Download a particular invoice as a pdf file
 * @method	array	addInvoicesSent(array $parameters)	Bulk making invoices as Sent
 * @method	array	getInvoices()	List of all invoices
 * @method	array	addInvoiceSalesperson(array $parameters)	Update sales person for a particular invoice
 * @method	array	addInvoiceComments(array $parameters)	Add comments to an invoice
 * @method	array	addInvoicePaymentreminderEnable(array $parameters)	Enabling payment reminder for a particular invoice
 * @method	array	addInvoiceSent(array $parameters)	Making a draft invoice as Sent
 * @method	array	addInvoiceConvertoopen(array $parameters)	Change the status of an invoice to open
 * @method	array	getInvoiceRecentactivities(array $parameters)	Retrieving recent activities of a particular invoice
 * @method	array	emailAnInvoice(array $parameters)	Email a particular invoice
 * @method	array	deleteInvoiceComment(array $parameters)	Deleting a particular comment of an invoice
 * @method	array	addInvoiceCustomfields(array $parameters)	Updating custom fields for an invoice You can update custom fields only if they are configured
 * @method	array	addInvoicePaymentreminderDisable(array $parameters)	Stop all payment reminder for a particular invoice
 * @method	array	getBankaccountPendinginvoices(array $parameters)	Retrieving ACH pending invoices of a particular bank account
 * @method	array	getInvoiceComments(array $parameters)	Retrieving comments of a particular invoice
 * @method	array	addInvoiceWriteoff(array $parameters)	Write off a particularinvoice
 * @method	array	addInvoiceCancelwriteoff(array $parameters)	Cancel write off for a particular invoice
 * @method	array	deleteInvoiceCreditsapplied(array $parameters)	Deleting an existing credit applied to the invoice.
 * @method	array	deleteInvoice(array $parameters)	Deleting an existing invoice.
 * @method	array	collectChargeWithBankAccount(array $parameters)	Charge a customer for an invoice with an existing bank account
 * @method	array	addInvoicePaymentdate(array $parameters)	Update expected payment date fop the invoice. Reminders won't be sent till the date specified
 * @method	array	addInvoiceVoid(array $parameters)	Making an invoice as void
 * @method	array	addInvoiceCredits(array $parameters)	Use the customer's open credits to the invoice
 * @method	array	getPricebooks()	Retreiving list of all pricebooks
 * @method	array	deleteOrganization(array $parameters)	Deleting a particular Organization
 * @method	array	listingAllOrganizations()	Retieving Details of all Organizations
 *
 * @inheritdoc
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