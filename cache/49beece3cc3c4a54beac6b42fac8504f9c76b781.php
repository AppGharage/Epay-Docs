<?php $__env->startSection('documentation_content'); ?><h2>API Reference</h2>
<p>Here, you’ll find detailed information about our APIs – what they’re for, how to use them and when to use them.</p>
<p>In order to start using Epay’s APIs to receive and/or disburse payments, you would need to have an Epay Account and
also create an Integration. Head over to our <a href="https://epaygh.com/register">Signup page</a> to create a new Epay account.</p>
<blockquote>
<p>Kindly note that your <code>email</code> and <code>telephone</code> will be verified.</p>
</blockquote>
<hr />
<h3>Overview</h3>
<p>The Epay API is organized around REST. Our API has predictable resource-oriented URLs, accepts JSON-encoded request bodies, returns JSON-encoded responses, and uses standard HTTP response codes, authentication and verbs.</p>
<p>Once registered, log into your account and head over to your settings sections on your dashboard to generate a Merchant Key. This Key should be kept confidential, as it would grant to access to all protected API Resources as well as direct incoming funds to your Epay Wallet.</p>
<p>To help you get oriented with Epay’s API and what it can help you do, let’s start by defining some basics:</p>
<ul>
<li>The endpoints listed are to be applied to the base Url <a href="https://epaygh.com/api">https://epaygh.com/api</a></li>
<li>All payments received are instantly deposited into your Epay wallet</li>
<li>All API endpoints except Authorization requires authentication</li>
<li>An Integration must be created on your Epay account to start using the API</li>
<li>All API requests must be made over HTTPS.</li>
<li>All Bulk fetches via a “list” endpoint are Paginated</li>
<li>All API endpoints are versioned</li>
<li>All Charge API allow payments from only our payment methods</li>
</ul>
<h4>API Resources</h4>
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
         </tr>
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
<blockquote>
<p>Your API keys carry many privileges, so be sure to keep them secure! Do not share your secret API keys in publicly accessible areas such as GitHub, client-side code, and so forth.</p>
</blockquote>
<hr />
<h3>Authentication</h3>
<p>Once you have created an Epay account, you need to call <strong>/v1/token</strong> to obtain an access token. This access token grants you access to all protected resources. To get your access token you will need a <strong>merchant_key, app_id</strong> and <strong>app_secret</strong>. You will need to first create an Integration on your dashboard to get your <strong>app_id</strong> and <strong>app_secret</strong>. Your <strong>merchant_key</strong> can be located on your <strong>dashboard under Settings</strong>.</p>
<blockquote>
<p>The <strong>access_token</strong> would grant access to the protected resources, each generated access_token <strong>expires in 3600 seconds (1hr)</strong>.</p>
</blockquote>
<h4>Endpoint Details</h4>
<div class="overflow-y-auto scrollbar-w-2 scrollbar-track-grey-lighter scrollbar-thumb-rounded scrollbar-thumb-grey scrolling-touch">
    <table class="w-full text-left table-collapse">
        <tbody class="align-baseline">
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                    Endpoint Url
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">        
                    https://epaygh.com/api/v1/token
                </td>
            </tr>
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                    Method
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                POST
                </td>
            </tr>
        </tbody>
    </table>
</div>
<h4>Headers</h4>
<div class="overflow-y-auto scrollbar-w-2 scrollbar-track-grey-lighter scrollbar-thumb-rounded scrollbar-thumb-grey scrolling-touch">
    <table class="w-full text-left table-collapse">
        <tbody class="align-baseline">
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Content-type
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">        
                    application/json
                </td>
            </tr>
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                    Accept
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                application/json
                </td>
            </tr>
        </tbody>
    </table>
