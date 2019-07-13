<?php
/** 
 * @method	array	getHostedpage(array $parameters)	Getting the details of a particular hosted page
 * @method	array	getHostedpages()	Listing all the hostedpages
 * @method	array	addNewSubscriptionHostedpages(array $parameters)	Creating a hosted page for a new subscription for an existing customer
 * @method	array	addNewCustomerNewSubscriptionHostedpages(array $parameters)	Creating a hosted page for a new subscription for a new customer
 * @method	array	addUpdateCardHostedpages(array $parameters)	Creating a hosted page for updating a card linked to a specific subscription
 * @method	array	addOnetimeAddonHostedpages(array $parameters)	Creating a hosted page for onetime addon purchase
 * @method	array	addUpdateSubscriptionHostedpages(array $parameters)	Creating a hosted page for updating an existing subscription
 * @method	array	getTransactions(array $parameters)	List all transactions of a particular customer
 * @method	array	deleteCustomerComment(array $parameters)	Delete a particular customer comment.
 * @method	array	activateCustomers(array $parameters)	Bulk marking multiple customers as active
 * @method	array	disableCustomerPaymentReminder(array $parameters)	Disabling payment reminder for a particular customer
 * @method	array	activateCustomer(array $parameters)	Marking a particular customer as active
 * @method	array	getCustomers(array $parameters)	Retrieving details of all the customers
 * @method	array	getCustomer(array $parameters)	Retrieving details of a particular customer
 * @method	array	getCustomerComments(array $parameters)	Retrieving comments of a particular customer
 * @method	array	updateCustomer(array $parameters)	Updating the details of a particular customer
 * @method	array	deleteCustomer(array $parameters)	Delete a particular customer.
 * @method	array	getCustomerUnusedCredits(array $parameters)	Unused credit of a particular customer
 * @method	array	deactivateCustomers(array $parameters)	Bulk marking multiple customers as inactive
 * @method	array	addCustomer(array $parameters)	Creating a new customer
 * @method	array	deleteCustomers(array $parameters)	Bulk deleting customers
 * @method	array	deactivateCustomer(array $parameters)	Marking a particular customer as inactive
 * @method	array	enableCustomerPaymentReminder(array $parameters)	Enabling payment reminder for a particular customer
 * @method	array	deleteCustomerAddress(array $parameters)	Delete an existing customer's address.
 * @method	array	deleteCustomerPaypalAccount(array $parameters)	To delete a particular PayPal account of a particular customer
 * @method	array	deleteProduct(array $parameters)	Delete an existing product.
 * @method	array	updateProduct(array $parameters)	Updating the details of a particular product
 * @method	array	addProduct(array $parameters)	Creating a new product
 * @method	array	getProduct(array $parameters)	Retreiving details of a product
 * @method	array	activateProduct(array $parameters)	Marking a particular product as active
 * @method	array	getProducts(array $parameters)	List of all Products
 * @method	array	deactivateProduct(array $parameters)	Marking a particular product as inactive
 * @method	array	deleteSalesPerson(array $parameters)	Delete an existing salesperson
 * @method	array	deleteSalesPersons(array $parameters)	Bulk delete multiple sales persons
 * @method	array	getSalesPersons()	List details of all sales person
 * @method	array	deleteCreditnoteRefund(array $parameters)	Delete an existing credit note refund
 * @method	array	deleteCreditnote(array $parameters)	Delete an existing credit note
 * @method	array	deleteCreditnoteComment(array $parameters)	Delete a comment for a credit note
 * @method	array	getRefundCreditnote(array $parameters)	Details of an existing refund
 * @method	array	addCreditnoteRefunds(array $parameters)	Refund an existing credit note
 * @method	array	deleteCreditnoteInvoice(array $parameters)	Delete the credits applied to invoices
 * @method	array	addCreditnoteInvoices(array $parameters)	Apply credits from credit note to invoices
 * @method	array	addInvoiceEmail(array $parameters)	Email a particular credit note
 * @method	array	openVoidCreditnote(array $parameters)	Convert a voided credit note to open
 * @method	array	voidCreditnote(array $parameters)	Void an existing credit note for a particular customer
 * @method	array	getCreditnote(array $parameters)	Retrieve an existing credit note
 * @method	array	addCreditnoteCustomFields(array $parameters)	Updating custom fields for a credit note You can update custom fields only if they are configured
 * @method	array	addCreditnote(array $parameters)	Creating a Credit note for particular customer
 * @method	array	deleteCreditnotes(array $parameters)	Delete an existing credit note refund
 * @method	array	getProductPlans(array $parameters)	Listing all the plans for a specific product
 * @method	array	updatePlan(array $parameters)	Updating the details of a particular plan
 * @method	array	addPlan(array $parameters)	Creating a new plan
 * @method	array	deactivatePlan(array $parameters)	Marking a plan as inactive
 * @method	array	activatePlan(array $parameters)	Marking a plan as active
 * @method	array	getPlan(array $parameters)	Retreiving details of a particular plan
 * @method	array	deletePlan(array $parameters)	Delete an existing plan. A plan can only be deleted if it has no transactions associated with it.
 * @method	array	getPlans(array $parameters)	Listing all the plans
 * @method	array	addSubscriptionNotes(array $parameters)	Notes related to a particular subscription can be added by any user at any time
 * @method	array	reactivateSubscription(array $parameters)	Reactivating a subscription Only a subscription which is in
 * @method	array	deleteSubscriptionNote(array $parameters)	Delete a specific note associated to a particular subscription
 * @method	array	addSubscription(array $parameters)	Creating an online subscription for an already existing customer
 * @method	array	cancelSubscriptions(array $parameters)	Bulk cancelling multiple subscriptions
 * @method	array	addSubscriptionLineItem(array $parameters)	Add/Edit description to a particular plan in the line items list
 * @method	array	deleteSubscriptionCard(array $parameters)	Delete a card associated with the subscription. Once removed, the subscription will become an offline subscription.
 * @method	array	updateSubscription(array $parameters)	Updating the details of a particular subscription
 * @method	array	addSubscriptionBankAccount(array $parameters)	Associate an existing bank account/Update to an existing bank account with a subscription
 * @method	array	getSubscriptions(array $parameters)	Listing all the subscriptions
 * @method	array	setSubscriptionOnline(array $parameters)	Change a particular subscription to online mode
 * @method	array	getSubscription(array $parameters)	Getting the details about a particular subscription
 * @method	array	addSubscriptionOnetimeAddon(array $parameters)	Include a one-time addon to a particular subscription
 * @method	array	addOfflineSubscription(array $parameters)	Creating an offline subscription for an already existing customer
 * @method	array	addSubscriptionCoupon(array $parameters)	Associating a coupon to a paricular subscription
 * @method	array	deleteSubscription(array $parameters)	Deleting an existing subscription
 * @method	array	getSubscriptionScheduledChanges(array $parameters)	Retrieving the scheduled changes of a particular subscription
 * @method	array	addSubscriptionCard(array $parameters)	Associate/Update card with an existing card for a particular subscription
 * @method	array	getSubscriptionRecentActivities(array $parameters)	Retrieving all activities of a particular subscription
 * @method	array	getSubscriptionNotes(array $parameters)	Retrieving notes of a particular subscription
 * @method	array	deleteSubscriptionScheduledChanges(array $parameters)	Dropping the scheduled changes of a particular subscription
 * @method	array	addSubscriptionCustomFields(array $parameters)	Update custome fields for a particular subscription
 * @method	array	addSubscriptionNewBankAccount(array $parameters)	Associate/Update bank account with a new bank account for a particular subscription
 * @method	array	addSubscriptionsCompute(array $parameters)	Preview amount of the subscription and invoice. This can be called while both at time of creating a subscription/updating a subscription. For compute during update, you will have to pass the subscription_id node in the JSON body
 * @method	array	setSubscriptionOffline(array $parameters)	Change a particular subscription to offline mode
 * @method	array	updateSubscriptionCard(array $parameters)	Associate/Update card with a new card for a particular subscription
 * @method	array	addSubscriptionOnetimeCharge(array $parameters)	Charge a one-time amount for a subscription
 * @method	array	addNewCustomerSubscription(array $parameters)	Creating a subscription for a new customer This works as a
 * @method	array	cancelSubscriptionNow(array $parameters)	Cancelling the subscription immediately
 * @method	array	addSubscriptionPaypalAccount(array $parameters)	Associate/Update PayPal account with an existing PayPal account for a particular subscription
 * @method	array	postponeSubscription(array $parameters)	Renewal date refers to the billing date of the subsequent term. You can postpone date of renewal of the subscription by specifying an appropriate date on which the customer should be billed. No prorated charges will be applied. Billing date for the subscription will be replaced by the date which you provide
 * @method	array	deleteSubscriptionBankAccount(array $parameters)	Delete a bank account associated with the subscription. Once removed, the subscription will become an offline subscription.
 * @method	array	addSubscriptionContactPersons(array $parameters)	Associate an existing contact person with a particular subscription
 * @method	array	addSubscriptionReference(array $parameters)	Update reference id to easily identify and keep track of your subscription
 * @method	array	getCustomersSubscriptions(array $parameters)	Listing all the subscriptions
 * @method	array	addSubscriptionAddonLineItem(array $parameters)	Add/Edit description to a particular add-on in the line items list
 * @method	array	deleteSubscriptionCoupons(array $parameters)	To remove coupon associated with a subscription
 * @method	array	cancelSubscription(array $parameters)	Cancelling the subscription at the end of term of subscription
 * @method	array	addSubscriptionSalesPerson(array $parameters)	Update sales person associated with a particular subscription
 * @method	array	getCustomerCard(array $parameters)	Retrieving details of a particular card for a particular customer
 * @method	array	deleteCustomerCard(array $parameters)	To delete a particular credit card for a customer
 * @method	array	addCustomerCards(array $parameters)	Creating a new card for an existing customer
 * @method	array	getCustomerCards(array $parameters)	Retrieving details of all cards for a particular customer
 * @method	array	updateCustomerCard(array $parameters)	Editing the existing Credit card information for a customer
 * @method	array	activateCoupon(array $parameters)	Marking a coupon as active
 * @method	array	deleteCoupon(array $parameters)	Delete an existing coupon.
 * @method	array	updateCoupon(array $parameters)	Updating the details of a particular coupon
 * @method	array	deactivateCoupon(array $parameters)	Marking a coupon as inactive
 * @method	array	addCoupon(array $parameters)	Creating a new coupon
 * @method	array	getCoupons(array $parameters)	Retrieving details of all coupons
 * @method	array	getCoupon(array $parameters)	Retrieving details of a particular coupon
 * @method	array	get()	Lists all resources API endpoint of Zoho Subscriptions
 * @method	array	getEvent(array $parameters)	Retrieving details of an existing event
 * @method	array	getEvents(array $parameters)	Retrieving list of all events
 * @method	array	addPayment(array $parameters)	Recording a new offline payment for a customer
 * @method	array	getPayment(array $parameters)	Retrieve details of a particular payment
 * @method	array	addPaymentRefunds(array $parameters)	A new credit note is created for the amount to be refund. Refund is then made for the credit note.
 * @method	array	deletePayment(array $parameters)	Delete an existing payment.
 * @method	array	addProductCustomFields(array $parameters)	Updating custom fields for a payment You can update custom fields only if they are configured
 * @method	array	updatePayment(array $parameters)	Update an existing new payment
 * @method	array	getWebhook(array $parameters)	Retrieving details of a particular webhooks that has been triggered
 * @method	array	getWebhooks()	Retrieving details of all webhooks triggered
 * @method	array	updateCustomerContactPerson(array $parameters)	Updating a particular contact person for a particular customer
 * @method	array	addCustomerContactPersons(array $parameters)	Creating a contact person for an existing customer
 * @method	array	getCustomerContactPersons(array $parameters)	List of all contact persons for a particular customer
 * @method	array	addCustomerPrimaryContactPerson(array $parameters)	Mark a contact person as primary contact for a customer
 * @method	array	deleteCustomerContactPerson(array $parameters)	Delete an existing contact person.
 * @method	array	getCustomerContactPerson(array $parameters)	Retrieving details of a particular contact person for a particular customer
 * @method	array	deleteCustomerBankAccount(array $parameters)	To delete a particular Bank account of a particular customer
 * @method	array	updateCustomerBankAccount(array $parameters)	Editing the existing Bank Account information for a particular customer
 * @method	array	addCustomerBankAccounts(array $parameters)	Creating a new bank account for a particular customer
 * @method	array	getCustomerBankAccount(array $parameters)	Retrieving details of a particular bank account for a particular customer
 * @method	array	activateAddon(array $parameters)	Marking an addon as active
 * @method	array	addAddon(array $parameters)	Creating a new addon of Package type
 * @method	array	getAddon(array $parameters)	Getting the Details of a particular add-on
 * @method	array	getAddons(array $parameters)	Listing all the add-ons
 * @method	array	getProductAddons(array $parameters)	Listing all the add-ons of a particular product
 * @method	array	addTireAddon(array $parameters)	Creating a new addon of
 * @method	array	addUnitAddon(array $parameters)	Creating a new addon of
 * @method	array	updateAddon(array $parameters)	Updating the details of a particular addon
 * @method	array	getPlanAddons(array $parameters)	Listing all the add-ons associated to a particular plan
 * @method	array	addVolumeAddon(array $parameters)	Creating a new addon of
 * @method	array	deleteAddon(array $parameters)	Deleting a particular addon
 * @method	array	deactivateAddon(array $parameters)	Marking an addon as inactive
 * @method	array	addInvoiceCollect(array $parameters)	Charge a customer for an invoice with an existing card
 * @method	array	updateInvoiceAddress(array $parameters)	Update shipping and billing address of an invoice
 * @method	array	getInvoice(array $parameters)	Retrieve details of an existing invoice
 * @method	array	downloadInvoiceAsPdf(array $parameters)	Download a particular invoice as a pdf file
 * @method	array	setInvoicesAsSent(array $parameters)	Bulk making invoices as Sent
 * @method	array	getInvoices(array $parameters)	List of all invoices
 * @method	array	addInvoiceSalesPerson(array $parameters)	Update sales person for a particular invoice
 * @method	array	addInvoiceComments(array $parameters)	Add comments to an invoice
 * @method	array	enableInvoicePaymentReminder(array $parameters)	Enabling payment reminder for a particular invoice
 * @method	array	setInvoiceAsSent(array $parameters)	Making a draft invoice as Sent
 * @method	array	openInvoice(array $parameters)	Change the status of an invoice to open
 * @method	array	getInvoiceRecentActivities(array $parameters)	Retrieving recent activities of a particular invoice
 * @method	array	emailInvoice(array $parameters)	Email a particular invoice
 * @method	array	deleteInvoiceComment(array $parameters)	Deleting a particular comment of an invoice
 * @method	array	addInvoiceCustomFields(array $parameters)	Updating custom fields for an invoice You can update custom fields only if they are configured
 * @method	array	disableInvoicePaymentReminder(array $parameters)	Stop all payment reminder for a particular invoice
 * @method	array	getBankAccountPendingInvoices(array $parameters)	Retrieving ACH pending invoices of a particular bank account
 * @method	array	getInvoiceComments(array $parameters)	Retrieving comments of a particular invoice
 * @method	array	writeoffInvoice(array $parameters)	Write off a particularinvoice
 * @method	array	cancelInvoiceWriteoff(array $parameters)	Cancel write off for a particular invoice
 * @method	array	deleteInvoiceCreditsApplied(array $parameters)	Deleting an existing credit applied to the invoice.
 * @method	array	deleteInvoice(array $parameters)	Deleting an existing invoice.
 * @method	array	addBankAccountCharge(array $parameters)	Charge a customer for an invoice with an existing bank account
 * @method	array	setInvoicePaymentDate(array $parameters)	Update expected payment date fop the invoice. Reminders won't be sent till the date specified
 * @method	array	voidInvoice(array $parameters)	Making an invoice as void
 * @method	array	addInvoiceCredits(array $parameters)	Use the customer's open credits to the invoice
 * @method	array	addInvoiceLineItems(array $parameters)	Add items to a pending invoice
 * @method	array	getPricebooks()	Retreiving list of all pricebooks
 * @method	array	deleteOrganization(array $parameters)	Deleting a particular Organization
 * @method	array	getOrganizations()	Retieving Details of all Organizations
 */
