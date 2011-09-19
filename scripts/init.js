// JavaScript Document
$(document).ready(function() {
	//
	$('#container').hide();
	$('#container').fadeIn();
	//
	if ( $("#gallery").length ) {
	Shadowbox.init();
	//
}
	
});

$(window).ready(function() {
	//
	$(".menu_hover_effect").bind('mouseenter', menuEnterHandler);
	$(".menu_hover_effect").bind('mouseleave', menuLeaveHandler);
});
//
function menuEnterHandler(event) {
	event.preventDefault();
	$(this).addClass('mouseenter-menu');
}
function menuLeaveHandler(event) {
	event.preventDefault();
	$(this).removeClass('mouseleave-menu');
}

var openContactForm = function(){
	Shadowbox.init();
    Shadowbox.open({ 
        content: "/en/contact/index.php", 
        player: "iframe",
		title:"",
		width:"964",
		height:"500"
    });
};

function closeShadowbox(){
    Shadowbox.close();
}

$(window).resize(function() {
});
