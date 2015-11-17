<?php
require('../app/watcher.php');
require('../app.php');

function isJSON($string){
   return is_string($string) && is_object(json_decode($string)) ? true : false;
}

$app = '';

if(isset($_REQUEST['application'])) {
  $app = $_REQUEST['application'];
}

