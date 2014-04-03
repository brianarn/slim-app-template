<?php
$app->get('/hello/:person', function ($person) use ($app) {
  // Render the hello page
  $app->render('hello.html.twig', array(
    'person' => $person,
  ));
})->name('hello');
