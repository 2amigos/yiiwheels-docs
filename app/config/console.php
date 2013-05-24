<?php
/**
 *
 * console.php configuration file
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @copyright 2013 2amigOS! Consultation Group LLC
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
defined('APP_CONFIG_NAME') or define('APP_CONFIG_NAME', 'console');
return array(
	'commandMap' => array(
		'migrate' => array(
			'class' => 'system.cli.commands.MigrateCommand',
			'migrationPath' => 'application.cli.migrations'
		)
	)
);