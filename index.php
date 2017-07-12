<?php
include 'holiday.php';

$holidays = new holiday();
$holidays = $holidays->formatToJson();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <label>Enter date to verify</label>
  <br><br>
  <input type="date" name="" value="" max="9999-12-31" id = "date_entry">
  <br><br>
  <div class="result_div" style="display:none">
  </div>
  <br><br>
  <button type="button" name="button" onclick="verify()">Verify</button>
  <br><br><br>
  <div class="holiday_list">
  </div>
</body>
</html>
<script
src="https://code.jquery.com/jquery-3.2.1.min.js"
integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
crossorigin="anonymous"></script>
<script type="text/javascript" src = "holiday.js"></script>


<script type="text/javascript">
var holidays = {};

initHolidays(function () {
  $.each(holidays,function(key,value){
    holidays[key] = value;
  });
});

function verify(){
  var date = $("#date_entry").val();
  var flag = "It is not a holiday";
  $.each(holidays, function(key, value){
    if (date == value) {
      flag = "It is a holiday: " + key;
    }
  });
  $(".result_div").hide();
  $(".result_div").html(flag);
  $(".result_div").show();
}

// var holidays = <?php echo $holidays; ?>;
// $.each(holidays,function(key,value){
//   $("body").append(key + ": " + value + "<br>");
// });

</script>
