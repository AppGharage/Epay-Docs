---
extends: _layouts.documentation
section: documentation_content
---

## API Reference
Here you’ll find detailed information about our APIs – what they’re for, how to use them and when to use them.

In order to start using Epay’s APIs to receive and/or disburse payments, you would need to have an Epay Account and 
also create an Integration. Head over to our [Signup page](https://epaygh.com/register) to create a new Epay account.

> Kindly note that your `email` and `telephone` will be verified.

-------

### Overview
The Epay API is organized around REST. Our API has predictable resource-oriented URLs, accepts JSON-encoded request bodies, returns JSON-encoded responses, and uses standard HTTP response codes, authentication and verbs.

Once registered, log into your account and head over to your settings sections on your dashboard to generate a Merchant Key. This Key should be kept confidential, as it would grant to access to all protected API Resources as well as direct incoming funds to your Epay Wallet.

To help you get oriented with Epay’s API and what it can help you do, let’s start by defining some basics:
- The endpoints listed are to be applied to the base Url https://epaygh.com/api
- All payments received are instantly deposited into your Epay wallet
- All API endpoints except Authorization requires authentication
- An Integration must be created on your Epay account to start using the API
- All API requests must be made over HTTPS.
- All Bulk fetches via a “list” endpoint are Paginated
- All API endpoints are versioned
- All Charge API allow payments from only our payment methods


#### API Resources

<div class="overflow-y-auto scrollbar-w-2 scrollbar-track-grey-lighter scrollbar-thumb-rounded scrollbar-thumb-grey scrolling-touch">
    <table class="w-full text-left table-collapse">
    <thead>
        <tr>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Resource Name</th>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Endpoint Url</th>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Description</th>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Last Updated</th>
        </tr>
    </thead>
    <tbody class="align-baseline">
        <tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                Authentication
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                /v1/token
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                This endpoint allows to retrieve a token <br> 
                which will be used to authenticate or gets <br>
                you access to all protected API Resources <br>or endpoints. <br><br>
                <b>All tokens expire after 1 hour</b> 
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-purple-dark whitespace-no-wrap">
                25th Jan. 2019
            </td>
        </tr>
         <tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                Charges
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                /v1/charge
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                This single endpoint allows you to charge both <br> 
                mobile money accounts and Credit Cards into  <br>
                your Epay wallet. <br><br>
                <b>All tokens expire after 1 hour</b> 
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-purple-dark whitespace-no-wrap">
                25th Jan. 2019
            </td>
        </tr>
        <tr>
         <tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                Customers
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                /v1/customers
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                This endpoint allows to retrieve a token <br> 
                which will be used to authenticate or gets <br>
                you access to all protected API Resources <br>or endpoints. <br><br>
                <b>All tokens expire after 1 hour</b> 
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-purple-dark whitespace-no-wrap">
                25th Jan. 2019
            </td>
        </tr>
         <tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                Transactions
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                /v1/transactions
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                This endpoint allows to retrieve a token <br> 
                which will be used to authenticate or gets <br>
                you access to all protected API Resources <br>or endpoints. <br><br>
                <b>All tokens expire after 1 hour</b> 
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-purple-dark whitespace-no-wrap">
                25th Jan. 2019
            </td>
        </tr>
    </tbody>
    </table>
</div>


> Your API keys carry many privileges, so be sure to keep them secure! Do not share your secret API keys in publicly accessible areas such as GitHub, client-side code, and so forth.

----------
### Authentication

----------

### Charge 

----------

### Customers

----------

### Transactions