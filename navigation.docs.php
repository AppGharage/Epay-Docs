<?php

return [
    'Installation' => [
        'root' => '/docs/installation',

        'children' => [
            'Upgrading' => [
                'root' => '/docs/upgrading',
            ],
        ],
    ],

    'Building & Previewing' => ['root' => '/docs/building-and-previewing'],
    'Compiling Assets' => ['root' => '/docs/compiling-assets'],

    'Creating your Site\'s Content' => [
        'root' => '/docs/content',

        'children' => [
            'Blade Templates & Partials' => [
                'root' => '/docs/content-blade',
            ],

            'Markdown' => [
                'root' => '/docs/content-markdown',
            ],

            'Other File Types' => [
                'root' => '/docs/content-other-file-types',
            ],
        ],
    ],

    'Site Variables' => ['root' => '/docs/site-variables'],
    'Helper Methods' => ['root' => '/docs/helper-methods'],
    'Page Metadata' => ['root' => '/docs/page-metadata'],

    'Collections' => [
        'root' => '/docs/collections',

        'children' => [
            'Extending Parent Templates' => [
                'root' => '/docs/collections-extending-parent-templates',
            ],

            'Paths' => [
                'root' => '/docs/collections-paths',
            ],

            'Sorting' => [
                'root' => '/docs/collections-sorting',
            ],

            'Pagination' => [
                'root' => '/docs/collections-pagination',
            ],

            'Variables and Functions' => [
                'root' => '/docs/collections-variables-and-functions',
            ],

            'Remote Collections' => [
                'root' => '/docs/collections-remote-collections',
            ],
        ],
    ],

    'Pretty Urls' => ['root' => '/docs/pretty-urls'],
    'Custom 404 Page' => ['root' => '/docs/custom-404-page'],
    'Event Listeners' => ['root' => '/docs/event-listeners'],
    'Deploying Your Site' => ['root' => '/docs/deploying-your-site'],
];
