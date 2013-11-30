$('#preview').hide();

$('#clientname').keyup(function() {

	// figure out what the user typed in
	var clientname = $(this).val();
	
	// inject into output div
	$('.clientname-output').html(clientname);
		
});

$('#date').blur(function() {

	// figure out what the user typed in
	var date = $(this).val();
	
	// inject into output div
	$('#date-output').html(date);
		
});


$('#projectname').keyup(function() {

	// figure out what the user typed in
	var projectname = $(this).val();
	
	// inject into output div
	$('.projectname-output').html(projectname);	
	
});

$('#agreement').blur(function() {

	// figure out what the user typed in
	var agreement = $(this).val();
	
	// inject into output div
	$('.agreement-output').html(agreement);	
	
});





// button to preview
$( '.preview_btn' ).click(function() {
	$('#preview').show();
	$('#main').hide();
});

// button to return and edit
$( '.return_btn' ).click(function() {
	$('#preview').hide();
	$('#main').show();
});


function printfunction()
{
window.print();
}


