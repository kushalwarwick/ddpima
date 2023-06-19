<?php
	// Parse the configuration file
	$config = parse_ini_file('config.ini');

	// Create a new MySQLi object and establish a database connection
	$uni = new mysqli('localhost', $config['username'], $config['password'], $config['dbname']);

	// Check for connection errors
	if ($uni->connect_error) {
	    die("Unable to connect to the database");
	}
?>