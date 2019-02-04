---
extends: _layouts.documentation
section: documentation_content
---
#### [API Overview](/docs/api-reference)

## Customers
The chief premise of this endpoint is to allow you list all customers created under your Epay Account. Kindly take note that this is a protected resource.

> The response returns a paginated list of customers

### Endpoint Details
<div class="overflow-y-auto scrollbar-w-2 scrollbar-track-grey-lighter scrollbar-thumb-rounded scrollbar-thumb-grey scrolling-touch">
    <table class="w-full text-left table-collapse">
        <tbody class="align-baseline">
            <tr>
                <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Endpoint Url
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">        
                    https://epaygh.com/api/v1/customers
                </td>
            </tr>
            <tr>
                <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Method
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                GET
                </td>
            </tr>
        </tbody>
    </table>
</div>

### Request Headers
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

```
//Example Response

{
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
}
```

<br>

### Create New Customer
The chief premise of this endpoint is to allow you to create a customer under your Epay Account. 

> Kindly take note that this is a protected resource.

<br>

**Endpoint Details**
<div class="overflow-y-auto scrollbar-w-2 scrollbar-track-grey-lighter scrollbar-thumb-rounded scrollbar-thumb-grey scrolling-touch">
    <table class="w-full text-left table-collapse">
        <tbody class="align-baseline">
            <tr>
                <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Endpoint Url
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">        
                    https://epaygh.com/api/v1/customers
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
    <tbody>
        <tr>
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-grey-darkest whitespace-no-wrap">
                name
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
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-grey-darkest whitespace-no-wrap">
               email
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
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-grey-darkest whitespace-no-wrap">
                telephone
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
</div>

<br>

#### 
```
//Example Request Body

{	
	"name" : "My Name",
	"email" : "myname@gmail.com",
	"telephone": "024************"
}


//Example Success Response

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
}
```

<br>

### Retrieve Customer
The chief premise of this endpoint is to allow you to retrieve a single customer data as well as all transactions of the customer. 

> Kindly take note that this is a protected resource.

<br>

**Endpoint Details**
<div class="overflow-y-auto scrollbar-w-2 scrollbar-track-grey-lighter scrollbar-thumb-rounded scrollbar-thumb-grey scrolling-touch">
    <table class="w-full text-left table-collapse">
        <tbody class="align-baseline">
            <tr>
                <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Endpoint Url
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">        
                   https://epaygh.com/api/v1/customers/{customer_id}
                </td>
            </tr>
            <tr>
                <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Method
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
               GET
                </td>
            </tr>
        </tbody>
    </table>
</div>


**Headers**
<div class="overflow-y-auto scrollbar-w-2 scrollbar-track-grey-lighter scrollbar-thumb-rounded scrollbar-thumb-grey scrolling-touch">
    <table class="w-full text-left table-collapse">
        <tbody class="align-baseline">
            <tr>
                <td class="p-2 border-t border-grey-light font-mono bg-grey-lighter text-sm text-grey-darkest whitespace-no-wrap">
                   Content-Type
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">        
                    application/json
                </td>
            </tr>
            <tr>
                <td class="p-2 border-t border-grey-light font-mono bg-grey-lighter text-sm text-grey-darkest whitespace-no-wrap">
                   Accept
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                application/json
                </td>
            </tr>
            <tr>
                <td class="p-2 border-t border-grey-light font-mono bg-grey-lighter text-sm text-grey-darkest whitespace-no-wrap">
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

```
//Example Response Body

{
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
}
```
<br>

----------

