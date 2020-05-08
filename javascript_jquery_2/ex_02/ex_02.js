$(document).ready(() => {
    $("#add_input").click(() => {
        let type_input = $('#type_input');
        let content_input = $('#content_input');

        let classType = type_input.val();
        let content = content_input.val();
        
        $('#bulled_list').append(`<li class="${classType}" >${content}</li>`);
    })
})