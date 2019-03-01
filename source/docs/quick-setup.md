---
extends: _layouts.documentation
section: documentation_content
---

## Quick Setup 

> Accepting payments with Epay is simple.

Follow these simple steps to successfully collect payments from your customers easily:
- Copy the code below and paste in your site

    ```html
    <a class="epay_inline"
        data-payment_page="https://epaygh.com/pay/st-event-demo-app"
        data-pay_button_text="Pay Now">
    </a>
            
    <script src="https://epaygh.com/js/inline.js"></script>
    ```
- Change the default value of `data-payment_page` to your payment page url
- Collect your payments
- Receive Payment Notifications and updates via [your webhook url](https://epaygh.com/settings)

> This will generate a button where the script is placed on your website. Remember to replace parameters with your own parameters.


-------

Next, learn more about [How to get Started with Epay](/docs/getting-started/).


