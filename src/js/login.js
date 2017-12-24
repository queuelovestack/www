
 window.onload = function() {
	$(".wrap").css("height",$(window).height()+"px");
    init();
}
		
window.onresize = function() {
	var state = getState();
	this.bgResize(state);
}
		
function bgResize(state) {
	var height = $(window).height();
	var width = $(window).width();
	$(".wrap").css("height",height+"px");
	var h = state == "register" ? height+"px" : 0.7*height+"px";
	var w = state == "register" ? height*0.73+"px" : 0.7*height*1.49+"px";
	var t = state == "register" ? "0px" :  0.15*height+"px";
	$("."+state).css("height", h);
	$("."+state).css("width", w);
	$("."+state).css("top", t);
}

function toggle(height,width,state) {
	$("."+state).animate({
		height: 0,
		width: 0,
		opacity: 0
	},400);
	// getHtml(state);
	setTimeout(function() {
        setState(state);
		init();
		setState(state);
	},400);
}

function init() {
	var state = getState();
	getHtml(state);
	show($(window).height(),$(window).width(),state);
	initEvent(state);
}

function show(height,width,state) {
	var h = state == "register" ? height+"px" : 0.7*height+"px";
	var w = state == "register" ? height*0.73+"px" : 0.7*height*1.49+"px";
	var t = state == "register" ? "0px" :  0.15*height+"px";
	$("."+state).css("display","block");
	$("."+state).animate({
		height: h,
		width: w,
		top: t,
		opacity: 1
	},400); 
}

