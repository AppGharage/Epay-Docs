---
extends: _layouts.documentation
section: documentation_content
---

#### [Accept Payments](/docs/payments)
## Embedded Payment Pages

To use Epay Embedded Payment pages you need a payment page (if you don't have a payment page created you should create one), 
and follow the sample snippet below to add it to your site or web application.

Follow this steps to successfully collect payments from your customers easily:
- Copy the code below and paste on your site

    ```html
    <a class="epay_inline"
        data-payment_page="https://epaygh.com/pay/st-event-demo-app"
        data-pay_button_text="Pay Now">
    </a>
            
    <script src="https://epaygh.com/js/inline.js"></script>
    ```
- Change the default value of payment page to your payment page
- Collect your payments

> This will generate a button where the script is placed on your website. Remember to replace parameters with your own parameters.

### How it works
When the button is clicked, our secure payment modal will be popped up for your user to enter his/her details followed by payment details. 

-------

Next, learn about [Integrating APIs](/docs/payment-integrations).
