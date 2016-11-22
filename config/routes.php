<?php
return [
    '/' => ['web', 'index', 'index'],
    '/404' => ['error', 'index', 'error404'],
    '/login' => ['user', 'index', 'login'],
    '/login_check' => ['user', 'index', 'loginCheck'],
    '/logout' => ['user', 'index', 'logout'],
    '/registration' => ['user', 'index', 'registration'],
    '/registration_check' => ['user', 'index', 'registrationSave'],
];