$().document.ready({

	//prevent all forms from default submit behavior
	$('FORM').submit(function(e){
    return false;
});

$("input[value='Hot Fuzz']").on("click", "body", function(event){
	console.log('Process step1');
});