</div>
<h4>Request Body Parameters</h4>
<div class="overflow-y-auto scrollbar-w-2 scrollbar-track-grey-lighter scrollbar-thumb-rounded scrollbar-thumb-grey scrolling-touch">
    <table class="w-full text-left table-collapse">
    <thead>
        <tr>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Parameter</th>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Field Type</th>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Required</th>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Description</th>
        </tr>
    </thead>
    <tbody class="align-baseline">
        <tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                Merchant_key
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                String
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-purple-dark whitespace-no-wrap">
               Yes
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                This is a unique key related to your <br>
                epay account and can be found on your <br>
                dashboard under settings section.<br>
                <b>This key carries many privileges, so 
                <br>be sure to keep them secure</b> 
            </td>
        </tr>
         <tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                App_id
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                String
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-purple-dark whitespace-no-wrap">
               Yes
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                This is a unique ID related to your <br>
                integration and can also be found on <br>
                your dashboard under integration section.<br>
                <b>This key carries many privileges, so 
                <br>be sure to keep them secure</b> 
            </td>
        </tr>
        <tr>
         </tr>
<tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                App_Secret
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                String
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-purple-dark whitespace-no-wrap">
               Yes
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                This is a unique key related to your <br>
                integration and can also be found on <br>
                your dashboard under settings section.<br>  
                <b>This key carries many privileges, so 
                <br>be sure to keep them secure</b> 
            </td>
        </tr>
    </tbody>
    </table>
</div>
<h4>Example Request Body</h4>
<pre><code>{   
    "merchant_key" : "AWDFEv7eTFrzCSIY",
    "app_id" : "5c654089bcd30",
    "app_secret": "ASDSDCGKj9IWtkM2hNIgPDHbvvEPb67X"
}</code></pre>
<h4>Example Response</h4>
<pre><code>{
    "success": true,
    "message": "Verification Successful",
    "data": {
        "access_token": "eUJGUmR2a0RxQ0hESlhCTVl6VVlyYndNWDJhYlZwQDS=5c4af8b9a3681",
        "expires_at": "2019-01-25 12:53:29"
    }
}</code></pre>
<h4>Example Error Responses</h4>
<pre><code>{
    "success": false,
    "message": "We couldn't verify your identity!"
}
{
    "success": false,
    "message": "Not a valid API request with missing parameters"
}
{
    "success": false,
    "message": "Your identity couldn't be validated!"
}
</code></pre>
<hr />
<h3>Charge</h3>
<p>The chief premise of this endpoint is to provide a single endpoint that allows you to charge your customers mobile money wallet or credit card. Charges are identified by a unique, random ID called <strong>reference</strong>. All payments are instantly deposited into your Epay wallet. The amount taken from your customer is deposited with <strong>zero percent (0%) charge</strong>.</p>
<p>This is a protected route hence you need to pass your access token through the Authorization header, that is, <strong>Authorization : Bearer <access_token></strong></p>
<blockquote>
<p>We process all transactions <strong>asynchronously</strong>. Hence you would have to <strong>set your callback/webhook url</strong> on your dashboard under the settings section to receive the status of every posted transaction or <strong>call out the retrieve a transaction endpoint to</strong> verify status of the transaction.</p>
</blockquote>
<h4>Enpoint Details</h4>
<div class="overflow-y-auto scrollbar-w-2 scrollbar-track-grey-lighter scrollbar-thumb-rounded scrollbar-thumb-grey scrolling-touch">
    <table class="w-full text-left table-collapse">
        <tbody class="align-baseline">
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Endpoint Url
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">        
                    https://epaygh.com/api/v1/charge
                </td>
            </tr>
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Method
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                POST
                </td>
            </tr>
        </tbody>
    </table>
</div>
<h4>Headers</h4>
<div class="overflow-y-auto scrollbar-w-2 scrollbar-track-grey-lighter scrollbar-thumb-rounded scrollbar-thumb-grey scrolling-touch">
    <table class="w-full text-left table-collapse">
        <tbody class="align-baseline">
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Content-Type
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">        
                    application/json
                </td>
            </tr>
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Accept
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                application/json
                </td>
            </tr>
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Authorization
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">        
                    Bearer {access_token}
                </td>
            </tr>
        </tbody>
    </table>
