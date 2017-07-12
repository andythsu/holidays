# holidays
### holiday_lib.php returns a JSON object containing holiday names and dates. It is a library and can be used directly
### holiday.php is a php class and has functions to create holidays, get holidays, and verify holidays
### holiday.js has function that extracts data from holiday_lib using ajax async technique and initializes holidays in JSON format
### Sample:
``` php
<?php
$holidays = new Holiday();
?>
```
``` javascript
var holidays = <?php echo $holidays ?>;
 $.each(holidays,function(key,value){
   $("body").append(key + ": " + value + "<br>");
});
```
