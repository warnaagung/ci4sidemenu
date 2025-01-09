<?php

use App\Controllers\Admin\Dashboard;
use App\Controllers\Home;
use App\Controllers\Modul\Lessons\LsLessonCtrl;
use App\Controllers\Modul\Masters\StudentCtrl;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', [Home::class, 'index']);

/**
 * @var RouteCollection $routes
 */
$routes->get('/dash', [Dashboard::class, 'index']);
// $routes->get('/abc', [ls]);
$routes->get('/lesson/lslesson/index', [LsLessonCtrl::class, 'index']);
$routes->get('/master/lsstudents/index', [StudentCtrl::class, 'utama']);