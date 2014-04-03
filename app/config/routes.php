<?php
// Application-wide route conditions
\Slim\Route::setDefaultConditions(array(
	// 'key' => 'some-regex'
  'hello' => '\w+',
));

// Define some routes
// The path is relative to the `public` dir, apparently
require_once '../app/routes/index.php';
require_once '../app/routes/hello.php';
require_once '../app/routes/api.php';

?>
