<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/**
 * ------------------------------------------------------------------
 * LavaLust - an opensource lightweight PHP MVC Framework
 * ------------------------------------------------------------------
 *
 * MIT License
 * 
 * Copyright (c) 2020 Ronald M. Marasigan
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package LavaLust
 * @author Ronald M. Marasigan <ronald.marasigan@yahoo.com>
 * @copyright Copyright 2020 (https://ronmarasigan.github.io)
 * @since Version 1
 * @link https://lavalust.pinoywap.org
 * @license https://opensource.org/licenses/MIT MIT License
 */

/*
| -------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------
| Here is where you can register web routes for your application.
|
|
*/
/* HomeController*/
$router->get('/', 'UserController::Home');  
$router->get('/Contact', 'UserController::Contact');
$router->get('/About', 'UserController::About');
// $router->get('/LGULogin', 'UserController::LGULogin');

/* AdminController*/
$router->get('/home', 'Admin::home');
$router->get('/Dashboard', 'Admin::Dashboard');
$router->get('/ChangePass', 'Admin::ChangePass');
$router->get('/OrminDash', 'Admin::OrminDash');

$router->get('/OcciDash', 'Admin::OcciDash');

$router->get('/PalDash', 'Admin::PalDash');
$router->get('/PalTab', 'Admin::PalTab');
$router->get('/RomDash', 'Admin::RomDash');
$router->get('/RomTab', 'Admin::RomTab');
$router->get('/MarDash', 'Admin::MarDash');
$router->get('/MarTab', 'Admin::MarTab');
$router->get('/Table', 'Admin::Table');
$router->get('/Report', 'Admin::Report');


/* UserController*/
$router->get('/Main', 'User::Main');
$router->get('/UserDashboard', 'User::UserDashboard');
$router->get('/UserTable', 'MainController::UserTable');
$router->get('/UserReport', 'User::UserReport');
$router->get('/ResetPass', 'User::ResetPass');


// $router->get('/', 'MainController::index');
$router->get('/UserTable', 'MainController::UserTable');
$router->post('/submit', 'MainController::addusers');
$router->get('/delete-user/(:num)', 'MainController::delete');
$router->get('/edit-user/(:num)', 'MainController::edit');
$router->post('/submitedit/(:num)', 'MainController::submitedit');


// BASE LOGIN REGISTER AUTHENTICATION
$router->get('/', 'UserController::Home');
$router->get('/Contact', 'UserController::Contact');
$router->get('/About', 'UserController::About');
$router->get('/LGULogin', 'UserController::LGULogin');
$router->get('/LGURegister', 'UserController::LGURegister');
$router->post('auth', 'UserController::auth');
$router->post('create', 'UserController::create');
$router->get('logout', 'UserController::logout');


/*
$router->get('/LGULogin', 'UserController::LGULogin');
$router->get('/logout', 'UserController::logout');
$router->get('/LGURegister', 'UserController::LGURegister');
$router->post('/create', 'UserController::create');
$router->post('/auth', 'UserController::auth');
*/

/* User Porta*/

$router->get('/calculatedamage', 'ChartsController::calculatedamage');
$router->get('/calculateFarmers', 'ChartsController::calculateFarmers');
$router->get('/calculatestanding', 'ChartsController::calculatestanding');
$router->get('/calculatecrop', 'ChartsController::calculatecrop');
$router->get('/totalcrop', 'ChartsController::totalcrop');
$router->get('/totaltransplate', 'ChartsController::totaltransplate');
$router->get('/totallocation', 'ChartsController::totallocation');


/* Admin Dash Porta*/
$router->get('/farmers', 'AdminChartController::farmers');
$router->get('/damage', 'AdminChartController::damage');
$router->get('/standing', 'AdminChartController::standing');
$router->get('/crop', 'AdminChartController::crop');
$router->get('/location', 'AdminChartController::location');
$router->get('/transplate', 'AdminChartController::transplate');
$router->get('/total', 'AdminChartController::total');
$router->get('/seedling', 'AdminChartController::seedling');



/* OR Dash Porta*/
$router->get('/dam', 'OrientalDashController::dam');
$router->get('/far', 'OrientalDashController::far');
$router->get('/cr', 'OrientalDashController::cr');
$router->get('/seed', 'OrientalDashController::seed');
$router->get('/ding', 'OrientalDashController::ding');
$router->get('/loc', 'OrientalDashController::loc');
$router->get('/plate', 'OrientalDashController::plate');
$router->get('/tal', 'OrientalDashController::tal');

/* OCC Dash Porta*/
$router->get('/da', 'OccidentalDashController::da');
$router->get('/fa', 'OccidentalDashController::fa');
$router->get('/c', 'OccidentalDashController::c');
$router->get('/see', 'OccidentalDashController::see');
$router->get('/din', 'OccidentalDashController::din');
$router->get('/lo', 'OccidentalDashController::lo');
$router->get('/plat', 'OccidentalDashController::plat');
$router->get('/ta', 'OccidentalDashController::ta');


/* PAL Dash Porta*/
$router->get('/d', 'PalawanDashController::d');
$router->get('/f', 'PalawanDashController::f');
$router->get('/ch', 'PalawanDashController::ch');
$router->get('/se', 'PalawanDashController::se');
$router->get('/di', 'PalawanDashController::di');
$router->get('/l', 'PalawanDashController::l');
$router->get('/pla', 'PalawanDashController::pla');
$router->get('/t', 'PalawanDashController::t');


/* ROM Dash Porta*/
$router->get('/mage', 'RomblonDashController::mage');
$router->get('/fm', 'RomblonDashController::fm');
$router->get('/h', 'RomblonDashController::h');
$router->get('/s', 'RomblonDashController::s');
$router->get('/do', 'RomblonDashController::do');
$router->get('/lo', 'RomblonDashController::lo');
$router->get('/pl', 'RomblonDashController::pl');
$router->get('/ti', 'RomblonDashController::ti');


/* MAR Dash Porta*/
$router->get('/mag', 'MarinduqueDashController::mag');
$router->get('/m', 'MarinduqueDashController::m');
$router->get('/gh', 'MarinduqueDashController::gh');
$router->get('/as', 'MarinduqueDashController::as');
$router->get('/o', 'MarinduqueDashController::o');
$router->get('/lol', 'MarinduqueDashController::lol');
$router->get('/plw', 'MarinduqueDashController::plw');
$router->get('/J', 'MarinduqueDashController::J');

$router->get('/OrminTab', 'Admin::OrminTab');
// $router->get('/', 'MainController::index');
$router->post('/submit', 'Admin::addusers');
$router->get('/delete-user/(:num)', 'Admin::delete');
$router->get('/edit-user/(:num)', 'Admin::edit');
$router->post('/submitedit/(:num)', 'Admin::submitedit');



$router->get('/OcciTab', 'OcciTabController::OcciTab');
$router->post('/submit', 'OcciTabController::addusers');
$router->get('/delete-user/(:num)', 'OcciTabController::delete');
$router->get('/edit-user/(:num)', 'OcciTabController::edit');
$router->post('/submitedit/(:num)', 'OcciTabController::submitedit');

