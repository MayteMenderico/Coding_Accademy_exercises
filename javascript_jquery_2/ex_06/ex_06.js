$(document).ready(() => {
    $("#add_button").click(() => {
        let type_input = $('#type_input');
        let content_input = $('#content_input');

        let classType = type_input.val();
        let content = content_input.val();
        
        $('#bulled_list').append(`<li class="${classType}" >${content}</li>`);
    })

    $("#search_type_button").click(() => {
        let type_content = $('#type_input').val();
        let search_content = $("#search_input").val();
        let inputs_added = $("#bulled_list li");

        type_content = type_content.toLowerCase();

        for(let x = 0; x < inputs_added.length; x++){
            console.log("[]", inputs_added)
            if(type_content !== inputs_added[x].className || (search_content !== "" && search_content !== inputs_added[x].innerText)){
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

    $("#call_ajax").click(() => {
        console.log("CALLING AJAX");
        $.ajax({
            url: "ex_06.php",
            method: "get",
            dataType: "json",
            contentType: "application/json; charset=utf-8"
        })
        .done((data) => {
            console.log("[RESPONSE]", data);
            $('#bulled_list').append(`<li class="note" >${data.name}</li>`);
        })
        .fail((msg) => {
            console.log("[MESSAGE ERROR]", msg);
        })
    })
})