<?php
// Primary Application Configuration

// Set a default timezone (some PHP installs require an explicit setting)
// Easy search: #customize
date_default_timezone_set('America/Denver');

// Get our session started
require_once '../app/config/session.php';

// Connect to the database
require_once '../app/config/pdo.php';
?>
