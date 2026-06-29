<?php
$ch = curl_init('http://localhost/nediyiruppuscbnew/admin/upload_image.php');
$cfile = new CURLFile(realpath('images/Logo.png'), 'image/png', 'test.png');
$data = array('image' => $cfile, 'caption' => 'Test From Curl');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
// Skip auth if auth.php relies on session? 
// Oh, auth.php will redirect to login!
