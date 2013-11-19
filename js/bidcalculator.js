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
	
	
	// budget comparison
	if(budget != '') {
		if(total >= budget) {
			$('.total-cost').css('color', 'red');
		}
		else {
			$('.total-cost').css('color', 'green');
			
		}		
		
	}
	
	
	$('.total-cost').html(total);
	$('.total-hours').html(hours);
	$('.budget').html(budget);
		
}