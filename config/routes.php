<?php
/**
 * Created by PhpStorm.
 * User: VitaliyLagun
 * Date: 28.05.2018
 * Time: 14:52
 */

use site\Router;
// ПОЛЬЗОВАТЕЛЬСКИЕ ПРАВИЛА

// СТАНДАРТНЫЕ МАРШРУТЫ
// админка
Router::add('^admin$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);
//сайт
Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$'); //Динамический контроллер и экшен

