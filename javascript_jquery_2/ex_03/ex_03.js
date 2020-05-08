$(document).ready(() => {
    $("#add_button").click(() => {
        let type_input = $('#type_input');
        let content_input = $('#content_input');

        let classType = type_input.val();
        let content = content_input.val();
        
        $('#bulled_list').append(`<li class="${classType}" >${content}</li>`);
    })

    $("#search_type_button").click(() => {
        let search_content = $('#type_input').val();
        let inputs_added = $("#bulled_list li");

        search_content = search_content.toLowerCase();

        for(let x = 0; x < inputs_added.length; x++){
            if(search_content !== inputs_added[x].className){
                $(inputs_added[x]).hide();
            } else{ 
                $(inputs_added[x]).show();
            }
        }
    })

    $("#unhide_button").click(() => {
        let inputs_added = $("#bulled_list li");

        for(let x = 0; x < inputs_added.length; x++){
            $(inputs_added[x]).show();
        }
    })
})