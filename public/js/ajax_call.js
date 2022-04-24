function callCrudAction(action, id) {
    $("#loaderIcon").show();
    let queryString;
    switch (action) {
        case "add":
            queryString = 'action=' + action + '&txtmessage=' + $("#txtmessage").val();
            break;
        case "edit":
            queryString = 'action=' + action + '&message_id=' + id + '&txtmessage=' + $("#txtmessage_" + id).val();
            break;
        case "delete":
            queryString = 'action=' + action + '&message_id=' + id;
            break;
    }
    jQuery.ajax({
        url: "crud_action.php",
        data: queryString,
        type: "POST",
        success: function(data) {
            switch (action) {
                case "add":
                    $("#comment-list-box").append(data);
                    break;
                case "edit":
                    $("#message_" + id + " .message-content").html(data);
                    $('#frmAdd').show();
                    break;
                case "delete":
                    $('#message_' + id).fadeOut();
                    break;
            }
            $("#txtmessage").val('');
            $("#loaderIcon").hide();
        },
    });
}