<?php
// For now, just the v1 API
$app->group('/api', function () use ($app, $dbh) {
  require 'api/v1.php';
});
?>
