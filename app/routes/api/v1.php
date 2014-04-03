<?php
$app->group('/v1', function () use ($app, $dbh) {
  require('v1/hello.php');
});
?>
