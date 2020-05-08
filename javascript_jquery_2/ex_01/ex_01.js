$(document).ready(() => {
    $("#add_bullet").click(() => {
        let content = $('#content_bullet').val();
        $('#bulled_list').append(`<li> ${content} </li>`);

        $('#content_bullet').val("");
    })
})