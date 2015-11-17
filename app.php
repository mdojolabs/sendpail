<?php
require_once __DIR__ . '/vendor/autoload.php';
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

//sendgrid curl web api v2 based
require('lib/mailer.php');
$sendgrid_user = $_ENV['SENDGRID_USERNAME'];
$sendgrid_pass = $_ENV['SENDGRID_PASSWORD'];
if(isset($_POST['message'])) {
  $message = $_POST['message'];
  if(isJSON($message)) {
    $msg = json_decode($message);
    
    //-> if $msg->body is html, text version of email is just the strip_tag-ed (strips out html), allowing only <br> html tag
    sendmail($sendgrid_user,$sendgrid_pass, $msg->from, $msg->to, $msg->subject, $msg->body); 
  }
  //else {
  //throw error/do something...
  //  var_dump($message);
  //}
}