</div>
<h4>Request Body Parameters</h4>
<div class="overflow-y-auto scrollbar-w-2 scrollbar-track-grey-lighter scrollbar-thumb-rounded scrollbar-thumb-grey scrolling-touch">
    <table class="w-full text-left table-collapse">
    <thead>
        <tr>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Parameter</th>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Field Type</th>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Required</th>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Description</th>
        </tr>
    </thead>
    <tbody class="align-baseline">
        <tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                Reference
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                String
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-purple-dark whitespace-no-wrap">
               Yes
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">            
                This is a unique ID that represents <br>the transaction.
            </td>
        </tr>
         <tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                Amount
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                Float
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-purple-dark whitespace-no-wrap">
               Yes
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                The amount you wish to charge the customer.<br>
                <b>Amount must be of type float. <br> Eg; 1.00 or 50.00</b>
            </td>
        </tr>
        <tr>
         </tr>
<tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                Customer_Name
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                String
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-purple-dark whitespace-no-wrap">
               Yes
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                This is the name of the customer <br>you are charging.
            </td>
        </tr>
        <tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                Customer_Email
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                String
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-purple-dark whitespace-no-wrap">
               Yes
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                This is the email<br> of the customer <br>you are charging.
            </td>
        </tr>
        <tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                Customer_Telephone
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                String
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-purple-dark whitespace-no-wrap">
               Yes
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                This is the telephone <br>number of the  customer <br>you are charging.
            </td>
        </tr>
        <tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                Payment_Description
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                String
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-purple-dark whitespace-no-wrap">
               No
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                This is the description of <br>the payment.
            </td>
        </tr>
    </tbody>
    </table>
        <h4>Parameters to Charge Mobile Money Wallet</h4><br>
 <table class="w-full text-left table-collapse">
 <thead>
        <tr>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Parameter</th>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Field Type</th>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Required</th>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Description</th>
        </tr>
    </thead>
 <tbody>
        <tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                Mobile_wallet_number
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                String
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-purple-dark whitespace-no-wrap">
               Yes, for only <br>mobile money <br>charges
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
               This is the number of the <br> mobile money wallet you <br>wish to charge.
            </td>
        </tr>
          <tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                payment_method
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                String
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-purple-dark whitespace-no-wrap">
               Yes, for only<br> mobile money <br>charges
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
               This is the network of the <br> mobile money wallet you <br>wish to charge.
            </td>
        </tr>
          <tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                Mobile_wallet_number
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                String
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-purple-dark whitespace-no-wrap">
               Yes, for only <br>mobile money <br>charges
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
               This is how you wish to <br> charge the customer and <br>must be set to  ‘momo’.
            </td>
        </tr>
        <tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                Voucher
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                String
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-purple-dark whitespace-no-wrap">
               Yes, for only <br>vodafone mobile <br> money wallets
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
               This is the voucher the  <br> user generates to authorize <br>the payment..
            </td>
        </tr>
         </tbody>
    </table>
    <h4>Parameters to Charge Credit Cards (returns a url to redirect to)</h4><br>
 <table class="w-full text-left table-collapse">
 <thead>
        <tr>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Parameter</th>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Field Type</th>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Required</th>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                Payment_method
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                String
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-purple-dark whitespace-no-wrap">
               Yes, for only <br>credit card <br>charges
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
               This is how you wish to  <br> charge the customer and  <br>must be set to  ‘card’
            </td>
        </tr>
