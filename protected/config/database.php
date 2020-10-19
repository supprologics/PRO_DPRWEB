<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	
	#'connectionString' => 'mysql:host=localhost;dbname=srilan24_dprweb',
	'connectionString' => 'mysql:host=localhost;dbname=dprweb',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => '',
	#'username' => 'srilan24_prologics',
	#'password' => 'iMZRmbfzhT3u6sp',
	'charset' => 'utf8',
	
);