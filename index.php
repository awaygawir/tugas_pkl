<?php

$REQUEST = $_SERVER['REQUEST_URI'];
$viewdir = '/views/';
$database = '/database/';
session_start();

require __DIR__ . $database . 'conect.php';

switch ($REQUEST) {
    case '':
    case '/':
        require __DIR__ . $viewdir . 'login.php';
        break;

    case '/absen_pulang':
        require __DIR__ . $viewdir . 'absen_pulang.php';
        break;

    case '/absen_masuk':
        require __DIR__ . $viewdir . 'absen_masuk.php';
        break;

    case '/terlambat';
        require __DIR__ . $viewdir . 'keterangan_terlambat.php';
        break;

    case '/pulang_cepat';
        require __DIR__ . $viewdir . 'keterangan_pulang_cepat.php';
        break; 
    
    case '/izin';
        require __DIR__ . $viewdir . 'keterangan_izin.php';
        break;

    case '/sakit';
        require __DIR__ . $viewdir . 'keterangan_sakit.php';
        break;

    case '/proses_absen';
        require __DIR__ . $viewdir . 'proses_absen.php';
        break;

    case '/proses_login';
        require __DIR__ . $viewdir . 'proses_login.php';
        break;

    case '/proses_logout';
        require __DIR__ . $viewdir . 'proses_logout.php';
        break;
        
    default:
        http_response_code(404);
        require __DIR__ . $viewdir . '404.php';  
}