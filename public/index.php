<?php
$visitors = file_get_contents('../storage/statusVisitCount.txt');
$visitors++;
file_put_contents('../storage/statusVisitCount.txt', $visitors);
$members = file_get_contents('../storage/memberCount.txt');
$slots = file_get_contents('../storage/slots.txt');

$route = $_SERVER['REQUEST_URI'];
$route = rtrim($route, '/');
$routes = [
    '/' => '../view/index.php',
    '/index' => '../view/index.php',
    '' => '../view/index.php',
    '/listing' => '../view/listing.php',
    '/nothing' => '../view/nothing.php',
    '/status' => '../view/status.php',
    '/glossary' => '../view/glossary.php',
    '/faq' => '../view/faq.php',
    '/news' => '../view/news.php',
    '/unlock' => '../view/unlock.php',
    '/contact' => '../view/contact.php',
    '/saturn6b6t/contact' => '../view/saturn6b6t/contact.php',
];

require_once $routes[$route] ?? '../view/404.php';