</tbody>
</table></div>
<h4>Example Request Body ( Mobile money)</h4>
<pre><code>
{   
    "reference" : "EP-2JBH23JJBJBJ",
    "amount" : 1.00,
    "payment_method" : "momo",
    "customer_name": "Akosua Manu",
    "customer_email" : "akosuamanu@gmail.com",
    "customer_telephone" : "054**********",
    "mobile_wallet_number" : "054**********",
    "mobile_wallet_network":"mtn",
    "payment_description": "A test payment"
}</code></pre>
<h4>Example Response (Mobile money)</h4>
<pre><code>
{
    "success": true,
    "message": "A payment request has been sent to the mobile wallet. 
    Please Approve Payment.",
    "data": {
        "customer": {
            "id": 37,
            "name": "Akosua Manu",
            "email": "akosuamanu@gmail.com",
            "telephone": "054**********",
            "created_at": "2019-01-22 16:15:32",
            "updated_at": "2019-01-22 16:15:32"
        },
        "transaction": {
            "reference": "EP-2JBH23JJBJBJ",
            "payment_method": "momo",
            "description": "A test payment",
            "amount": 1.00,
            "mobile_wallet_number": "054**********",
            "mobile_wallet_network": "mtn"
        }
    }
}</code></pre>
<h4>Example Request Body (Credit Card)</h4>
<pre><code>
{   
    "reference" : "EP-HBSABSDKKAS",
    "amount" : 1.00,
    "payment_method" : "card",
    "customer_name": "Akosua Manu",
    "customer_email" : "akosuamanu@gmail.com",
    "customer_telephone" : "054**********",
    "payment_description": "A sample payment"
}</code></pre>
<h4>Example Response (Credit Card)</h4>
<pre><code>{
    "success": true,
    "message": "Redirect to url provided to complete payment",
    "data": {
        "customer": {
            "id": 37,
            "name": "Akosua Manu",
            "email": "akosua manu@gmail.com",
            "telephone": "054**********",
            "created_at": "2019-01-22 16:15:32",
            "updated_at": "2019-01-22 16:15:32"
        },
        "transaction": {
            "reference": "EP-HBSABSDKKAS",
            "payment_method": "card",
            "description": "A sample payment",
            "amount": 1.00
        },
        "redirect_url": "https://migs.mastercard.com.au/vpcpay"
    }
}</code></pre>
<h4>Error Response</h4>
<pre><code>{
    "success": false,
    "message": "Not a valid API request with missing parameters"
}</code></pre>
<pre><code>{
    "success": false,
    "message": "Authorization Failed! "
}</code></pre>
<pre><code>{
    "success": false,
    "message": "Ooops! We encountered an issue trying to charge 
    the mobile wallet"
}</code></pre>
<hr />
<h3>Customers</h3>
<p>The chief premise of this endpoint is to allow you list all customers created under your Epay Account. Kindly take note that this is a protected resource.</p>
<blockquote>
<p>The response returns a paginated list of customers</p>
</blockquote>
<h4>Endpoint Details</h4>
<div class="overflow-y-auto scrollbar-w-2 scrollbar-track-grey-lighter scrollbar-thumb-rounded scrollbar-thumb-grey scrolling-touch">
    <table class="w-full text-left table-collapse">
        <tbody class="align-baseline">
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Endpoint Url
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">        
                    https://epaygh.com/api/v1/customers
                </td>
            </tr>
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Method
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                GET
                </td>
            </tr>
        </tbody>
    </table>
</div>
<h4>Headers</h4>
<div class="overflow-y-auto scrollbar-w-2 scrollbar-track-grey-lighter scrollbar-thumb-rounded scrollbar-thumb-grey scrolling-touch">
    <table class="w-full text-left table-collapse">
        <tbody class="align-baseline">
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Content-Type
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">        
                    application/json
                </td>
            </tr>
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Authorization
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">        
                    Bearer {access_token}
                </td>
            </tr>
        </tbody>
    </table>
