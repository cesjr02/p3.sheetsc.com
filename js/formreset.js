$(function() {
    $('#reset2').click(function() {
        $('form')[0].reset();
        $('.total-cost').html("0.00");
        $('.total-hours').html("0");
        $('.budget').html("0.00");
        
    });
    
});