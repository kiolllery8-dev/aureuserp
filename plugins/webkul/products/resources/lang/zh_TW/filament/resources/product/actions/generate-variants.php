<?php

return [
    'label'        => 'Generate 規格',
    'notification' => [
        'empty' => [
            'title' => 'No attributes found',
            'body'  => 'Please add attributes to generate variants.',
        ],

        'success' => [
            'title' => '規格 generated成功',
            'body'  => 'All product variants have been generated.',
        ],

        'error' => [
            'title' => 'Error generating variants',
            'body'  => 'An error occurred while generating product variants.',
        ],
    ],
];
