---
extends: _layouts.documentation
section: documentation_content
---

## Transfers

This API is for making payouts or disbursements to any mobile money wallet in Ghana irrespective of the Network. Kindly take note that this is a protected resource.

> The response returns a success message with details of the payment

### Endpoint Details
<div class="overflow-y-auto scrollbar-w-2 scrollbar-track-grey-lighter scrollbar-thumb-rounded scrollbar-thumb-grey scrolling-touch">
    <table class="w-full text-left table-collapse">
        <tbody class="align-baseline">
            <tr>
                <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Endpoint Url
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">        
                    https://epaygh.com/api/v1/payout
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
    <tbody>
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
                This is the reference given to the <br> transaction.
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
                This is the amount to be paidout.
            </td>
        </tr>
        <tr>
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-grey-darkest whitespace-no-wrap">
                payout_method
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                String
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-purple-dark whitespace-no-wrap">
               Yes
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                This is the method you are paying out.
            </td>
        </tr>
        <tr>
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-grey-darkest whitespace-no-wrap">
                mobile_wallet_network
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                String
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-purple-dark whitespace-no-wrap">
               Yes
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                This is the network of your <br> mobile _wallet_number.
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
               Yes
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                This is the mobile number of your <br> mobile _wallet_network.
            </td>
        </tr>
        <tr>
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-grey-darkest whitespace-no-wrap">
                payout_description
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                String
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-purple-dark whitespace-no-wrap">
               Yes
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                This is a brief description of <br> your payout.
            </td>
        </tr>
</div>

**Example JSON format**

```
//Example request body

{
	"reference": "abcdett",
	"amount" : 1.00,
	"payment-method" : "momo",
	"mobile_wallet_network" : mtn,
	"mobile_wallet_number" : ********,
	"payout_description" : "test"
}

//Example success response
{
	"success": "true",
	"amount" : "A payout was successfully sent to the mobile wallet ******,
	"data" : {
        "transaction":{
            "reference": "abcdett",
            "payment-method" : "momo",
            "payout_description" : "test",
	        "amount" : 1,
            "mobile_wallet_network" : mtn,
            "mobile_wallet_number" : ********
        }

    }
}

 
