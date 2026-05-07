<?php

return [
    'create-employee' => '新增Employee',
    'goto-employee'   => 'Go to 員工',

    'notification' => [
        'title' => 'Applicant已更新',
        'body'  => 'The applicant has been已更新成功.',
    ],

    'header-actions' => [
        'delete' => [
            'notification' => [
                'title' => 'Applicant已刪除',
                'body'  => 'The applicant has been已刪除成功.',
            ],
        ],
        'force-delete' => [
            'notification' => [
                'title' => 'Applicant已刪除',
                'body'  => 'The applicant has been force已刪除成功.',
            ],
        ],

        'refuse' => [
            'title'        => 'Refuse Reason',
            'notification' => [
                'title' => '應徵者 refused',
                'body'  => 'The applicant has been refused成功.',
            ],
        ],

        'reopen' => [
            'title'        => 'Reopen 應徵者',
            'notification' => [
                'title' => '應徵者 reopened',
                'body'  => 'The applicant has been reopened成功.',
            ],
        ],

        'state' => [
            'notification' => [
                'title' => '應徵者 state已更新',
                'body'  => 'The applicant state has been已更新成功.',
            ],
        ],
    ],

    'mail' => [
        'application-refused' => [
            'subject' => 'Your Job Application: :application',
        ],

        'application-confirm' => [
            'subject' => 'Your Job Application: :job_position',
        ],
        'interviewer-assigned' => [
            'subject' => 'You have been assigned to the 應徵者 :applicant.',
        ],
    ],
];
