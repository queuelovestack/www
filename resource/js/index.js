function click_scroll(e)
{
	var id = $(e.target).attr("jumpid");
	var is_lock = $(".touchbar-lock").hasClass("touchbar-locked");
	if(is_lock){
		var offset = 60;
	}
	else{
		var offset = 20;
	}
	var scroll_offset = $("#" + id).offset();
	$("body,html").animate({
		scrollTop: scroll_offset.top - offset
	},'slow');
}