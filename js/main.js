$(document).ready(function(){
	$('#go-top').click(function(e){
		e.preventDefault();
		var target=$(this).attr('href');
		var offset=$(target).offset();
		$('html,body').animate({scrollTop:offset.top},1000);
	});
});

