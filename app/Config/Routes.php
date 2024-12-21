<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

//http://localhost/Login2/Formulario
$routes->get('/Formularios', 'CFormulario::MFormulario');




