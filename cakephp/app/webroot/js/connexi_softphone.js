$(document).ready(function() {
    $('#phoneStatus').change(function() {
        if($(this).val() == 1)
        {
            alert('phone is now ON!!');
        }
        else if ($(this).val() == 0) {
            alert('phone is off!');
        }
    })
})