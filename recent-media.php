<?php
//Get data from instagram api
$access_token = 'your access token';

$user_id ='USER_ID';
// For own profile use self in the user_id

$url = 'https://api.instagram.com/v1/users/'.$user_id.'/media/recent/?access_token='.$access_token;
try {
	$curl_conn = curl_init($url);
	curl_setopt($curl_conn, CURLOPT_CONNECTTIMEOUT, 30);
	curl_setopt($curl_conn, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl_conn, CURLOPT_SSL_VERIFYPEER, false);
	
	//Data are stored in $data
	$data = json_decode(curl_exec($curl_conn), true);
	curl_close($curl_conn);
} catch(Exception $e) {
	return $e->getMessage();
}
?>
