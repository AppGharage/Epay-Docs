<?php

return [
    'Quick Setup' => ['root' => '/docs/quick-setup'],
    'Getting Started' => ['root' => '/docs/getting-started'],
    'Accept Payments' => [
        'root' => '/docs/payment',
        'children' => [
            'Payment Pages' => ['root' => '/docs/payment-pages'],
            'Embedded Payment Pages' => ['root' => '/docs/payment-page-embedded'],
            'Integrating APIs' => ['root' => '/docs/payment-integrations'],
            'Bank Deposit' => ['root' =>'/docs/bank-deposit'],
            'Supported Currencies' => ['root' =>'/docs/supported-currencies']     
        ],
    ],
    'Transfer / Disburse Payments' => ['root' => '/docs/transfers'],
    'Webhooks' => ['root' => '/docs/webhooks'],
    'Libraries / Plugins' => ['root' => '/docs/libraries'],
    'API Overview' => [
        'root' => '/docs/api-reference',
        'children' => [
            'API Authentication' => ['root' => '/docs/api-reference-authentication'],
            'Charge' => ['root' => '/docs/api-reference-charge'],
            'Customers' => ['root' => '/docs/api-reference-customer'],
            'Transactions' => ['root' => '/docs/api-reference-transaction']
        ],
    ]
];
