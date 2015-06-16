function fix_nav(){
	if($(document).width() < 1024)

}

$(document).ready(function(){

	$(document).resize(function(){
		fix_nav();
	});
});