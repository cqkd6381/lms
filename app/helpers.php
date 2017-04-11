<?php
function change_time($time){
	$h = floor($time/60);
	$m = $time%60;
	if($h==0){
		return $m.'分';
	}
	return $h.'小时'.$m.'分'; 
}
function send_mail() {
    $url = 'http://api.sendcloud.net/apiv2/mail/send';
    $API_USER = '1023939159_test_6652iB';
    $API_KEY = '7LTwAeOe4GMpNo8L';

    //您需要登录SendCloud创建API_USER，使用API_USER和API_KEY才可以进行邮件的发送。
    $param = array(
        'apiUser' => $API_USER,
        'apiKey' => $API_KEY,
        'from' => '1023939159@qq.com',
        'fromName' => 'test',
        'to' => '443062063@qq.com',
        'subject' => 'test！',
        'html' => 'test from sendcloud',
        'respEmailId' => 'true');

    $data = http_build_query($param);

    $options = array(
        'http' => array(
            'method'  => 'POST',
            'header'  => 'Content-Type: application/x-www-form-urlencoded',
            'content' => $data
        ));

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    return $result;
}
