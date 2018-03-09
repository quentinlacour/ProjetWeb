
// function() {} ();

jQuery(function ($){	
	var showDebug = $.cookie('showDebug');
	if(showDebug===undefined)
		$.cookie('showDebug','none');
	
	$('#debugInfos').css('display',showDebug);
});

function showDebug() {
	var showDebug = $.cookie('showDebug');
	if(showDebug === 'none')
		showDebug = 'block';
	else
		showDebug = 'none';
	$.cookie('showDebug',showDebug);
	$('#debugInfos').css('display',showDebug);
}
