// hides preview div normally
$('#preview').hide();


// get client name and output data
$('#clientname').keyup(function() {

	// figure out what the user typed in
	var clientname = $(this).val();

	// inject into output
	$('.clientname-output').html(clientname);

});


// get project name and output data
$('#projectname').keyup(function() {

	// figure out what the user typed in
	var projectname = $(this).val();

	// inject into output
	$('.projectname-output').html(projectname);	

});


// get date and output data
$('#date').blur(function() {

	// figure out what the user typed in
	var date = $(this).val();

	// inject into output
	$('#date-output').html(date);

});


// get agreement and output  data
$('#agreement').blur(function() {

	// figure out what the user typed in
	var agreement = $(this).val();

	// inject into output
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


// print dialog button
function printfunction() {
	window.print();
}


