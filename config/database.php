<?php

return [
	'type'			=> 'mysql',
	'host'			=> 'localhost',
	'port'			=> '3306',
	'user'			=> 'root',
	'password'		=> 'root',
	'dbname'		=> 'scriptum',
	'options'		=> [
		\PDO::MYSQL_ATTR_INIT_COMMAND	=>'SET NAMES utf8mb4',
		\PDO::ATTR_ERRMODE				=> \PDO::ERRMODE_EXCEPTION,
		\PDO::ATTR_DEFAULT_FETCH_MODE	=> \PDO::FETCH_ASSOC,
		\PDO::ATTR_PERSISTENT			=> false,
		\PDO::ATTR_TIMEOUT				=> 5
	]
];