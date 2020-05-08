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
            url: "ex_09.php",
            method: "get",
            dataType: "json",
            contentType: "application/json; charset=utf-8"
        })
        .done((data) => {
            console.log("[RESPONSE]", data);

            Object.keys(data).forEach(key => {
                data[key].forEach(info => {
                    $('#bulled_list').append(`<li class="${key}" >${info}</li>`);
                })
            })
        })
        .fail((msg) => {
            console.log("[MESSAGE ERROR]", msg);
        })
    })

    $("#save_ajax").click(() => {
        let inputs_added = $("#bulled_list li");
        let toAdd = [];

        for(let x = 0; x < inputs_added.length; x++){
            let typeInput = inputs_added[x].className;
            let contentInput = inputs_added[x].innerText;
            
            toAdd.push({
                "content": contentInput,
                "type": typeInput
            });            
        }

        $.ajax({
            type: "post",
            url: "ex_10.php",
            data: {"information": toAdd},
            dataType: "json"
        })
        .done((data) => {
            console.log("[RESPONSE]", data);
            if(data){
                alert('Action recorded successfully');
            } else{
                alert('Has some error in you bullet list');
            }
        })
        .fail((msg) => {
            alert('Communication problem with the server');
            console.log("[MESSAGE ERROR]", msg);
        })

    })
})