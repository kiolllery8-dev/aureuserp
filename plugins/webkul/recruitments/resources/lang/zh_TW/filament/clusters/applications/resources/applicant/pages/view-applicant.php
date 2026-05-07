<?php

return [
    'header-actions' => [
        'delete' => [
            'notification' => [
                'title' => 'Applicant deleted',
                'body'  => 'The applicant has been deleted成功.',
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
                'title' => 'Applicant state updated',
                'body'  => 'The applicant state has been updated成功.',
            ],
        ],
    ],

    'mail' => [
        'application-refused' => [
            'subject' => 'Your Job Application: :application',
        ],
    ],
];
