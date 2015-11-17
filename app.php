<?php
//actual api
require_once __DIR__ . '/vendor/autoload.php';
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

//if(isset($_POST['message'])) {
   $message = '{"to": "me"}';
   if(isJSON($message)) {
     $msg = json_decode($message);
     echo '---';
     var_dump($msg->to);
    if($_ENV['MY_SETTING']) {
       echo $_ENV['MY_SETTING'];
    }
    } else {
      var_dump($message);
    }
  // }.
//}

