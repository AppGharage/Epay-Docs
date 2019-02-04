---
extends: _layouts.documentation
section: documentation_content
---

## API Overview
Here, you’ll find detailed information about our APIs – what they’re for, how to use them and when to use them.

In order to start using Epay’s APIs to receive and/or disburse payments, you would need to have an Epay Account and 
also create an Integration. Head over to our [Signup page](https://epaygh.com/register) to create a new Epay account.

> Kindly note that your `email` and `telephone` will be verified.

<br>

-------

### Introduction
The Epay API is organized around `REST`. Our API has predictable resource-oriented URLs, accepts JSON-encoded request bodies, returns JSON-encoded responses, and uses standard HTTP response codes, authentication and verbs.

Once registered, log into your account and head over to your settings sections on your dashboard to generate a Merchant Key. This Key should be kept confidential, as it would grant you access to all protected API Resources as well as direct incoming funds to your Epay Wallet.

To help you get oriented with Epay’s API and what it can help you do, let’s start by defining some basics:
- The endpoints listed are to be applied to the base Url https://epaygh.com/api
- All payments received are instantly deposited into your Epay wallet
- All API endpoints except Authorization requires authentication
- An Integration must be created on your Epay account to start using the API
- All API requests must be made over HTTPS.
- All Bulk fetches via a “list” endpoint are Paginated
- All API endpoints are versioned
- All Charge API allow payments from only our payment methods

<br>


### API Resources / Endpoints
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
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-blue-lighter whitespace-no-wrap">
                /v1/token
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                This endpoint allows to retrieve a token <br> 
                which will be used to authenticate or <br>
                gets you access to all protected API <br> 
                Resources or endpoints. <br><br>
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
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-blue-lighter whitespace-no-wrap">
                /v1/charge
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                This single endpoint allows you to  <br> 
                charge both mobile money accounts<br> 
                and Credit Cards into your Epay wallet. <br><br>
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
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-blue-lighter whitespace-no-wrap">
                /v1/customers
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                This endpoint allows you to create a  <br> 
                customer, retrieve customer details  <br>
                and all transactions by a specific customer, <br><br>
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
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-blue-lighter whitespace-no-wrap">
                /v1/transactions
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                This endpoint returns a list of all  <br> 
                transactions under your account and  <br>
                also allows you to retrieve information <br>
                for a specific transaction or check the <br>
                status of a transaction <br><br>
                <b>All tokens expire after 1 hour</b> 
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-purple-dark whitespace-no-wrap">
                25th Jan. 2019
            </td>
        </tr>
    </tbody>
    </table>
</div>


<br>

### HTTP Status Code Summary 
<div class="overflow-y-auto scrollbar-w-2 scrollbar-track-grey-lighter scrollbar-thumb-rounded scrollbar-thumb-grey scrolling-touch">
    <table class="w-full text-left table-collapse">
    <thead>
        <tr>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Status Code</th>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Description</th>
        </tr>
    </thead>
    <tbody class="align-baseline">
        <tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                200 - OK	
            </td>
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-blue-lighter whitespace-no-wrap">
                Everything worked as expected.
            </td>
        </tr>
         <tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                400 - Bad Request
            </td>
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-blue-lighter whitespace-no-wrap">
                The request was unacceptable,<br> 
                often due to missing a <br> 
                required parameter.
            </td>
        </tr>
        <tr>
         <tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                401 - Unauthorized	
            </td>
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-blue-lighter whitespace-no-wrap">
                No valid Access token, <br> 
                merchant_key, app_id  <br> 
                or app_secret provided.
            </td>
        </tr>
         <tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                402 - Request Failed
            </td>
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-blue-lighter whitespace-no-wrap">
               The parameters were valid <br>  
               but the request failed.
            </td>
        </tr>
        <tr>
         <tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                404 - Not Found	
            </td>
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-blue-lighter whitespace-no-wrap">
                The requested resource  <br> 
                doesn't exist.
            </td>
        </tr>
         <tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                402 - Request Failed
            </td>
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-blue-lighter whitespace-no-wrap">
               The parameters were  <br> 
               valid but the request failed.
            </td>
        </tr>
        <tr>
         <tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                409 - Conflict
            </td>
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-blue-lighter whitespace-no-wrap">
                The request conflicts  <br> 
                with another request
            </td>
        </tr>
         <tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                429 - Too Many Requests
            </td>
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-blue-lighter whitespace-no-wrap">
               Too many requests hit the  <br> 
               API too quickly. We  <br> 
               recommend an exponential  <br> 
               backoff of your requests.
            </td>
        </tr>
        <tr>
         <tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                500, 502, 503, 504 - Server Errors	
            </td>
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-blue-lighter whitespace-no-wrap">
                Something went wrong  <br> 
                on our end. (These are rare.)
            </td>
        </tr>
    </tbody>
    </table>
</div>

<br>

### Handling Errors
<div class="overflow-y-auto scrollbar-w-2 scrollbar-track-grey-lighter scrollbar-thumb-rounded scrollbar-thumb-grey scrolling-touch">
    <table class="w-full text-left table-collapse">
    <thead>
        <tr>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Error Type</th>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Description</th>
        </tr>
    </thead>
    <tbody class="align-baseline">
        <tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                authentication_error
            </td>
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-blue-lighter whitespace-no-wrap">
                Failure to properly  <br> 
                authenticate yourself  <br> 
                in the request.
            </td>
        </tr>
         <tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                invalid_request_error
            </td>
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-blue-lighter whitespace-no-wrap">
                Invalid request errors  <br> 
                arise when your request  <br> 
                has invalid parameters.
            </td>
        </tr>
        <tr>
         <tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                momo_error
            </td>
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-blue-lighter whitespace-no-wrap">
                Mobile Money wallet errors  <br> 
                are the most common type of  <br> 
                error you should expect to  <br> 
                handle. They result when the  <br> 
                user enters a mobile money  <br> 
                wallet that can't be charged  <br> 
                for some reason.
            </td>
        </tr>
         <tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                api_error
            </td>
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-blue-lighter whitespace-no-wrap">
                API errors cover any other  <br> 
                type of problem (e.g., a  <br> 
                temporary problem with our  <br> 
                servers), and are extremely uncommon.
            </td>
        </tr>
    </tbody>
    </table>
</div>


<br>


### Example API Error Responses
The API by default returns almost the same content structure when a call fails. Please take note of the structure below since this will no longer be mentioned in the documentation of the various individual calls.

```json
{
    "success": false,
    "error_type": "authentication_error",
    "message": "We couldn't verify your identity!"
}
{
    "success": false,
    "error_type": "invalid_request_error",
    "message": "Not a valid API request with missing parameters"
}
{
    "success": false,
    "error_type": "authentication_error",
    "message": "Your identity couldn't be validated!"
}

{
    "success": false,
    "error_type": "momo_error",
    "message": "Ooops! We encountered an issue trying to charge 
    the mobile wallet"
}

```

----------
Next, learn more about our [API Authentication](/docs/api-reference-authentication).
