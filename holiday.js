var holidays = {};
function initHolidays(f_callback){
  $.ajax({
    url : "holiday_lib.php",
    type : "POST",
    success : function(e){
      var returned_data = JSON.parse(e);
      $.each(returned_data, function(key, value){
        holidays[key] = value;
        $(".holiday_list").append(key + ": " + value + "<br>");
      });
      if (f_callback) f_callback();
    }
  });
}
