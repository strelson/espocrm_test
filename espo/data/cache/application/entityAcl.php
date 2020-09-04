<?php
return (object) [
    'AuthLogRecord' => (object) [
        'fields' => (object) [
            'forbidden' => [
                
            ],
            'internal' => [
                
            ],
            'onlyAdmin' => [
                
            ],
            'readOnly' => [
                0 => 'username',
                1 => 'portal',
                2 => 'user',
                3 => 'authToken',
                4 => 'ipAddress',
                5 => 'isDenied',
                6 => 'denialReason',
                7 => 'requestUrl',
                8 => 'requestMethod'
            ],
            'nonAdminReadOnly' => [
                
            ]
        ],
        'attributes' => (object) [
            'forbidden' => [
                
            ],
            'internal' => [
                
            ],
            'onlyAdmin' => [
                
            ],
            'readOnly' => [
                0 => 'username',
                1 => 'portalId',
                2 => 'portalName',
                3 => 'userId',
                4 => 'userName',
                5 => 'authTokenId',
                6 => 'authTokenName',
                7 => 'ipAddress',
                8 => 'isDenied',
                9 => 'denialReason',
                10 => 'requestUrl',
                11 => 'requestMethod'
            ],
            'nonAdminReadOnly' => [
                
            ]
        ],
        'links' => (object) [
            'forbidden' => [
                
            ],
            'internal' => [
                
            ],
            'onlyAdmin' => [
                
            ],
            'readOnly' => [
                
            ],
            'nonAdminReadOnly' => [
                
            ]
        ]
    ],
    'AuthToken' => (object) [
        'fields' => (object) [
            'forbidden' => [
                
            ],
            'internal' => [
                0 => 'token',
                1 => 'hash',
                2 => 'secret'
            ],
            'onlyAdmin' => [
                
            ],
            'readOnly' => [
                0 => 'token',
                1 => 'hash',
                2 => 'secret',
                3 => 'user',
                4 => 'portal',
                5 => 'ipAddress',
                6 => 'lastAccess',
                7 => 'createdAt',
                8 => 'modifiedAt'
            ],
            'nonAdminReadOnly' => [
                
            ]
        ],
        'attributes' => (object) [
            'forbidden' => [
                
            ],
            'internal' => [
                0 => 'token',
                1 => 'hash',
                2 => 'secret'
            ],
            'onlyAdmin' => [
                
            ],
            'readOnly' => [
                0 => 'token',
                1 => 'hash',
                2 => 'secret',
                3 => 'userId',
                4 => 'userName',
                5 => 'portalId',
                6 => 'portalName',
                7 => 'ipAddress',
                8 => 'lastAccess',
                9 => 'createdAt',
                10 => 'modifiedAt'
            ],
            'nonAdminReadOnly' => [
                
            ]
        ],
        'links' => (object) [
            'forbidden' => [
                
            ],
            'internal' => [
                
            ],
            'onlyAdmin' => [
                
            ],
            'readOnly' => [
                
            ],
            'nonAdminReadOnly' => [
                
            ]
        ]
    ],
    'Email' => (object) [
        'fields' => (object) [
            'forbidden' => [
                
            ],
            'internal' => [
                
            ],
            'onlyAdmin' => [
                
            ],
            'readOnly' => [
                0 => 'users'
            ],
            'nonAdminReadOnly' => [
                
            ]
        ],
        'attributes' => (object) [
            'forbidden' => [
                
            ],
            'internal' => [
                
            ],
            'onlyAdmin' => [
                
            ],
            'readOnly' => [
                0 => 'usersIds',
                1 => 'usersNames'
            ],
            'nonAdminReadOnly' => [
                
            ]
        ],
        'links' => (object) [
            'forbidden' => [
                
            ],
            'internal' => [
                
            ],
            'onlyAdmin' => [
                0 => 'users'
            ],
            'readOnly' => [
                
            ],
            'nonAdminReadOnly' => [
                
            ]
        ]
    ],
    'EmailAccount' => (object) [
        'fields' => (object) [
            'forbidden' => [
                
            ],
            'internal' => [
                0 => 'password',
                1 => 'smtpPassword',
                2 => 'imapHandler',
                3 => 'smtpHandler'
            ],
            'onlyAdmin' => [
                
            ],
            'readOnly' => [
                0 => 'fetchData'
            ],
            'nonAdminReadOnly' => [
                
            ]
        ],
        'attributes' => (object) [
            'forbidden' => [
                
            ],
            'internal' => [
                0 => 'password',
                1 => 'smtpPassword',
                2 => 'imapHandler',
                3 => 'smtpHandler'
            ],
            'onlyAdmin' => [
                
            ],
            'readOnly' => [
                0 => 'fetchData'
            ],
            'nonAdminReadOnly' => [
                
            ]
        ],
        'links' => (object) [
            'forbidden' => [
                
            ],
            'internal' => [
                
            ],
            'onlyAdmin' => [
                
            ],
            'readOnly' => [
                
            ],
            'nonAdminReadOnly' => [
                
            ]
        ]
    ],
    'InboundEmail' => (object) [
        'fields' => (object) [
            'forbidden' => [
                
            ],
            'internal' => [
                0 => 'password',
                1 => 'smtpPassword',
                2 => 'imapHandler',
                3 => 'smtpHandler'
            ],
            'onlyAdmin' => [
                
            ],
            'readOnly' => [
                0 => 'fetchData'
            ],
            'nonAdminReadOnly' => [
                
            ]
        ],
        'attributes' => (object) [
            'forbidden' => [
                
            ],
            'internal' => [
                0 => 'password',
                1 => 'smtpPassword',
                2 => 'imapHandler',
                3 => 'smtpHandler'
            ],
            'onlyAdmin' => [
                
            ],
            'readOnly' => [
                0 => 'fetchData'
            ],
            'nonAdminReadOnly' => [
                
            ]
        ],
        'links' => (object) [
            'forbidden' => [
                
            ],
            'internal' => [
                
            ],
            'onlyAdmin' => [
                
            ],
            'readOnly' => [
                
            ],
            'nonAdminReadOnly' => [
                
            ]
        ]
    ],
    'User' => (object) [
        'fields' => (object) [
            'forbidden' => [
                
            ],
            'internal' => [
                0 => 'password',
                1 => 'passwordConfirm',
                2 => 'authLogRecordId',
                3 => 'userData'
            ],
            'onlyAdmin' => [
                0 => 'authMethod',
                1 => 'apiKey',
                2 => 'secretKey',
                3 => 'auth2FA'
            ],
            'readOnly' => [
                0 => 'isAdmin',
                1 => 'apiKey',
                2 => 'secretKey',
                3 => 'isSuperAdmin'
            ],
            'nonAdminReadOnly' => [
                0 => 'userName',
                1 => 'type',
                2 => 'password',
                3 => 'passwordConfirm',
                4 => 'apiKey',
                5 => 'isActive',
                6 => 'isPortalUser',
                7 => 'teams',
                8 => 'roles',
                9 => 'portals',
                10 => 'portalRoles',
                11 => 'contact',
                12 => 'accounts'
            ]
        ],
        'attributes' => (object) [
            'forbidden' => [
                
            ],
            'internal' => [
                0 => 'password',
                1 => 'passwordConfirm',
                2 => 'authLogRecordId',
                3 => 'userDataId',
                4 => 'userDataName'
            ],
            'onlyAdmin' => [
                0 => 'authMethod',
                1 => 'apiKey',
                2 => 'secretKey',
                3 => 'auth2FA'
            ],
            'readOnly' => [
                0 => 'isAdmin',
                1 => 'apiKey',
                2 => 'secretKey',
                3 => 'isSuperAdmin'
            ],
            'nonAdminReadOnly' => [
                0 => 'userName',
                1 => 'type',
                2 => 'password',
                3 => 'passwordConfirm',
                4 => 'apiKey',
                5 => 'isActive',
                6 => 'isPortalUser',
                7 => 'teamsIds',
                8 => 'teamsColumns',
                9 => 'teamsNames',
                10 => 'rolesIds',
                11 => 'rolesNames',
                12 => 'portalsIds',
                13 => 'portalsNames',
                14 => 'portalRolesIds',
                15 => 'portalRolesNames',
                16 => 'contactId',
                17 => 'contactName',
                18 => 'accountsIds',
                19 => 'accountsNames'
            ]
        ],
        'links' => (object) [
            'forbidden' => [
                
            ],
            'internal' => [
                0 => 'userData'
            ],
            'onlyAdmin' => [
                0 => 'roles',
                1 => 'preferences'
            ],
            'readOnly' => [
                
            ],
            'nonAdminReadOnly' => [
                0 => 'teams'
            ]
        ]
    ]
];
?>