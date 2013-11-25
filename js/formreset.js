$(function() {
    $('#reset2').click(function() {
        $('form')[0].reset();
    });
    
    $('#reset3').click(function() {
        $('#form').each(function(i, ctrl) {
            ctrl.checked = ctrl.defaultChecked;
            ctrl.value = ctrl.defaultValue;
        });
    });
    
    $('#reset4').click(function() {
        document.getElementById('form').reset();
    });
});