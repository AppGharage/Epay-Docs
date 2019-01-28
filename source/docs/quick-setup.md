---
extends: _layouts.documentation
section: documentation_content
---

## Quick Setup 
Try the Epay API in minutes. Create your first integration, generate API access token, charge a customer and more by following the steps below.

In order to start using Epay’s APIs to receive and/or disburse payments, you would need to have an Epay Account. Head over to our [Signup page](https://epaygh.com/register) to create a new Epay account.

> Kindly note that your `email` and `telephone` will be verified before you get access to your account.

---

### 1. Create Integration
To be able to use our APIs you will first need to create an Integration. The integration you create gives you an **app_id** and **app_secret** to generate an API access token. 

To create an Integration;
- Head over to your Dashboard
- Under the `Integrations` section on your dashboard, click on the `New Integration`
- Fill and submit the form by providing a `Name` and `Description` for the application Epay will be integrated.
- Copy the `app_id` and `app_secret`

<br>

### 2. [Generate API Access Token](/docs/api-reference/#authentication)
Submit a `POST` request to `https://epaygh.com/v1/token` to obtain an access token. This access token grants you access to all protected resources. To get your access token you will need a **merchant_key, app_id** and **app_secret**. 

The generated access_token **expires in 3600 seconds (1hr)**.

**Example Request Body**
```
{	
	"merchant_key" : "AWDFEv7eTFrzCSIY",
	"app_id" : "5c654089bcd30",
	"app_secret": "ASDSDCGKj9IWtkM2hNIgPDHbvvEPb67X"
}
```

<br>

### 3. [Charge a Customer](/docs/api-reference/#charge)
With a single API endpoint you can charge your customers Mobile money wallets or Credit card. To charge a customer, submit a `POST` request to `https://epaygh.com/v1/charge`. 

The `Charge Endpoint` is a Protected Resource hence, you need to pass your access token through the Authorization header, that is, `Authorization : Bearer {access_token}`.

**Example Request Body**
```
//Momo Charge Request Body

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



//Credit Card Charge Request Body

{	
	"reference" : "EP-HBSABSDKKAS",
	"amount" : 1.00,
	"payment_method" : "card",
	"customer_name": "Akosua Manu",
	"customer_email" : "akosuamanu@gmail.com",
	"customer_telephone" : "054**********",
	"payment_description": "A sample payment"
}
```

<br>

### 4. [Check Transaction Status](/docs/api-reference/#retrieve-a-transaction-/-check-transaction-status)
We process all transactions `asynchronously`. Hence you would have to `set your callback/webhook url` on your dashboard under the settings section to receive the status of every posted transaction or `call out the retrieve a transaction endpoint to` verify status of the transaction. To check the transaction status with the [Retrieve Transaction Endpoint](/docs/api-reference/#retrieve-a-transaction-/-check-transaction-status), submit a **GET** request to `https://epaygh.com/api/ v1/transactions/{reference}` with the `reference` of the charge as a `query parameter`. 

The `Check Transaction Status Endpoint` is a Protected Resource hence, you need to pass your access token through the Authorization header, that is, `Authorization : Bearer {access_token}`.

**Example Webhook Notification**
```json
{
    "success": true,
    "transaction": {
        "reference": "EP-XSks6NGSvtd",
        "payment_method": "momo",
        "amount": "1",
        "status": "success",
        "description": "Payment for sample event",
        "customer": {
            "name": "sam",
            "email": "sam@gmail.com",
            "telephone": "054********"
        },
        "page": {
            "id": 73,
            "name": "Event Demo App",
            "description": "A demo payment page ",
            "slug": "st-event-demo-app"
        }
    }
}
```

<br>

### 5. Settlements
All payments are instantly deposited into your Epay wallet. You may at anytime choose to transfer the money from your Epay wallet to any `Mobile Money wallet` instantly or to a `Bank Account`.

To Transfer money out of your Epay wallet;
- Head to the `Transfers` section on your Dashboard
- Click on the `New Transfer` button located at the top right corner of your page .
- Fill and submit the form choosing your preferred withdrawal destination.


-------

Next, learn more about [How to get Started with Epay](/docs/getting-started/).