function initEvent(state) {
	if(state == "register") {
		$(".submit-login")[0].addEventListener("click", function(e) {
		    toggle($(window).height(),$(window).width(),"login");
	    });
		$(".register-form")[0].addEventListener("submit", function(e) {
		    
			var error = $(".ItemError");
			for(var i = 0;i < error.length;i++) {
				if(error.val() != ""){
					e.preventDefault();
					return false;
				}
			}
			if(i == error.length) {
				$(".exact-register-password").val(md5($(".password").val()))
				$(".register-form").ajaxSubmit(function(res) {   
				    console.log(res)
					if(res == "200") {
						alert("注册成功!");
					    console.log(res);
						window.open("../../index.php","_self");
					}
				}); 
			}
			e.preventDefault();
		});
		$(".email")[0].addEventListener("blur", function(e) {
			var el = $(e.target);
			check("email",el);
		});
		$(".username")[0].addEventListener("blur", function(e) {
			var el = $(e.target);
			check("username",el);
		});
		$(".password")[0].addEventListener("blur", function(e) {
			var el = $(e.target);
			check("password",el);
		});
		$(".rpt_password")[0].addEventListener("blur", function(e) {
			var el = $(e.target);
			check("rpt_password",el);
		});
		$(".nickname")[0].addEventListener("blur", function(e) {
			var el = $(e.target);
			check("nickname",el);
		});
		function check(msg,el) {
			$(".ItemError-"+msg).html("");
			var html = "";
			var arr = [
			    {
					msg: "email",
					par: /^[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/,
					empty: "邮箱不能为空",
					error: "您输入的邮箱格式有误"
				},{
					msg: "username",
					par: /^[a-zA-Z0-9]{6,20}$/,
					empty: "用户名不能为空",
					error: "用户名只能由6~20位的数字或字母组成"
				},{
					msg: "password",
					par: /^[a-zA-Z0-9]{6,20}$/,
					empty: "登陆密码不能为空",
					error: "登陆密码只能由6~20位的数字或字母组成"
				},{
					msg: "rpt_password",
					par: /^$/,
					empty: "请再次输入您的登陆密码",
					error: "两次密码输入不一致"
				},{
					msg: "nickname",
					par: /^[a-zA-Z0-9\u4e00-\u9fa5]{4,20}$/,
					empty: "昵称不能为空",
					error: "昵称只能由4~20位的数字或字母或中文组成"
				}
			];
			for(var i = 0;i < arr.length;i++) {
				if(msg == arr[i].msg) {
					if(!el.val()) {
						html = arr[i].empty;
					    break;
					}
					if(msg == "rpt_password") {
						if($(".password").val() != el.val())
          					html=arr[i].error;		
					} else {
						if(!arr[i].par.test(el.val()))
							html=arr[i].error;
					}
			        break;
				}
			}
			$(".ItemError-"+msg).html(html);
		}
	} else if(state == "login") {
		$(".login-form")[0].addEventListener("submit", function(e) {
			var username = $(".login-username input").val();
			var password = $(".login-password input").val();
			$(".username-error").html("");
			$(".password-error").html("");
			if(!username) {
				$(".username-error").html("请填写用户名");
				e.preventDefault();
				return false;
			}
			if(!password) {
				$(".password-error").html("请填写密码");
				e.preventDefault();
				return false;
			}
			$(".exact-login-password").val(md5(password));
			if(username && password) {
				$(".login-form").ajaxSubmit(function(res) {     
					console.log(res);
					if(res == "400") {
						$(".password-error").html("用户名与密码不匹配，请重新输入");
					} else if(res == "200"){
						window.open("../../index.php","_self");
					}
				}); 
			}
			e.preventDefault();
		});
		$(".login-back-register")[0].addEventListener("click", function(e) {
			toggle($(window).height(),$(window).width(),"register");
		});
	}
}

function getState() {
	var state = localStorage.getItem('state') ? localStorage.getItem('state') : "login";
	return state;
}

function setState(state) {
	var state = localStorage.setItem('state', state);
}

function getHtml(state) {
	var html =  '';
	if(state == "login")
	    html = '<div class="login" style="display:none;">' + 
					'<div class="login-container">' + 
					    '<form class="login-form" method="post" action="checkLoginRegister.php" accept-charset="UTF-8">'+
						   '<div class="login-username"><input name="username" class="login-item login-input" type="text"/><div class="username-error login-item error-item"></div></div>'+
						   '<div class="login-password"><input class="login-item login-input" type="password"/><div class="password-error login-item error-item"></div></div>'+
						   '<input class="exact-login-password" type="password" name="password" style="width:0;height:0;padding:0;margin:0;border:none;outline:none;">' +
						   '<div class="login-submit"><input type="submit" class="login-submit-button" value=""/></div>'+
						   '<div class="login-other flexr">' + 
						        '<div class="login-find-password other-item">忘记密码</div>'+
						        '<div class="login-back-register other-item">立即注册</div>'+
								'<div class="login-back-register other-item">第三方登陆</div>'+
						   '</div>' + 
						'</form>'+
					'</div>' + 
				'</div>';
	else 
		html = '<div class="register" style="display:none;">'+
'				<div class="register-container">'+
'					<form class="register-form" method="post" action="checkLoginRegister.php" accept-charset="UTF-8">'+
'						<div class="formItem ItemInfo flexr justCt">'+
'							<div class="formLabel">注册邮箱</div>'+
'							<div class="formInput fl3">'+	
'								<input type="text" placeholder="请输入您的注册邮箱" class="email" name="r_email">'+
'								<div class="ItemError ItemError-email"></div>'+
'							</div>'+
'						</div>'+
'						<div class="formItem ItemInfo flexr justCt">'+
'							<div class="formLabel">用户名</div>'+
'							<div class="formInput fl3">'+
'								<input type="text" placeholder="请输入您的用户名" class="username" name="r_username">'+
'								<div class="ItemError ItemError-username"></div>'+
'							</div>'+
'						</div>'+
'						<div class="formItem ItemInfo flexr justCt">'+
'							<div class="formLabel">登陆密码</div>'+
'							<div class="formInput fl3">'+
'								<input type="password" placeholder="请输入您的登陆密码" class="password">'+
'								<div class="ItemError ItemError-password"></div>'+
'							</div>'+
'						</div>'+
'						<div class="formItem ItemInfo flexr justCt">'+
'							<div class="formLabel">再次输入密码</div>'+
'							<div class="formInput fl3">'+
'								<input type="password" placeholder="请再次输入您的登陆密码" class="rpt_password">'+
'								<div class="ItemError ItemError-rpt_password"></div>'+
'							</div>'+
'						</div>'+
'						<div class="formItem ItemInfo flexr justCt">'+
'							<div class="formLabel">昵称</div>'+
'							<div class="formInput fl3">'+
'								<input type="text" placeholder="请输入您的昵称" class="nickname" name="r_nickname">'+
'								<div class="ItemError ItemError-nickname"></div>'+
'							</div>'+
'						</div>'+
'						<div class="formItem ItemInfo flexr justCt submit-item register-button">'+
'							<div class="submit">'+
'								<input type="submit" class="submit-register" value="立即注册">'+
'							</div>'+
'							<div class="submit">'+
'								<input type="button" class="submit-login" value="直接登陆">'+
'							</div>'+
'						</div>'+
'                       <input name="r_password" class="exact-register-password" style="width:0;height:0;padding:0;margin:0;border:none;outline:none;"/> '+
'					</form>'+
'				</div>'+
'			</div> ';
	$(".wrap").html(html);
} 

