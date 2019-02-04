---
extends: _layouts.documentation
section: documentation_content
---
#### [API Overview](/docs/api-reference)

## Charge a Customer
The chief premise of this endpoint is to provide a single endpoint that allows you to charge your customers mobile money wallet or credit card. Charges are identified by a unique, random ID called **reference**. 

All payments are instantly deposited into your Epay wallet. The amount taken from your customer is deposited with **zero percent (0%) charge**. This is a protected route hence you need to pass your access token through the Authorization header, that is, **Authorization : Bearer {access_token}**

> We process all transactions **asynchronously**. Hence you would have to **set your callback/webhook url** on your dashboard under the settings section to receive the status of every posted transaction or **call out the retrieve a transaction endpoint to** verify status of the transaction.

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
                    https://epaygh.com/api/v1/charge
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

<h3>Charging a Mobile Money Wallet</h3><br>
 
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
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-grey-darkest whitespace-no-wrap">
                mobile_wallet_number
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
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-grey-darkest whitespace-no-wrap">
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
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-grey-darkest whitespace-no-wrap">
                mobile_wallet_number
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
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-grey-darkest whitespace-no-wrap">
                voucher
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
</div>
<br>

```

//Example Request Body ( Mobile money)

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
}


//Example Success Response (Mobile money)

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
}
```

<div class="overflow-y-auto scrollbar-w-2 scrollbar-track-grey-lighter scrollbar-thumb-rounded scrollbar-thumb-grey scrolling-touch">

<br><hr>

<h3>Charging a Credit Card (returns a url to redirect to)</h3><br>

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
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-grey-darkest whitespace-no-wrap">
                payment_method
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
</table>
</div>

```
//Example Request Body (Credit Card)

{	
	"reference" : "EP-HBSABSDKKAS",
	"amount" : 1.00,
	"payment_method" : "card",
	"customer_name": "Akosua Manu",
	"customer_email" : "akosuamanu@gmail.com",
	"customer_telephone" : "054**********",
	"payment_description": "A sample payment"
}

//Example Success Response (Credit Card)

{
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
}
```

----------
Next, learn more about how to [Know your customers on Epay](/docs/api-reference-customer).