<?php
if($_SERVER['REQUEST_METHOD'] == 'GET') {
   echo 'exiting..';
   exit;
}
require('../app.php');

$app = '';

if(isset($_REQUEST['application'])) {
  $app = $_REQUEST['application'];
}

