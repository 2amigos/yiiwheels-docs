<?php
/**
 *
 * common.php configuration file
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @copyright 2013 2amigOS! Consultation Group LLC
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
return array(
	'basePath' => realPath(__DIR__ . '/..'),
	'preload' => array('log'),
	'aliases' => array(
		'vendor' => 'application.vendor'
	),
	'import' => array(
		'application.controllers.*',
		'application.extensions.components.*',
		'application.extensions.behaviors.*',
		'application.helpers.*',
		'application.models.*'
	),
	'components' => array(
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		'errorHandler' => array(
			'errorAction' => 'site/error',
		),
		'log' => array(
			'class'  => 'CLogRouter',
			'routes' => array(
				array(
					'class'        => 'CFileLogRoute',
					'levels'       => 'error, warning',
				),
			),
		),
	),
	'params' => array(

		// php configuration
		'php.defaultCharset' => 'utf-8',
		'php.timezone'       => 'UTC',
	)
);