<?php 
	
	$header =array(
		//'Accept-Encoding: gzip, deflate',
		//'Accept-Language: zh-CN,zh;q=0.9',	
		//'Connection:keep-alive',
		'Content-Type:application/x-www-form-urlencoded',		
        'Host: music.163.com',
        'Origin: http://music.163.com',
        'User-Agent: Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36',
        'Referer: http://music.163.com/',
    );
	//$url = $_POST['val'];
	$url = 'http://music.163.com/api/search/get/web?csrf_token=流非飞';
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	$res = curl_exec($ch);
    curl_close($ch);
	echo $res;
	 
?>