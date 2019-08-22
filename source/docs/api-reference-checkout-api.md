---
extends: _layouts.documentation
section: documentation_content
---

#### [API Overview](/docs/api-reference)

## Checkout-Api

The chief premise of this endpoint is to provide a single endpoint that allows you to charge your customers mobile money wallet or credit card. Charges are identified by a unique, random ID called **reference**.

All payments are instantly deposited into your Epay wallet. The amount taken from your customer is deposited with **zero percent (0%) charge**. This is a protected route hence you need to pass your access token through the Authorization header, that is, **Authorization : Bearer {access_token}**

> We process all transactions **asynchronously**. Hence you would have to **set your callback/webhook url** on your dashboard under the settings section to receive the status of every posted transaction or **call out the retrieve a transaction endpoint to** verify status of the transaction and redirect your user to **https://epaygh.com/checkout/{token}**.

<br>

**Enpoint Details**

<div class="overflow-y-auto scrollbar-w-2 scrollbar-track-grey-lighter scrollbar-thumb-rounded scrollbar-thumb-grey scrolling-touch">
    <table class="w-full text-left table-collapse">
        <tbody class="align-baseline">
            <tr>
                <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Endpoint Url
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">        
                    https://epaygh.com/api/v1/charge/token
                </td>
            </tr>
            <tr>
                <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Method
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                POST
                </td>
            </tr>
        </tbody>
    </table>
</div>

<br>

**Request Headers**

<div class="overflow-y-auto scrollbar-w-2 scrollbar-track-grey-lighter scrollbar-thumb-rounded scrollbar-thumb-grey scrolling-touch">
    <table class="w-full text-left table-collapse">
        <tbody class="align-baseline">
            <tr>
                <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Content-Type
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">        
                    application/json
                </td>
            </tr>
            <tr>
                <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Accept
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                application/json
                </td>
            </tr>
            <tr>
                <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Authorization
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">        
                    Bearer {access_token}
                </td>
            </tr>
        </tbody>
    </table>
</div>

<br>

**Request Body Parameters**

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
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-grey-darkest whitespace-no-wrap">
                reference
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
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-grey-darkest whitespace-no-wrap">
                amount
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                Float
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-purple-dark whitespace-no-wrap">
               Yes
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                The amount you wish to charge the customer.<br><br>
                <b>Amount must be of type float. <br> Eg; 1.00 or 50.00</b>
            </td>
        </tr>
        <tr>
         <tr>
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-grey-darkest whitespace-no-wrap">
                customer_name
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
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-grey-darkest whitespace-no-wrap">
                customer_email
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
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-grey-darkest whitespace-no-wrap">
                customer_telephone
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
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-grey-darkest whitespace-no-wrap">
                payment_description
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

<br><hr>

<h3>Charging a Wallet</h3>
<pre><code class="language-html">
//Example Request Body
{
"reference" : "EP-2JBH23JBBJBC",
"amount" : 1,
"customer_name": "Akosua Manu",
"customer_email" : "akosuamanu@gmail.com",
"customer_telephone" : "0541718326",
"payment_description": "A test payment"
}

//Example Success Response
{
"success": true,
"token": "SU7UI6FqRCY2eRdLqJ8tVxI4k6TmLDs5",
"message": "Charge created successfully"
}</code></pre>
<br>
