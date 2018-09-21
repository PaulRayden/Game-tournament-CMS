
$('#login_panel-button').click(function() {
    var data = $('#login_panel-form').serializeArray();
    $.ajax({
        url: 'panel/login',
        type: 'POST',
        dataType : 'JSON',
        data: data,
        success: function(data) {
            alert(data.request);
        },
    });
});
