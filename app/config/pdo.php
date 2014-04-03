<?php
// Set up our connection, failing painfully if the DB is down
// TODO: Find a cleaner way to fail
// Easy search: #customize
try {
  $dbh = new PDO('mysql:host=localhost;dbname=simple-app;charset=utf8', 'simple-app', 's0s1mpl3');
  $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo "We're sorry, but the database appears to be having issues, please reload";
  die;
}
?>
