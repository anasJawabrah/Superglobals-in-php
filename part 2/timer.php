<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>

<style> 
</style>


<script>
$(document).ready(function(){
	
//var output = $('h1');
var isPaused = false;
var time = 0;
var t = window.setInterval(function() 
{
  if(!isPaused) 
  {
	//time++;
   // output.text("Seconds: " + time);
  $("#result_shops").load('time.php');
  }
}, 1000);
//with jquery
$('.pause').on('click', function(e) 
{
  e.preventDefault();
  isPaused = true;
});
$('.play').on('click', function(e) 
{
  e.preventDefault();
  isPaused = false;
});
});
</script>

<?php 
//import questions 
require('./db/o.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  .timer-left{
    text-align: left;
    position:fixed;
    top:0;
    right: 0;
  }
  </style>
</head>
<body>
<div class="timer-left">
<h1><div class="sub_shops">Timer</div></h1>
<h1><div id="result_shops"></div></h1>

<button class="play">Play</button>
<button class="pause">Pause</button>
</div>

<?php 
require('./functions.php');

$index=$_REQUEST['id'];
$opt='';


?>
<div class="questions"> 
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<label for=""</label>
  <input type="radio" name="opt" <?php if (isset($opt) && $opt=="$value") echo "checked";?> value="$value">$value
  <input type="radio" name="opt" <?php if (isset($opt) && $opt=="male") echo "checked";?> value="male">Male
  <input type="radio" name="opt" <?php if (isset($opt) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
</form>

</div>



</body>
</html>