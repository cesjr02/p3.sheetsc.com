$(function() {
    $('#reset2').click(function() {
    
    	// reset form inputs
        $('form')[0].reset();
        
        // zero out totals when reset button is pressed
        $('.total-cost').html("0.00");
        $('.total-hours').html("0");
        $('.budget').html("0.00");
        
        // change color style back to black if red or green
        $('.total-cost').css('color', 'black');
        
        $.modal.close();
        
    });
    
});


