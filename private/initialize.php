<?php
  ob_start(); // output buffering is turned on

  session_start(); // turn on sessions

  require_once('functions.php');
  require_once('db-functions.php');
  require_once('query-functions.php');

  $db = db_connect();
  $errors = [];

?>