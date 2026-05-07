<?php

return [
    'title'                   => 'Profile',
    'heading'                 => 'Profile',
    'subheading'              => '管理your account settings and preferences.',
    'information_section'     => 'Profile Information',
    'information_description' => "Update your account's profile information and email address.",

    'notification' => [
        'success' => [
            'title' => 'Profile Updated',
            'body'  => 'Your profile has been updated成功.',
        ],

        'error' => [
            'title' => 'Profile Update Failed',
            'body'  => 'There was an error updating your profile.',
        ],

        'validation-error' => [
            'title' => 'Validation Error',
        ],
    ],

    'actions' => [
        'save' => 'Save Changes',
    ],

    'fields' => [
        'avatar' => 'Profile Photo',
        'name'   => '名稱',
        'email'  => '電子郵件',
    ],

    'password' => [
        'section'     => 'Update Password',
        'description' => 'Ensure your account is using a long, random password to stay secure.',
        'current'     => 'Current Password',
        'new'         => '新增Password',
        'confirm'     => 'Confirm Password',
        'helper'      => 'Must be at least 8 characters long.',

        'errors' => [
            'current-required'  => 'Current password為必填.',
            'current-incorrect' => 'The current password is incorrect. Please try again.',
            'same-as-current'   => 'The new password must be different from your current password.',
        ],

        'current-helper' => 'Enter your current password to verify your identity.',

        'notification' => [
            'success' => [
                'title' => 'Password Updated',
                'body'  => 'Your password has been updated成功.',
            ],

            'error' => [
                'title' => 'Password Update Failed',
                'body'  => 'There was an error updating your password.',
            ],
        ],
    ],
];
