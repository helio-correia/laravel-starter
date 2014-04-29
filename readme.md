#Laravel Starter

This is a new laravel project that brings you some packages and setups to helps you speed your projects.

### What is included

- Way/generators with some small personal modifications
- fzaninotto/faker
- Delete some unnecessary files
- Acme with psr-4 autoload
- Authentication (in progress)
- Basic backoffice ( in progress )

### Getting starter

1. Create on the root the file .env.local.php to write your configs

```` 
	// .env.local.php
	<?php

	return [
    	'DB_NAME'       => 'name_of_database',
	    'DB_USERNAME'   => 'root',
    	'DB_PASSWORD'   => ''
	];
	
````

2. To access the backoffice use Username admin and password admin

### Server Configs

1. In your server create a file .env.php similar to the .env.local.php