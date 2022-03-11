$(function () {
    
//     setTimeout(function () { $('.page-loader-wrapper').fadeOut(); }, 50);
    
console.log(site_url);    
 



    
    

}); 
var transactions = {
    
    saveJob: function(){
        try {
             

            var data = {
                'title': $('#title').val(),
                'company': $('#company').val(),
                'location': $('#location').val(),
                'short_desc': $('#short_desc').val(),
                'full_desc': $('#full_desc').val(),
                'job_nature': $('#job_nature').val(),
                'salary': $('#salary').val(),
//                'updateFlag'  :   update_flag,
//                'allocCode'   :   allocCode,
            }

            $.ajax({
                url: site_url + 'api/web/v1/TransactionsAjax/saveJob',
                type: 'post',
                dataType: 'json',
                data: data,
                success: function (data) {
                    if (!data.status) {
                        if ($.isArray([data.response.messages[0]])) {
                            $.each(data.response.messages[0], function (index, value) {
                                alert(value);  // alert will have class 'alert-color'
                            });
                        } else {
                            alert(data.messages[0]);
                        }
                        return false;
                    } else {
                         window.location.href = " " + site_url;
                    }

                },
            });
        } catch (e) {

            alert(e.msg);
            $(e.elt).focus();
            return false;

        }
    },
    applyJob: function(id_job,id_user){
        try {
             

            var data = {
                'id_job': id_job,
                'id_user': id_user,
            }

            $.ajax({
                url: site_url + 'api/web/v1/TransactionsAjax/applyJob',
                type: 'post',
                dataType: 'json',
                data: data,
                success: function (data) {
                    if (!data.status) {
                        if ($.isArray([data.response.messages[0]])) {
                            $.each(data.response.messages[0], function (index, value) {
                                alert(value);  // alert will have class 'alert-color'
                            });
                        } else {
                            alert(data.messages[0]);
                        }
                        return false;
                    } else {
                         window.location.href = " " + site_url+"jobdetails?id="+id_job;
                    }

                },
            });
        } catch (e) {

            alert(e.msg);
            $(e.elt).focus();
            return false;

        }
    },
     
   
}

