console.log('common.js loaded');
$('document').ready(function(){
    $('.input_num').keyup(function(){
        if(isNaN(this.value))
            {
                this.value='';
                ohSnap('Please enter proper input', {color: 'red'});
                return false;
            }
        });
});
var timeout;
var common =
{
    clearError: function(time)
    {
        clearTimeout(timeout);
        timeout = setTimeout(function() {
            $('#error').hide();
            $('#success').hide();
            $('#error').text('');
            $('#success').text('');
        }, time);
    },
    resetSelect2: function(id){
        var ids = id.split(',');
        $(ids).each(function(index,element) {
            $('#'+element).select2('val','0');
          });
        
    }, 
    test: function(text){
        alert(text);
        
    },
    
    
    
    
    
     
    getDateFromTimeStamp: function(timestamp)
    {
      
        var month_name = new Array();
        month_name[0] = "Jan";
        month_name[1] = "Feb";
        month_name[2] = "Mar";
        month_name[3] = "Apr";
        month_name[4] = "May";
        month_name[5] = "Jun";
        month_name[6] = "Jul";
        month_name[7] = "Augt";
        month_name[8] = "Sep";
        month_name[9] = "Oct";
        month_name[10] = "Nov";
        month_name[11] = "Dec";

        var d = new Date(timestamp);
        date = ("0" + d.getDate()).slice(-2);
        month = month_name[d.getMonth()];
        year = d.getFullYear().toString().substr(2,2);
        var n = date+' '+month+'\' '+year;
        return n; 
 
    },
    getMonthFromDate: function(date)
    {

          var month = new Array();
          month[0] = "January";
          month[1] = "February";
          month[2] = "March";
          month[3] = "April";
          month[4] = "May";
          month[5] = "June";
          month[6] = "July";
          month[7] = "August";
          month[8] = "September";
          month[9] = "October";
          month[10] = "November";
          month[11] = "December";
          var n = month[date.getMonth()];
          return n;
    },
    getDateFromTimeStampNewFormat: function(timestamp)
    {
      
        var month_name = new Array();
        month_name[0] = "Jan";
        month_name[1] = "Feb";
        month_name[2] = "Mar";
        month_name[3] = "Apr";
        month_name[4] = "May";
        month_name[5] = "Jun";
        month_name[6] = "Jul";
        month_name[7] = "Augt";
        month_name[8] = "Sep";
        month_name[9] = "Oct";
        month_name[10] = "Nov";
        month_name[11] = "Dec";

        var d = new Date(timestamp);
        date = ("0" + d.getDate()).slice(-2);
        month = month_name[d.getMonth()];
        year = d.getFullYear().toString().substr(2,2);
        var n = date+'-'+month+'-'+year;
        return n; 
 
    },
    gettimestamp: function(temp)
    {
        
        datestr = temp.split('-');
        retdate = datestr[0]+' '+datestr[1]+' 20'+datestr[2];
         
        return Date.parse(retdate);
    },
    closeCustomDailog: function(id){
        $('#'+id).hide();
        $('#lightBg').hide();
    }, 
    closeModalDailog: function(id){
        $('#'+id).modal('hide');
    }, 
    gettimestampFromDate: function(temp,$seperator)
    {
         
        datestr = temp.split($seperator);
        retdate = datestr[1]+'-'+datestr[0]+'-'+datestr[2];
        return Date.parse(retdate);
    },
     gettimestampmonthyear: function(temp)
    {
        datestr = temp.split('-');
        retdate = '01'+' '+datestr[0]+' 20'+datestr[1];
        return Date.parse(retdate);
    },        
    gettimestampmonth: function(temp)
    {
        datestr = temp.split('-');
        retdate = '01'+' '+datestr[0]+' 20'+datestr[1];
        return Date.parse(retdate);
    },
    
    getDayNamesArray:function(){
    
        var dayWeek    =  new Array();
        
        dayWeek[0]     =   'Su';
        dayWeek[1]     =   'Mo';
        dayWeek[2]     =   'Tu';
        dayWeek[3]     =   'We';
        dayWeek[4]     =   'Th';
        dayWeek[5]     =   'Fr';
        dayWeek[6]     =   'Sa';
        
        return dayWeek;
    },
     
     
};