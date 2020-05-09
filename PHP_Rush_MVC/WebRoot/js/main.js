$(document).ready(() => {

    $('#deleteAccountButton').click(() => {
        $.ajax({
            method: "GET",
            url: "/delete-account",
        })
        .done(function(response) {
            response = JSON.parse(response);
            console.log(response);
            alert(response.message);

            if(response.success) {
                window.location.href= "/logout";
            }
        })
        .fail(function() {
            alert( "Something unknown has happened with deleteion" );
        })
        
    })
})