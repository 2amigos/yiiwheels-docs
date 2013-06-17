<?php
/**
 *
 * Bootstrap index file
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @copyright 2013 2amigOS! Consultation Group LLC
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
require('./../app/lib/vendor/autoload.php');

$global = __DIR__ . '/../app/helpers/global.php';
require_once($global);

Yiinitializr\Helpers\Initializer::create('./../app', 'main', array('common', 'env', 'local'))->run();