</div>
<h4>Example Response</h4>
<pre><code>{
    "success": true,
    "message": "Customers retrieved Successfully",
    "customers": {
        "current_page": 1,
        "data": [
            {
                "id": 36,
                "name": "okays",
                "email": "okays@gmail.com",
                "telephone": "054**********",
                "created_at": "2018-12-03 14:25:55",
                "updated_at": "2018-12-03 14:25:55"
            },
            {
                "id": 35,
                "name": "something",
                "email": "some@gmail.com",
                "telephone": "054**********",
                "created_at": "2018-12-03 14:25:13",
                "updated_at": "2018-12-03 14:25:13"
            },
            {
                "id": 34,
                "name": "samiiii",
                "email": "sammii@gmail.com",
                "telephone": "054**********",
                "created_at": "2018-12-03 14:21:10",
                "updated_at": "2018-12-03 14:21:10"
            },
            {
                "id": 33,
                "name": "sam",
                "email": "sam@gmail.cmo",
                "telephone": "054**********",
                "created_at": "2018-11-30 12:18:21",
                "updated_at": "2018-11-30 12:18:21"
            },
            {
                "id": 31,
                "name": "sams",
                "email": "sams@gmail.com",
                "telephone": "054**********",
                "created_at": "2018-10-22 15:12:00",
                "updated_at": "2018-10-22 15:12:00"
            },
            {
                "id": 27,
                "name": "babs",
                "email": "babs@gmail.com",
                "telephone": "0548797248",
                "created_at": "2018-10-13 12:40:17",
                "updated_at": "2018-10-13 12:40:17"
            },
            {
                "id": 26,
                "name": "Akos",
                "email": "akos@gmail.com",
                "telephone": "024**********",
                "created_at": "2018-10-12 16:38:19",
                "updated_at": "2018-10-12 16:38:19"
            },
            {
                "id": 25,
                "name": "Akosa",
                "email": "skos2@gmail.com",
                "telephone": "024**********",
                "created_at": "2018-10-12 16:36:08",
                "updated_at": "2018-10-12 16:36:08"
            },
        ],
        "first_page_url": "http://localhost:8000/api/v1/customers?page=1",
        "from": 1,
        "last_page": 2,
        "last_page_url": "http://localhost:8000/api/v1/customers?page=2",
        "next_page_url": "http://localhost:8000/api/v1/customers?page=2",
        "path": "http://localhost:8000/api/v1/customers",
        "per_page": 20,
        "prev_page_url": null,
        "to": 20,
        "total": 32
    }
}</code></pre>
<h4>Example Error Response</h4>
<pre><code>{
    "success": false,
    "message": "Not a valid API request with missing parameters"
}</code></pre>
<pre><code>{
    "success": false,
    "message": "Authorization Failed! "
}</code></pre>
<h4>Create a new Customer</h4>
<p>The chief premise of this endpoint is to allow you to create a customer under your Epay Account. <strong>Kindly take note that this is a protected resource</strong>.</p>
<div class="overflow-y-auto scrollbar-w-2 scrollbar-track-grey-lighter scrollbar-thumb-rounded scrollbar-thumb-grey scrolling-touch">
    <table class="w-full text-left table-collapse">
        <tbody class="align-baseline">
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Endpoint Url
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">        
                    https://epaygh.com/api/v1/customers
                </td>
            </tr>
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Method
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
               POST
                </td>
            </tr>
        </tbody>
    </table>
</div>
<h4>Headers</h4>
<div class="overflow-y-auto scrollbar-w-2 scrollbar-track-grey-lighter scrollbar-thumb-rounded scrollbar-thumb-grey scrolling-touch">
    <table class="w-full text-left table-collapse">
        <tbody class="align-baseline">
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Content-Type
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">        
                    application/json
                </td>
            </tr>
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Accept
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                application/json
                </td>
            </tr>
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Authorization
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">        
                    Bearer {access_token}
                </td>
            </tr>
        </tbody>
    </table>
