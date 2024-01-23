<?php

return [
    'meta'      => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => " ", // set false to total remove
            //'description'  => 'Plant Automation Technology, the Automation Industry B2B portal provides Industrial manufacturers & suppliers, buyers list, latest updates, new profile listings and trends in the industry', // set false to total remove
            'separator'    => '',
            'keywords'     => [],
            'canonical'    => false, // Set null for using Url::current(), set false to total remove
        ],

        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
        ],
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => '', // set false to total remove
            'description' => '', // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
          //'card'        => 'summary',
          //'site'        => '@LuizVinicius73',
        ],
    ],

    'json-ld' => [
        'default' => [
            'type' => 'WebPage',
            'id' => '',
            'title' => 'PFA',
            'description' => '',
            'url' => '',
            'images' => [],
        ],
    ],
];
