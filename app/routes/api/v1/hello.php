<?php
$app->get('/hello/:person', function ($person) use ($app) {
  $app->response->headers->set('Content-Type', 'application/json');

  echo json_encode(array(
    'person' => $person,
  ));

})->name('api-v1-hello');
?>
