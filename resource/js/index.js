function click_scroll(e)
{
	var id = $(e.target).attr("jumpid");
	var is_lock = $(".touchbar-lock").hasClass("touchbar-locked");
	if(is_lock){
		var offset = 45;
	}
	else{
		var offset = 0;
	}
	var scroll_offset = $("#" + id).offset();
	$("body,html").animate({
		scrollTop: scroll_offset.top - offset
	},'fast');
}