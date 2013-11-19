// Listeners
$('input').keyup(calculate);
$('input[type=checkbox]').change(calculate);
$('input[type=radio]').change(calculate);
$('label').popover();


// calculation function
function calculate() {
	
	// what is the budget?
	var budget	= $('input[name=budget]').val();
	
	// What options are checked?
	var options	= $('input[name=options]:checked');
	
	var hours	= 0;
	var total	= 0;
	
	
	// loop through each checkbox
	options.each(function() {	
			
		hours += parseInt($(this).val()) ;
		total = hours * 65;
	}); // end of loop
	
	
	$('.total-cost').html(total);
	$('.total-hours').html(hours);
	$('.budget').html(budget);
		
}