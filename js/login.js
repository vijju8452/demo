/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {
    
});
var login   =   {
    checklogin: function(){
        var data    =   {
            'username'  :   $('#username').val(),
            'password'  :   $('#password').val(),
        }
            $.ajax({
            url: site_url + 'api/web/v1/User/login',
            type: 'POST',
            dataType: 'json',
            data: data,
            success: function (data) {
                
                if(!data.status){
                    if($.isArray([data.response.messages[0]])){
                        $.each(data.response.messages[0], function( index, value ) {
                            ohSnap(value, {color: 'red'});  // alert will have class 'alert-color'
                        });
                    }else{
                        ohSnap(data.messages[0], {color: 'red'});  // alert will have class 'alert-color'
                    }
                    return false;
                }else{
                   
                    window.location.href = " " + site_url;
                }
                
            },
            error: function (xhr, status, error) {
                // alert(xhr.responseText);
                console.log(" xhr.responseText: " + xhr.responseText + " //status: " + status + " //Error: " + error);
                err = JSON.parse(xhr.responseText);
                //alert(err.response.messages);
                $('#servererr').text(err.response.messages[0]);

            }

        });
    }
};