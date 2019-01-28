<?php

return [
    'Quick Setup' => ['root' => '/docs/quick-setup'],
    'Getting Started' => ['root' => '/docs/getting-started'],
    'Accept Payments' => [
        'root' => '/docs/payment',
        'children' => [
            'Payment Pages' => ['root' => '/docs/payment-pages'],
            'Integrating APIs' => ['root' => '/docs/payment-integrations']
        ],
    ],
    'Transfer / Disburse Payments' => ['root' => '/docs/transfers'],
    'Webhooks' => ['root' => '/docs/webhooks'],
    'Libraries / Plugins' => ['root' => '/docs/libraries'],
    'Account Management' => ['root' => '/docs/account-management'],
    'API Reference' => ['root' => '/docs/api-reference']
];
