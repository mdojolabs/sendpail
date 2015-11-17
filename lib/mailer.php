<?php

/* this essentially becomes a wrapper for sendgrid class in v3 api*/
function send($from, $to, $subject, $body) {
  
    //For reference SendGrid V3 API also supports the use of API Keys - https://sendgrid.com/docs/API_Reference/Web_API_v3/index.html
    //See https://github.com/sendgrid/sendgrid-php#usage
  
    $sendgrid = new SendGrid($_ENV['SENDGRID_APIKEY']); //replace the sendgrid api with your generated API, use $_ENV if you're using php dotenv library 

    //---- btw if you prefer to use username password ----
    //$sendgrid_username = $_ENV['SENDGRID_USERNAME']; 
    //$sendgrid_password = $_ENV['SENDGRID_PASSWORD'];

    //------ instantiate the sendgrid with username  password 
    //$sendgrid = new SendGrid($sendgrid_username, $sendgrid_password);
    
    $email = new SendGrid\Email();
    
    $email->addTo($to)
          ->setFrom($from)
          ->setSubject($subject)
          ->setText(strip_tags($body,'<br>'))
          ->setHtml($body);
   

    $sendgrid->send($email);

}
