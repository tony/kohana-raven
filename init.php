<?php


if (Kohana::$errors)
{
	// Override Kohana exception handler
	set_exception_handler(array('Kohana_Raven_Exception_Handler', 'handler'));
}

if ($path = Kohana::find_file('vendor', 'raven-php.git/lib/Raven/Client')) {
	ini_set('include_path',
	ini_get('include_path').PATH_SEPARATOR.dirname(dirname($path)));
	
	require_once 'Raven/Autoloader.php';
	Raven_Autoloader::register();
}
