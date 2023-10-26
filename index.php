<?php

$REQUEST = $_SERVER['REQUEST_URI'];
$viewdir = '/views/';

switch ($REQUEST) {
    case '':
    case '/':
        require __DIR__ . $viewdir . 'home.php';
        break;
    
    case '/views/users':
        require __DIR__ . $viewdir . 'users.php';
        break;

    case '/contact':
        require __DIR__ . $viewdir . 'contact.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . $viewdir . '404.php';
    }