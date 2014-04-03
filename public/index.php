<?php
// Load Composer dependencies (good idea to do immediately)
require_once '../vendor/autoload.php';

// Load our application's configuration
require_once '../app/config/index.php';

// === SLIM APP ===
// Create our application
$app = new \Slim\Slim(array(
  'debug' => true,
  'templates.path' => '../app/templates',
  'view' => new \Slim\Views\Twig(),
));

// Make our database accessible via the application
// $dbh is defined in app/config/dbo.php,
// loaded via app/config/index.php above
$app->database = $dbh;

// Configure the Twig template system
// See https://github.com/codeguy/Slim-Views#twig for details
$view = $app->view();
$view->parserOptions = array(
  'debug' => true,
);
$view->parserExtensions = array(
  new \Slim\Views\TwigExtension(),
);

// Load our routes configuration
require_once '../app/config/routes.php';

// Set up our not found handler
$app->notFound(function () use ($app) {
  $app->render('404.html.twig');
});

// Start it up!
$app->run();
?>
