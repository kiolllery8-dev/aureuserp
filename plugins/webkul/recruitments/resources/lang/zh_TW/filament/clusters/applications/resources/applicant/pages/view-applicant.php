<?php

return [
    'header-actions' => [
        'delete' => [
            'notification' => [
                'title' => '應徵者已刪除',
                'body'  => 'The applicant has been已刪除成功.',
            ],
        ],

        'refuse' => [
            'notification' => [
                'title' => '應徵者已拒絕',
                'body'  => 'The applicant has been refused成功.',
            ],
        ],

        'reopen' => [
            'notification' => [
                'title' => '應徵者已重啟',
                'body'  => 'The applicant has been reopened成功.',
            ],
        ],

        'state' => [
            'notification' => [
                'title' => 'Applicant state已更新',
                'body'  => 'The applicant state has been已更新成功.',
            ],
        ],
    ],

    'mail' => [
        'application-refused' => [
            'subject' => '您的應徵：:application',
        ],
    ],
];
