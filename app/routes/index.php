<?php
$app->get('/', function () use ($app) {
  // Render the index page
  $app->render('index.html.twig');
})->name('index');
