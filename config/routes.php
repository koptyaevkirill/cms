<?php
return [
    '/' => ['web', 'index', 'index'],
    '/404' => ['error', 'index', 'error404'],
    '/login' => ['user', 'index', 'login'],
    '/login_check' => ['user', 'index', 'loginCheck'],
    '/logout' => ['user', 'index', 'logout'],
    '/registration' => ['user', 'index', 'registration'],
    '/registration_check' => ['user', 'index', 'registrationSave'],
    
    '/manager' => ['userfiles', 'index', 'index'],
    '/upload' => ['userfiles', 'index', 'upload'],
    '/files' => ['userfiles', 'index', 'get'],
];