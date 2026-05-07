<?php

return [
    'title' => '管理Contacts',

    'form' => [
        'sections' => [
            'contacts' => [
                'title' => '聯絡人',

                'fields' => [
                    'email' => '電子郵件',
                    'phone' => '電話',
                ],
            ],

            'social-links' => [
                'title' => '社群連結',

                'fields' => [
                    'twitter'   => '推特 Twitter',
                    'facebook'  => '臉書 Facebook',
                    'instagram' => 'Instagram 平台',
                    'linkedin'  => '領英 LinkedIn',
                    'pinterest' => 'Pinterest 平台',
                    'tiktok'    => '抖音 TikTok',
                    'github'    => 'GitHub 平台',
                    'slack'     => 'Slack 平台',
                    'whatsapp'  => 'WhatsApp 平台',
                    'youtube'   => 'YouTube 平台',
                ],
            ],
        ],
    ],
];
