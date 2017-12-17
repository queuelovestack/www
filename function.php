<?php
	function news_ifeng(){
		$url = 'http://ent.ifeng.com/listpage/44168/1/list.shtml';
		$ch = curl_init();
		$timeout = 5;
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		$file_contents = curl_exec($ch);
		curl_close($ch);
		return $file_contents;
	}
	
	function news_title($page){
		$pattern = '#<h2>(.*?)</h2>#s';
		preg_match_all($pattern, $page, $res);
		return $res[1];
	}
	
	function news_img($page){
		$pattern = '#<div class="box_pic">.*?<a[^>]*>(.*?)</a>.*?</div>#s';
		preg_match_all($pattern, $page, $res);
		return $res[1];
	}
	
	function news_time($page){
		$pattern = '#<span>(\d{4}-\d{1,2}-\d{1,2}.*?)</span>#s';
		preg_match_all($pattern, $page, $res);
		return $res[1];
	}
	
	$page = news_ifeng();
	$title = news_title($page);
	$img = news_img($page);
	$time = news_time($page);
	//echo htmlentities($time[0], ENT_QUOTES, "UTF-8");
?>