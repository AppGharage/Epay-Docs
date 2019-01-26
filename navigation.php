<?php

return [
    'Quick Setup' => ['root' => '/docs/quick-setup'],
    'Getting Started' => ['root' => '/docs/getting-started'],
    'Accept Payments' => [
        'root' => '/docs/payment',
        'children' => [
            'Payment Pages' => ['root' => '/docs/payment-pages'],
            'Integration' => ['root' => '/docs/payment-integrations']
        ],
    ],
    'Transfer / Disburse Payments' => ['root' => '/docs/site-variables'],
    'Webhooks' => ['root' => '/docs/helper-methods'],
    'Account Management' => ['root' => '/docs/pretty-urls'],
    'API Reference' => ['root' => '/docs/api-reference']
];
