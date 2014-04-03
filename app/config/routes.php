<?php
// Application-wide route conditions
\Slim\Route::setDefaultConditions(array(
	// 'key' => 'some-regex'
  'hello' => '\w+',
));

// Define some routes
require_once '../app/routes/api.php';
require_once '../app/routes/hello.php';

?>
