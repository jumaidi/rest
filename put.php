<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://localhost/laravel-api-starter/public/api/dogs/12",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "PUT",
  CURLOPT_POSTFIELDS => "name=dogs%202&age=2",
  CURLOPT_HTTPHEADER => array(
    "authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0L2xhcmF2ZWwtYXBpLXN0YXJ0ZXIvcHVibGljL2FwaS9sb2dpbiIsImlhdCI6MTQ0NjAxODQ2NSwiZXhwIjoxNDQ2MDIyMDY1LCJuYmYiOjE0NDYwMTg0NjUsImp0aSI6IjE4ZGI1MTgxNGE5MDY1MGY2MWFiNjY0MDcxOTgwYmM1Iiwic3ViIjoxfQ.WVteIWQz1kk39NcBt9lsqiTi_WVXwJKvEbxDcIX1GKY",
    "cache-control: no-cache",
    "content-type: application/x-www-form-urlencoded",
    "postman-token: ab7a3728-d25d-e122-427b-70cac516d27b"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}