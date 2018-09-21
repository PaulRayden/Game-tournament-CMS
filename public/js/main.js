
$('#login_panel-button').click(function() {
    var data = $('#login_panel-form').serializeArray();
    $.ajax({
        url: 'auth/login',
        type: 'POST',
        dataType : 'JSON',
        data: data,
        success: function(data) {
            alert(data.request);
        },
    });
});


$('#register_panel-button').click(function() {
    var data = $('#register_panel-form').serializeArray();
    $.ajax({
        url: 'auth/register',
        type: 'POST',
        dataType : 'JSON',
        data: data,
        success: function(data) {
            alert(data.request);
        },
    });
});
