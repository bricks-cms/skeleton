<?php

return [
    'default' => [
        'modules' => [
            'BricksCmf\\EventizrService\\Bootstrap\\Module',
            'BricksCmf\\LazyLoaderService\\Bootstrap\\Module',
            'BricksCmf\\EventManager\\Bootstrap\\Module',
            'BricksCmf\\NamespacedService\\Bootstrap\\Module',
            'BricksCmf\\ConfigService\\Bootstrap\\Module',
            'BricksCmf\\FactoryService\\Bootstrap\\Module',
            'BricksCmf\\DiService\\Bootstrap\\Module',
            'BricksCmf\\Application\\Bootstrap\\Module'
        ],
        /**
         * Defines which class to use in bootstrap, a very early class loader implementation
        'aliases' => [
            'BricksFramework\\LazyLoader\\LazyLoader' => 'BricksFramework\\LazyLoader\\LazyLoader',
            'BricksFramework\\Eventizr\\Eventizr' => 'BricksFramework\\Eventizr\\Eventizr'
        ],
        */

        /**
         * configuration options to overwrite during bootstrap
        'bricks-cmf/lazyloader-service' => [
            'compileDir' => realpath(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'compile')
        ],
        'bricks-cmf/eventizr-service' => [
            'compileDir' => realpath(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'compile'),
            'tempDir' => realpath(__DIR__ . DIRECTORY_SEPARATOR . '..') . DIRECTORY_SEPARATOR . 'var' . DIRECTORY_SEPARATOR . 'tmp')
        ]
        */
    ],
    'dev' => [
        'php' => [
            'display_errors' => 1
        ]
    ]
];
