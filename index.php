<?php
session_start();
require_once('connection.php');

if (isset($_GET['controllers'])) {
    $controller = $_GET['controllers'];
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'index';
    }
} else {
    $controller = 'pages';
    $action = 'home';
}
require_once('routes.php');
