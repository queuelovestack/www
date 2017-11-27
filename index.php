<!doctype html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <title></title>
	    <link rel="stylesheet" href="./resource/css/lib.CSS">
		<link rel="stylesheet" type="text/css" href="./resource/css/index.css">
	    <style>
	    	html,body {
	    		height: 100%;
	    		padding: 0;
	    		margin: 0;
	    		background-color: #f7f7f7;
	    	}
			
			#home {
				width: 1366px;
				height: 80%;
				margin: 0 auto;
				margin-top: 5%;
			}

	    	#touchbar {
	    		width: 100%;
	    	    height: 65px;
	    	    position: fixed;
	    	    top: 0px;
	    	}
				
			.touchbar-container {
				width: 100%;
				height: 0px;
				position: relative;
			}
				
			.touchbar-bg1, .touchbar-bg2, .touchbar-bg3,
			.touchbar-locked, .touchbar-unlocked {
				background-image: url(./static/img/touchbar.png);
				background-repeat: no-repeat;
			}
			
			.touchbar-bg1 {
		    	height: 53px;
		    	width: 100%;
		    	position: absolute;
				top: 0px;
	    	    right: 80px;
	    	    background-position: 0px 0px;
				background-repeat: repeat;
		    }

			.touchbar-bg2 {
				width: 67px;
				height: 80px;
				position: absolute;
				top: -15px;
	    	    right: 13px;
	    	    background-position: 0px -46px;
			}

			.touchbar-bg3 {
		    	height: 53px;
		    	width: 13px;
		    	position: absolute;
				top: 0px;
	    	    right: 0px;
				background-position: 0px 0px;
		    }

			.touchbar-lock {
				height: 18px;
		    	width: 18px;
				cursor: pointer;
				position: absolute;
				top: 55px;
				left: 33px;
				z-index: 1;
			}

		    .touchbar-locked {
				background-position: -108px -56px;
		    }

			
			.touchbar-locked:hover {
				background-position: -108px -76px;
		    }

			.touchbar-unlocked {
				background-position: -88px -56px;
		    }

		    .touchbar-unlocked:hover {
		    	background-position: -88px -76px;
		    }

			.show-bar {
				-webkit-animation: showbar .2s 0s ease both;
				   -moz-animation: showbar .2s 0s ease both;
				    -ms-animation: showbar .2s 0s ease both;
				     -o-animation: showbar .2s 0s ease both;
				        animation: showbar .2s 0s ease both;
			}
			
			.hide-bar {
				-webkit-animation: hidebar .5s 0s ease both;
				   -moz-animation: hidebar .5s 0s ease both;
				    -ms-animation: hidebar .5s 0s ease both;
				     -o-animation: hidebar .5s 0s ease both;
				        animation: hidebar .5s 0s ease both;
			}

			@-webkit-keyframes showbar { 0% { top: -40px } 100% { top: 0px } }
			@-moz-keyframes    showbar { 0% { top: -40px } 100% { top: 0px } }
			@-o-keyframes      showbar { 0% { top: -40px } 100% { top: 0px } }
			@keyframes         showbar { 0% { top: -40px } 100% { top: 0px } }

			@-webkit-keyframes hidebar { 0% { top: 0px } 100% { top: -40px } }
			@-moz-keyframes    hidebar { 0% { top: 0px } 100% { top: -40px } }
			@-o-keyframes      hidebar { 0% { top: 0px } 100% { top: -40px } }
			@keyframes         hidebar { 0% { top: 0px } 100% { top: -40px } }
	    </style>
	</head>
	<body>
		<div id="touchbar">
			<div class="touchbar-container">
			    <div class="touchbar-bg1"></div>
			    <div class="touchbar-bg2">
				    <div class="touchbar-lock touchbar-locked">
					</div>
			    </div>
			    <div class="touchbar-bg3"></div>
			</div>
		</div>
		<div id="home">
			<div class="m-border-1 m-inner-1" style="height: auto; min-height: 300px;">
				<div class="sub-grid1-wr">
					<div class="sub-grid1">
						<div class="sub-title">
							<a>OJ</a>
						</div>
						<ul class="list clearfix">
							<li>
								<a href="http://poj.org/" target="_blank">
									<img alt="POJ" src="http://poj.org/poj.ico">
									<span class="title">POJ</span>
								</a>
							</li>
							<li>
								<a href="http://acm.hdu.edu.cn/" target="_blank">
									<img alt="HDU" src="http://acm.hdu.edu.cn/favicon.ico">
									<span class="title">HDU</span>
								</a>
							</li>
							<li>
								<a href="http://www.nbuoj.com/" target="_blank">
									<img alt="NBU" src="http://www.nbuoj.com/v8.8/Images/bg_block.jpg">
									<span class="title">NBU</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="sub-grid1">
						<div class="sub-title">
							<a>手游</a>
						</div>
						<ul class="list clearfix">
						</ul>
					</div>
					<div class="sub-grid1">
						<div class="sub-title">
							<a>网游</a>
						</div>
						<ul class="list clearfix">
						</ul>
					</div>
					<div class="sub-grid1">
						<div class="sub-title">
							<a>视频</a>
						</div>
						<ul class="list clearfix">
							<li>
								<a href="http://www.youku.com/" target="_blank">
									<img alt="优酷" src="http://static.youku.com/v1.0.166/index/img/favicon.ico">
									<span class="title">优酷</span>
								</a>
							</li>
							<li>
								<a href="http://www.iqiyi.com/" target="_blank">
									<img alt="爱奇艺" src="http://www.iqiyi.com/favicon.ico">
									<span class="title">爱奇艺</span>
								</a>
							</li>
							<li>
								<a href="https://v.qq.com/" target="_blank">
									<img alt="腾讯视频" src="http://v.qq.com/favicon.ico">
									<span class="title">腾讯视频</span>
								</a>
							</li>
							<li>
								<a href="http://www.pptv.com/" target="_blank">
									<img alt="PPTV" src="http://sr1.pplive.com/mcms/nav/images/favicon.ico">
									<span class="title">PPTV</span>
								</a>
							</li>
							<li>
								<a href="http://www.tudou.com/" target="_blank">
									<img alt="土豆" src="http://www.tudou.com/favicon.ico">
									<span class="title">土豆</span>
								</a>
							</li>
							<li>
								<a href="https://tv.sohu.com/" target="_blank">
									<img alt="搜狐视频" src="https://tv.sohu.com/favicon.ico">
									<span class="title">搜狐视频</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="sub-grid1">
						<div class="sub-title">
							<a>导航</a>
						</div>
						<ul class="list clearfix">
							<li>
								<a href="http://www.baidu.com/" target="_blank">
									<img alt="百度" src="http://www.baidu.com/favicon.ico">
									<span class="title">百度</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="sub-grid1">
						<div class="sub-title">
							<a>博客</a>
						</div>
						<ul class="list clearfix">
							<li>
								<a href="https://www.csdn.net/" target="_blank">
									<img alt="CSDN" src="./resource/images/ico/csdn_favicon.ico">
									<span class="title">CSDN</span>
								</a>
							</li>
							<li>
								<a href="https://www.cnblogs.com/" target="_blank">
									<img alt="博客园" src="https://common.cnblogs.com/favicon.ico">
									<span class="title">博客园</span>
								</a>
							</li>
							<li>
								<a href="http://blog.sina.com.cn/" target="_blank">
									<img alt="新浪博客" src="http://blog.sina.com.cn/favicon.ico">
									<span class="title">新浪博客</span>
								</a>
							</li>
							<li>
								<a href="http://blog.163.com/" target="_blank">
									<img alt="网易博客" src="http://blog.163.com/favicon.ico">
									<span class="title">网易博客</span>
								</a>
							</li>
							<li>
								<a href="http://blog.tianya.cn/" target="_blank">
									<img alt="天涯博客" src="http://static.tianyaui.com/favicon.ico">
									<span class="title">天涯博客</span>
								</a>
							</li>
							<li>
								<a href="http://www.tom-z.cn/" target="_blank">
									<img alt="TOM博客" src="http://www.tom-z.cn/wp-content/themes/zhigengniao/img/favicon.ico">
									<span class="title">TOM博客</span>
								</a>
							</li>
							<li>
								<a href="http://blog.sohu.com/" target="_blank">
									<img alt="搜狐博客" src="http://blog.sohu.com/favicon.ico">
									<span class="title">搜狐博客</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="sub-grid1">
						<div class="sub-title">
							<a>生活</a>
						</div>
						<ul class="list clearfix">
							<li>
								<a href="http://www.12306.cn/mormhweb/" target="_blank">
									<img alt="12306" src="http://www.12306.cn/mormhweb/images/favicon.ico">
									<span class="title">12306</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</body>
	<script src="./resource/js/require.js" defer async="true" data-main="./main.js"data-main="js/main"></script>
	<script>
		window.onload = function() {
			
		}

		var touchbarLock = document.getElementsByClassName("touchbar-lock")[0];
		var toucharea = document.getElementsByClassName("touchbar-toucharea")[0];
		var touchbar = document.getElementById("touchbar");

		touchbarLock.addEventListener('click',function(e) {
			stopDefault();
			if(e.target.className.indexOf("touchbar-locked") != -1) {
				e.target.className = "touchbar-lock touchbar-unlocked";
				 touchbar.addEventListener("mouseleave", touchbarHide);
                 touchbar.addEventListener("mouseover", touchbarShow);
			} else {
                e.target.className = "touchbar-lock touchbar-locked";
                console.log("locked");
                 touchbar.removeEventListener("mouseleave", touchbarHide);
                 touchbar.removeEventListener("mouseover", touchbarShow);
			}
		});

		function touchbarHide(e) {
			if(touchbarLock.className.indexOf("touchbar-locked") != -1)
				return;
			setTimeout(function(){
			       touchbar.className = "hide-bar";
			},500);
		} 

		function touchbarShow(e) {
			console.log("show")
			if(touchbarLock.className.indexOf("touchbar-locked") != -1)
				return;
			setTimeout(function(){
				if(touchbar.className.indexOf("hide-bar") != -1)
					touchbar.className = "show-bar";
			},0);
		} 

		function stopPropagation(e) {
	        window.event ? window.event.cancelBubble = true : e.stopPropagation();
	    }

	     function stopDefault(e) {
	        window.event ? window.event.returnValue = false : e.preventDefault();
	     }
	</script>
</html>

