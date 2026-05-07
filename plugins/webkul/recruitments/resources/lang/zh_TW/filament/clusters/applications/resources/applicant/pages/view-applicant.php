<?php

return [
    'header-actions' => [
        'delete' => [
            'notification' => [
                'title' => 'Applicant已刪除',
                'body'  => 'The applicant has been已刪除成功.',
            ],
        ],

        'refuse' => [
            'notification' => [
                'title' => 'Applicant refused',
                'body'  => 'The applicant has been refused成功.',
            ],
        ],

        'reopen' => [
            'notification' => [
                'title' => 'Applicant reopened',
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
            'subject' => 'Your Job Application: :application',
        ],
    ],
];
