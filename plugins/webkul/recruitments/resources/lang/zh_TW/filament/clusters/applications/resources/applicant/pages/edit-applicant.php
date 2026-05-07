<?php

return [
    'create-employee' => 'Create Employee',
    'goto-employee'   => 'Go to Employee',

    'notification' => [
        'title' => 'Applicant updated',
        'body'  => 'The applicant has been updated成功.',
    ],

    'header-actions' => [
        'delete' => [
            'notification' => [
                'title' => 'Applicant deleted',
                'body'  => 'The applicant has been deleted成功.',
            ],
        ],
        'force-delete' => [
            'notification' => [
                'title' => 'Applicant deleted',
                'body'  => 'The applicant has been force deleted成功.',
            ],
        ],

        'refuse' => [
            'title'        => 'Refuse Reason',
            'notification' => [
                'title' => 'Applicant refused',
                'body'  => 'The applicant has been refused成功.',
            ],
        ],

        'reopen' => [
            'title'        => 'Reopen Applicant',
            'notification' => [
                'title' => 'Applicant reopened',
                'body'  => 'The applicant has been reopened成功.',
            ],
        ],

        'state' => [
            'notification' => [
                'title' => 'Applicant state updated',
                'body'  => 'The applicant state has been updated成功.',
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
            'subject' => 'You have been assigned to the Applicant :applicant.',
        ],
    ],
];