</div>
<h4>Request Body Parameters</h4>
<div class="overflow-y-auto scrollbar-w-2 scrollbar-track-grey-lighter scrollbar-thumb-rounded scrollbar-thumb-grey scrolling-touch">
    <table class="w-full text-left table-collapse">
    <thead>
            <tr>
            <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Parameter</th>
            <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Field Type</th>
            <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Required</th>
            <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Description</th>
            </tr>
        </thead>
    <tbody>
        <tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                Name
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                String
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-purple-dark whitespace-no-wrap">
               Yes
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                This is the name of the <br>customer.
            </td>
        </tr>
        <tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
               Email
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                String
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-purple-dark whitespace-no-wrap">
               Yes
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                This is the email of the <br>customer.
            </td>
        </tr>
        <tr>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                Telephone
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                String
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-purple-dark whitespace-no-wrap">
               Yes
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                This is the telephone number <br> of the customer.
            </td>
        </tr>
</tbody>
</table></div>
<h4>Example Request Body</h4>
<pre><code>{   
    "name" : "My Name",
    "email" : "myname@gmail.com",
    "telephone": "024************"
}</code></pre>
<h4>Example Response</h4>
<pre><code>
{
    "success": true,
    "message": "Customer created Successfully",
    "data": {
        "customer": [
            {
                "id": 37,
                "name": ""My Name",
                "email": "myname@gmail.com",
                "telephone": "024************",
                "created_at": "2019-01-22 16:15:32",
                "updated_at": "2019-01-22 16:15:32"
            }
        ]
    }
}</code></pre>
<h4>Retrieve a Customer</h4>
<p>The chief premise of this endpoint is to allow you to retrieve a single customer data as well as all transactions of the customer. <strong>Kindly take note that this is a protected resource</strong>.</p>
<h4>Endpoint Details</h4>
<div class="overflow-y-auto scrollbar-w-2 scrollbar-track-grey-lighter scrollbar-thumb-rounded scrollbar-thumb-grey scrolling-touch">
    <table class="w-full text-left table-collapse">
        <tbody class="align-baseline">
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Endpoint Url
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">        
                   https://epaygh.com/api/v1/customers/<customer_id>
                </customer_id>
</td>
            </tr>
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Method
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
               GET
                </td>
            </tr>
        </tbody>
    </table>
</div>
<h4>Headers</h4>
<div class="overflow-y-auto scrollbar-w-2 scrollbar-track-grey-lighter scrollbar-thumb-rounded scrollbar-thumb-grey scrolling-touch">
    <table class="w-full text-left table-collapse">
        <tbody class="align-baseline">
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Content-Type
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">        
                    application/json
                </td>
            </tr>
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Accept
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                application/json
                </td>
            </tr>
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Authorization
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">        
                    Bearer {access_token}
                </td>
            </tr>
        </tbody>
    </table>
</div>
<h4>Example Response Body</h4>
<pre><code>{
    "success": true,
    "message": "Transactions retrieved Successfully",
    "data": {
        "customer": {
            "id": 6,
            "name": "Someone",
            "email": "someone@gmail.com",
            "telephone": "0548797248",
            "created_at": "2018-09-08 14:44:19",
            "updated_at": "2018-09-08 14:44:19"
        },
        "transactions": [
            {
                "id": 140,
                "reference": "EP-j9fxp1hMJv9PiAx3",
                "payment_method": "momo",
                "payment_no": "0548797248",
                "amount": "22",
                "status": "pending",
                "created_at": "2018-10-31 15:59:44",
                "updated_at": "2018-10-31 15:59:44",
                "type": "payments",
                "description": "loan repayment"
            },
            {
                "id": 139,
                "reference": "EP-eqbgF8Nn0vPTC1lh",
                "payment_method": "momo",
                "payment_no": "0548797248",
                "amount": "1",
                "status": "success",
                "created_at": "2018-10-29 22:32:08",
                "updated_at": "2018-10-29 22:32:08",
                "type": "payments",
                "description": "samples"
            },
            {
                "id": 127,
                "reference": "EP-CAHjxoVAvbCmD54W",
                "payment_method": "momo",
                "payment_no": "0548797248",
                "amount": "1",
                "status": "failed",
                "created_at": "2018-10-13 23:12:57",
                "updated_at": "2018-10-13 23:12:57",
                "type": "payments",
                "description": "optional"
            },
            {
                "id": 115,
                "reference": "EP-03xROG5LUtYa2UE5",
                "payment_method": "card",
                "payment_no": "card",
                "amount": "5",
                "status": "pending",
                "created_at": "2018-10-13 12:19:55",
                "updated_at": "2018-10-13 12:19:55",
                "type": "payments",
                "description": "Payment of Service"
            },
                   {
                "id": 111,
                "reference": "EP-bOroxrb0vac2EMT4",
                "payment_method": "momo",
                "payment_no": "0548797248",
                "amount": "1",
                "status": "failed",
                "created_at": "2018-10-11 14:53:55",
                "updated_at": "2018-10-11 14:54:28",
                "type": "payments",
                "description": "sams"
            }
        ]
    }
}</code></pre>
<hr />
<h3>Transactions</h3>
<h4>Retrieve a Transaction</h4>
<p>The chief premise of this endpoint is to allow you to retrieve the details of a transaction and can be as well used to check the status of a transaction. <strong>Kindly take note that this is a protected resource</strong>.</p>
<h4>Endpoint Details</h4>
<div class="overflow-y-auto scrollbar-w-2 scrollbar-track-grey-lighter scrollbar-thumb-rounded scrollbar-thumb-grey scrolling-touch">
    <table class="w-full text-left table-collapse">
        <tbody class="align-baseline">
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Endpoint Url
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">             
                    https://epaygh.com/api/v1/transactions/<transaction_reference>
                </transaction_reference>
