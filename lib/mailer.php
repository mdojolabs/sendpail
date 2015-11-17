<?php


function sendmail($sendgrid_user,$sendgrid_pass, $from, $to, $subject, $body) {
   $url = 'https://api.sendgrid.com/';

  $params = array(
      'api_user'  => $user,
      'api_key'   => $pass,
      'from'      => $from,
      'to'        => $to,
      'subject'   => $subject,
      'html'      => $body,
      'text'      => strip_tags($body),
    );


  $request =  $url.'api/mail.send.json';

  // Generate curl request
  $session = curl_init($request);
  // Tell curl to use HTTP POST
  curl_setopt ($session, CURLOPT_POST, true);

  //auth 
  $authorization = "Authorization: Bearer <YourBearerTokenHere SG.>";

  curl_setopt($session, CURLOPT_HTTPHEADER, $authorization);

  // Tell curl that this is the body of the POST
  curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
  // Tell curl not to return headers, but do return the response
  curl_setopt($session, CURLOPT_HEADER, false);
  // Tell PHP not to use SSLv3 (instead opting for TLS)
  curl_setopt($session, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
  curl_setopt($session, CURLOPT_RETURNTRANSFER, true);


}
