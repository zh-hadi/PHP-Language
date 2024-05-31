<?php

$route->get('/', 'controllers/index');
$route->get('/about', 'controllers/about');
$route->get('/contact', 'controllers/contact');



$route->get('/register', 'controllers/register/register');
$route->post('/register', 'controllers/register/store');


$route->get('/login', 'controllers/session/login');
$route->post('/login', 'controllers/session/store');
$route->post('/logout', 'controllers/session/destroy');