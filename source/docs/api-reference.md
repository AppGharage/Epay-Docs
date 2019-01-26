---
extends: _layouts.documentation
section: documentation_content
---

## API Reference
Here you’ll find detailed information about our APIs – what they’re for, how to use them and when to use them.

In order to start using Epay’s APIs to receive and/or disburse payments, you would need to have an Epay Account and 
also create an Integration. Head over to our [Signup page](https://epaygh.com/register) to create a new Epay account.

> Kindly note that your `email` and `telephone` will be verified before you get access to your account.

### Overview
The Epay API is organized around REST. Our API has predictable resource-oriented URLs, accepts JSON-encoded request bodies, returns JSON-encoded responses, and uses standard HTTP response codes, authentication and verbs.

Once registered, log into your account and head over to your settings sections on your dashboard to generate a Merchant Key. This Key should be kept confidential, as it would grant to access to all protected API Resources as well as direct incoming funds to your Epay Wallet.

To help you get oriented with Epay’s API and what it can help you do, let’s start by defining some basics:
- The endpoints listed are to be applied to the base Url https://epaygh.com/api
- All payments received are instantly deposited into your Epay wallet
- All API endpoints except Authorization requires authentication
- An Integration must be created on your Epay account to start using the API
- All API requests must be made over HTTPS.
- All Bulk fetches via a “list” endpoint are Paginated
- All API endpoints are versioned
- All Charge API allow payments from only our payment methods

<div class="overflow-y-auto scrollbar-w-2 scrollbar-track-grey-lighter scrollbar-thumb-rounded scrollbar-thumb-grey scrolling-touch">
    <table class="w-full text-left table-collapse">
    <thead>
        <tr>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">First</th>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Last</th>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Last</th>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Handle</th>
        </tr>
    </thead>
    <tbody class="align-baseline">
        <tr>
        <td class="p-2 border-t border-grey-light font-mono text-xs text-purple-dark whitespace-no-wrap">Mark</td>
        <td class="p-2 border-t border-grey-light font-mono text-xs text-purple-dark whitespace-no-wrap">border-collapse: collapse;</td>
        <td class="p-2 border-t border-grey-light font-mono text-xs text-purple-dark whitespace-no-wrap">@mdo</td>
        <td class="p-2 border-t border-grey-light font-mono text-xs text-purple-dark whitespace-no-wrap">Otto</td>
        </tr>
        <tr>
        <td class="p-2 border-t border-grey-light font-mono text-xs text-purple-dark whitespace-no-wrap">Jacob</td>
        <td class="p-2 border-t border-grey-light font-mono text-xs text-purple-dark whitespace-no-wrap">border-collapse: collapse;</td>
        <td class="p-2 border-t border-grey-light font-mono text-xs text-purple-dark whitespace-no-wrap">@fat</td>
        <td class="p-2 border-t border-grey-light font-mono text-xs text-purple-dark whitespace-no-wrap">Otto</td>
        </tr>
        <tr>
        <td class="p-2 border-t border-grey-light font-mono text-xs text-purple-dark whitespace-no-wrap">Larry</td>
        <td class="p-2 border-t border-grey-light font-mono text-xs text-purple-dark whitespace-no-wrap">border-collapse: collapse;</td>
        <td class="p-2 border-t border-grey-light font-mono text-xs text-purple-dark whitespace-no-wrap">border-collapse: collapse;</td>
        <td class="p-2 border-t border-grey-light font-mono text-xs text-purple-dark whitespace-no-wrap">Otto</td>
        </tr>
    </tbody>
    </table>
</div>


### Authentication

### Charge 

### Customers

### Transactions