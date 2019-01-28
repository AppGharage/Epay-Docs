---
extends: _layouts.documentation
section: documentation_content
---

### Libraries / Plugins

## WordPress / WooCommerce plugin

For WordPress websites which uses the WooCommerce e-commerce plugin, Epay offers an easy to use plugin that integrates the Epay payment option into your website. 

* Ensure that the WooCommerce plug-in is already installed and properly set-up on your website.
* In your WordPress admin dashboard, search for the 'WooCommerce Epay Payment Gateway' and install the plugin.
* Once installed, activate the plugin.
* Still in the WordPress admin dashboard, go to the **WooCommerce plugin settings**, and then to the Checkout tab.
* If the plugin is correctly installed, there should be an **Epay payment** option among the payment gateways listed at the bottom of the page. However, it would not be enabled.
* Select the **Epay gateway**, and you would be taken to the plugin configuration page.
* Here, first enable the plugin, and then add the API key generated from the dashboard. Please note payments would not work without this API key. Once done, hit save.
* Epay should now be listed as an enabled payment gateway, and your customers would see the option to pay using Epay at checkout pages on your site. Clicking that option should redirect them to the payment page.
* Once payment is done on the payment page, you would probably want users to be directed to your site. The payment page automatically redirects the user to the URL supplied as the success_url so you might want to use your site URL for that.