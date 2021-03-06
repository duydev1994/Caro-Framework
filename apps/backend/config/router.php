<?php
/**
 * Created by Caro Team (info@carocrm.com).
 * User: Jacky (jacky@carocrm.com).
 * Year: 2016
 * File: router.php
 */

return [
    '/[ADMIN]' => [
        'module' => 'backend',
        'controller' => 'index',
        'action' => 'index'
    ],
    '/[ADMIN]/:controller/:action/:params' => [
        'module' => 'backend',
        'controller' => 1,
        'action' => 2,
        'params' => 3
    ],
    '/[ADMIN]/:controller/:action/:params.(json|xml)' => [
        'module' => 'backend',
        'controller' => 1,
        'action' => 2,
        'params' => 3,
        'format' => 4
    ],
    '/[ADMIN]/:controller' => [
        'module' => 'backend',
        'controller' => 1,
        'action' => 'index'
    ],
    // rest api
    '/api/:params' => [
        'module' => 'backend',
        'controller' => 'rest',
        'action' => 'execute',
        'params' => 1
    ],
    // Angular Config
    '/[ADMIN]/{index}.chunk.js' => [
        'module' => 'backend',
        'controller' => 'angular-config',
        'action' => 'chunks'
    ],
];