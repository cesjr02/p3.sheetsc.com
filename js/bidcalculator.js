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

	// amount to signify that you are close to the red
	var orangeMargin = 0.2;

	// loop through each checkbox
	options.each(function() {			
		hours += parseInt($(this).val()) ;
		total = hours * 65;
	}); // end of loop

	// budget comparison
	if (budget != '') {
		if(total >= budget) {
			$('.total-cost').css('color', 'red');
		}

		else if (total >= (budget - (orangeMargin * budget))) {
			$('.total-cost').css('color', 'orange');
		}
		
		else {
			$('.total-cost').css('color', 'green');

		}
	}

	// insert into html
	$('.total-cost').html(total);
	$('.total-hours').html(hours);
	$('.budget').html(budget);

}