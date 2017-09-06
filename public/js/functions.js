$(document).ready(function() {


    $("#submit-button").click(function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: "/login/checkData",
            data: {
                'username':'ales',
                'password':'111'
            },
            dataType: 'json',
            success: function (data) {
                console.log(data);
                console.log("redirect home");
            }
        });
    });

});