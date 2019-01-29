---
extends: _layouts.documentation
section: documentation_content
---

## Webhooks 

Use webhooks to get notified about payment events that happen in your Epay account.Epay serves as a webhook-driven checkout-as-a-service. With our webhook driven platform, you get notified via your webhook URL or endpoint whenever a new payment comes through in real time and you only need to worry about how to respond when a payment is successful or not.

**What is a Webhook**?

    A WebHook is an HTTP callback: an HTTP POST that occurs when something 
    happens; a simple event-notification via HTTP POST. A web application 
    implementing WebHooks will POST a message to a URL when certain things happen.

Epay sends webhooks events that notify your application any time a payment event happens in your account. This is very useful for events - like getting paid via mobile money or USSD where the transaction is completed outside your application - Recurring billing where an API call is not needed for subsequent billings.

In Epay you can setup webhooks that would let us notify you anytime events.

** Use cases of Webhooks **

You might use webhooks based on these sample actions you want to perform.

* Update a customer's membership record in your database when a subscription payment succeeds
* Email a customer with an event ticket or digital product when payment succeeds
* Email a customer when a payment fails
* Record payment history in your database

Before you can recieve webhook notifications, you need to register a webhook url under your **settings** navigation's tab. When an event such as a successful payment or a failed payment occurs, you are notified via your webhook URL.

** Using Webhooks as an integration **      

Webhooks can be used for all kinds of payment methods, card, account, USSD, and Ghana Mobile money. Integrating Epay into your app or website can begin as far as you have an Account, requiring only three steps;

* **Configure your Webhook** to receive webhook notifications through the specified endpoint
* **Connect your payment page** so you can take payments from your customers directly into your Epay wallet
* **Receive and Handle Webhook Notifications** to confirm payment transactions and fulfill purchases        


**Configure your webhook**

Webhooks are configured in the Dashboad's Settings Navigation section. Add your Webhook endpoint/URL for receiving webhooks.You can enter any URL as the endpoint or destination for recieving notifications. However, this should be a dedicated page on your server that is setup to receive webhook notifications. Example Url is: https://pay.epay.com              


**Connect your payment page**           

You can simply connect your payment page to your application or website by hiding the link of the payment page behind a pay button so your customers get redirected to the payment page when they click on the pay button.

```
<a href="https://epaygh.com/pay/st-event-demo-app" class="btn btn-primary">Pay</a>
```
> You may also choose to use an iframe to load the payment page when a user clicks on the pay button.

**Recieving a Webhook Notification

Creating a webhook endpoint on your server is not different from creating any page on your website. With PHP, you might create a new **.php** file on your server as well as in any other language; with a framework like Laravel, you would add a new route with the desired URL. Webhook Data is sent as JSON in a post Request body. The full notification details are included and can be used directly after, parsing the JSON.

> If you are using Rails, Django, Laravel or another web Framework, your site might automatically check that every post request contains a CSRF token. This is an important security feature. However, this security measure might also prevent your site from processing legitimate webhooks. You will need to exempt the webhooks route from CSRF protection.

**Sample Webhook Notification**

``` JSON
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

> Tip
Always return a 200 status code from the webhook endpoint as shown below

**Handling a Webhook Notification**

Below is a sample code tro allow you handle a webhook notification written in 🇵🇭P

```
<?php

//Retrieve the request's body and parse it as JSON
$request = @file_get_contents('php://input');
$request_body = json_decode($request); 

//Do something with $request_body with example notification body shown above

//Respond with 200
http_response_code(200); //PHP 5.4 or greater
```



