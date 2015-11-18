<?php
/* Disallow GET requests to sendpail */
if($_SERVER['REQUEST_METHOD'] == 'GET') {

   echo 'Invalid request.';

   exit;

} else {

  //here is where the magic happens
  require('../app.php');

}