</td>
            </tr>
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Method
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
               GET
                </td>
            </tr>
        </tbody>
    </table>
</div>
<h4>Headers</h4>
<div class="overflow-y-auto scrollbar-w-2 scrollbar-track-grey-lighter scrollbar-thumb-rounded scrollbar-thumb-grey scrolling-touch">
    <table class="w-full text-left table-collapse">
        <tbody class="align-baseline">
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Content-Type
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">        
                    application/json
                </td>
            </tr>
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Accept
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                application/json
                </td>
            </tr>
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Authorization
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">        
                    Bearer {access_token}
                </td>
            </tr>
        </tbody>
    </table>
</div>
<h4>Example Response Body</h4>
<pre><code>{
    "success": true,
    "message": "Transactions retrieved Successfully",
    "transaction": {
        "id": 184,
        "reference": "EP-sbadhb23bb",
        "payment_method": "momo",
        "payment_no": "054**********",
        "amount": "1",
        "customer_id": "37",
        "status": "pending",
        "created_at": "2019-01-23 19:57:30",
        "updated_at": "2019-01-23 19:57:30",
        "type": "payments",
        "description": "test payment"
    }
}</code></pre>
<h4>List all Transactions</h4>
<p>The chief premise of this endpoint is to allow you list all transactions under your Epay Account. Kindly take note that this is a protected resource.</p>
<blockquote>
<p>The response returns a paginated list of transactions</p>
</blockquote>
<h4>Endpoint Details</h4>
<div class="overflow-y-auto scrollbar-w-2 scrollbar-track-grey-lighter scrollbar-thumb-rounded scrollbar-thumb-grey scrolling-touch">
    <table class="w-full text-left table-collapse">
        <tbody class="align-baseline">
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Endpoint Url
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">             
                    https://epaygh.com/api/v1/transactions
                </td>
            </tr>
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Method
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
               GET
                </td>
            </tr>
        </tbody>
    </table>
</div>
<h4>Headers</h4>
<div class="overflow-y-auto scrollbar-w-2 scrollbar-track-grey-lighter scrollbar-thumb-rounded scrollbar-thumb-grey scrolling-touch">
    <table class="w-full text-left table-collapse">
        <tbody class="align-baseline">
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Content-Type
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">        
                    application/json
                </td>
            </tr>
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Authorization
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">        
                    Bearer {access_token}
                </td>
            </tr>
        </tbody>
    </table>
</div><?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.documentation', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>