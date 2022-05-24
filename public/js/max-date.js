/* can't select past dates */

/*
$(function(){
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();

    var maxDate = year + '-' + month + '-' + day;

    $('#end_date').attr('min', maxDate);
});
 */

$(function(){var t=new Date,e=t.getMonth()+1,n=t.getDate(),a=t.getFullYear();e<10&&(e="0"+e.toString()),n<10&&(n="0"+n.toString());var r=a+"-"+e+"-"+n;$("#end_date").attr("min",r)});
