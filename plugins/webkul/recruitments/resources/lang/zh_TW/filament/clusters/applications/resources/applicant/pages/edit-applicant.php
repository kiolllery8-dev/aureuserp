<?php

return [
    'create-employee' => '新增Employee',
    'goto-employee'   => '前往員工',

    'notification' => [
        'title' => 'Applicant已更新',
        'body'  => 'The applicant has been已更新成功.',
    ],

    'header-actions' => [
        'delete' => [
            'notification' => [
                'title' => '應徵者已刪除',
                'body'  => 'The applicant has been已刪除成功.',
            ],
        ],
        'force-delete' => [
            'notification' => [
                'title' => '應徵者已刪除',
                'body'  => 'The applicant has been force已刪除成功.',
            ],
        ],

        'refuse' => [
            'title'        => '拒絕原因',
            'notification' => [
                'title' => '應徵者已拒絕',
                'body'  => 'The applicant has been refused成功.',
            ],
        ],

        'reopen' => [
            'title'        => '重啟應徵者',
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

        'application-confirm' => [
            'subject' => '您的應徵：:job_position',
        ],
        'interviewer-assigned' => [
            'subject' => '您已被指派處理應徵者 :applicant。',
        ],
    ],
];
