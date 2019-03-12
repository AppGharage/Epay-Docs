---
extends: _layouts.documentation
section: documentation_content
---

## Quick Setup 

Accepting payments with Epay is simple. Using payment pages, you can integrate Epay in minutes. 

Create your first payment page, embed in your website or application and charge a customer. 

-----
Follow these simple steps to successfully collect payments from your customers:
1. Create a [payment page](/docs/payment-pages/)
2. Copy the code below and paste in your site

    ```html
    <a class="epay_inline"
        data-payment_page="https://epaygh.com/pay/st-event-demo-app"
        data-pay_button_text="Pay Now">
    </a>
            
    <script src="https://epaygh.com/js/inline.js"></script>
    ```
    > This will generate a button where the script is placed on your website. 

3. Change the default value of `data-payment_page` to your payment page url
4. Collect your payments
5. Receive Payment Notifications and updates via [your webhook url](https://epaygh.com/settings)

**Remember to replace parameters with your own parameters.**

-------

Next, learn more about [How to get Started with Epay](/docs/getting-started/).


