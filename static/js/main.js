$(document).ready(function() {
    $('form#login').submit(function() {
        id_ajax({url: $('form').attr('action'), data: $('form').serializeArray(), async:false}, response);
        return false;
    });
    $('form#uploads').submit(function() {
        id_ajax({url: '/files', async:false}, q);
        return false;
    });

});
function q(msg) {
    console.log(msg);
}
function response(msg) {
    if(msg['error']) {
        $('p.error').html(msg['error']);
    } else {
        window.location.href = "/";
    }
}
function id_ajax(param, funct) {
    var arr = {
        type: 'POST',
        dataType: 'json',
        success: function(msg) {
            Response=msg;
            if (funct!=undefined) {
                funct(msg);
            }
        },
        error:function(msg){
            $('html').html(msg.responseText);
        }
    };
    $.extend(arr, param);
    arr['url'] = document.location.protocol+'//'+document.location.hostname+arr['url'];
    var Response=false;
    $.ajax(arr);
    return Response;
}