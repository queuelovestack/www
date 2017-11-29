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
	    </style>
	</head>
	<body>
		<div id="touchbar">
			<div class="touchbar-container">
			    <div class="touchbar-bg1 flexr">
					<div class="touchbar-navbar flexr">
						<div class="navbar-item navbar-left navbar-item-active">主界面</div>
						<div class="navbar-item">搜索</div>
						<div class="navbar-item navbar-right">播放器</div>
					</div>
					<div class="touchbar-navbar-container">
						<div class="touchbar-navbar-container-item container-item-active main fix">
							<div class="r">
								<span class="navbar-list-item fl1">注册</span>
								<span class="padding"></span>
								<span class="navbar-list-item fl1">登陆</span>
								<span class="padding"></span>
								<span class="navbar-list-item fl1">个人中心</span>
								<span class="padding"></span>
								<span class="navbar-list-item fl1">扫码关注</span>
							</div>
							<div class="search-select l flexr vercv">
								<div class="select1-label-container">
									<div class="select1-label">
									</div>
								</div>
								<div class="select2-label-container">
									<div class="select2-label">
									   <span>网页</span>
									</div>
								</div>
								<div class="select1-items">
									<div class="select1-item-container">
										<div class="select1-item">
										</div>
									</div>				
									<div class="select1-item-container">
										<div class="select1-item">
										</div>
									</div>
								</div>
								<div class="select2-items">
									<div class="select2-item-container">
										<div class="select2-item">
											网页
										</div>
									</div>
									<div class="select2-item-container">
										<div class="select2-item">
											图片
										</div>
									</div>
									<div class="select2-item-container">
										<div class="select2-item">
											音乐
										</div>
									</div>
									<div class="select2-item-container">
										<div class="select2-item">
											问题
										</div>
									</div>
								</div>
							</div>
							<div class="search-bar l">
								<input class="search-bar-input" type="text" placeholder="搜搜你想要的 (>▽<)">
								<button type="submit" class="search-bar-button">
									<img src="./static/img/search.png" width="15" height="15">
								</button>
							</div>
						</div>
						<div class="touchbar-navbar-container-item">
							
						</div>
						<div class="touchbar-navbar-container-item ">
							自定义
						</div>
					</div>
			    </div>
			    <div class="touchbar-bg2">
				    <div class="touchbar-lock touchbar-locked">
					</div>
			    </div>
			    <div class="touchbar-bg3"></div>
			</div>
		</div>

		
	</body>
	<script src="./resource/js/require.js" defer async="true" data-main="./resource/js/main.js" data-main="js/main"></script>
	<script>
		window.onload = function() {
			/*事件初始化*/
			this.initEvents();
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

		function initEvents() {
			var font = document.getElementsByClassName("navbar-list-item");
			var navbar = document.getElementsByClassName("navbar-item");
			var items = document.getElementsByClassName("touchbar-navbar-container-item");
			var search = document.getElementsByClassName("search-bar-input")[0];
			var searchButton = document.getElementsByClassName("search-bar-button")[0];
			var select1 = document.getElementsByClassName("select1-label")[0];
            var select2 = document.getElementsByClassName("select2-label")[0];
            var select1Item = document.getElementsByClassName("select1-item");
            var select2Item = document.getElementsByClassName("select2-item");
            var select1Items = document.getElementsByClassName("select1-items")[0];
            var select2Items = document.getElementsByClassName("select2-items")[0];

			for(var i = 0;i < navbar.length;i++) {
				navbar[i].addEventListener("click", function(e){
					var el = e.target;
					for(var j = 0;j < navbar.length;j++) {
						if(navbar[j].className.indexOf(" navbar-item-active") != -1)
						   navbar[j].className = navbar[j].className.replace(" navbar-item-active", "");
						if(items[j].className.indexOf(" container-item-active") != -1)
						   items[j].className = items[j].className.replace(" container-item-active", "");
						if(navbar[j].innerHTML == el.innerHTML) {
							if(items[j].className.indexOf(" container-item-active") == -1)
							  items[j].className = items[j].className + " container-item-active";
							if(navbar[j].className.indexOf(" navbar-item-active") == -1)
							  navbar[j].className = navbar[j].className + " navbar-item-active";
						}
							 
					}  
				});
			}
			search.addEventListener("focus", function(e) {
				if(search.className.indexOf(" input-blur") != -1){
					search.className = search.className.replace(" input-blur","");		
				}
			});
			search.addEventListener("blur", function(e) {
				if(search.className.indexOf(" input-blur") == -1){
					search.className = search.className + " input-blur";
				}
			});
			searchButton.addEventListener("click", function(e) {
				console.log(search.value);
			});
			for(var i = 0;i < font.length;i++) {
				font[i].addEventListener("mouseleave", function(e) {
					if(e.target.className.indexOf(" list-item-blur") == -1){
						e.target.className = e.target.className + " list-item-blur";
					}
				});
				font[i].addEventListener("mouseover", function(e) {
					if(e.target.className.indexOf(" list-item-blur") != -1){
						e.target.className = e.target.className.replace(" list-item-blur", "");
					}
				})
			}
			select1Item[0].addEventListener("mouseover", function(e) {
				stopPropagation(e);
				showSelect(1);
			});
			select1Items.addEventListener("mouseleave", function(e) {
				stopPropagation(e);
				hideSelect(1);
			});
			select2Item[0].addEventListener("mouseover", function(e) {
				stopPropagation(e);
				showSelect(2);
			});
			select2Items.addEventListener("mouseleave", function(e) {
				stopPropagation(e);
				hideSelect(2);
			});
			for(var i = 0;i < select2Item.length;i++) {
				select2Item[i].addEventListener("click", function(e) {
				    hideSelect(2);
					select2.childNodes[1].innerHTML = e.target.innerHTML;
				});
			}

			var showSelect = function(index) {
				var options = document.getElementsByClassName("select"+index+"-items")[0];
				if(options.className.indexOf(" hide-select") != -1){
					options.className = options.className.replace(" hide-select","");
				}
				if(options.className.indexOf(" show-select") == -1){
					options.className = options.className + " show-select";
				}
			}

			var hideSelect = function(index) {
				var options = document.getElementsByClassName("select"+index+"-items")[0];
				if(options.className.indexOf(" hide-select") == -1){
					options.className = options.className + " hide-select";
				}
				if(options.className.indexOf(" show-select") != -1){
					options.className = options.className.replace(" show-select","");
				}
			}
		}

		function stopPropagation(e) {
	        window.event ? window.event.cancelBubble = true : e.stopPropagation();
	    }

	     function stopDefault(e) {
	        window.event ? window.event.returnValue = false : e.preventDefault();
	     }
	</script>
</html>

