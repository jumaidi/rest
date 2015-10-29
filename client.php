<?php

// Get cURL resource
$curl = curl_init();

// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://localhost/laravel-api-starter/public/api/dogs?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0L2xhcmF2ZWwtYXBpLXN0YXJ0ZXIvcHVibGljL2FwaS9sb2dpbiIsImlhdCI6MTQ0NjAxNjI3OSwiZXhwIjoxNDQ2MDE5ODc5LCJuYmYiOjE0NDYwMTYyNzksImp0aSI6IjE1ZjUxNDZjNzMxNjNmMTU3ZWYwMmNkNmYwZDkxYTM5Iiwic3ViIjoxfQ.0x_fKLiM9v0vdxBJPrVi4SkYPdrXUwnPa7yjIMMV9vQ',
    CURLOPT_USERAGENT => 'Sample cURL Request'
));

// Send the request & save response to $resp
$response = curl_exec($curl);
//echo $response;

$result = json_decode($response);
//$decode = json_decode($response);
//var_dump($decode);

if (count($result->data) > 0) {
	foreach ($result->data as $dogs) {
		echo '<p>';
		echo $dogs->name . ' is ' . $dogs->age . ' year old';
		echo '<p>';
	}
}
//echo json_decode($response);

// Close request to clear up some resources
curl_close($curl);
?>