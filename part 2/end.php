<?php 
session_start();
echo "<pre>";
// print_r ($_SESSION['ans']);

$rightAns=["A",'A',"A",'A','C',"A",'A',"A",'A','C'];

$indexOfAns=0;
$point=0;
foreach ($rightAns as $ans) {
    ($ans==$_SESSION['ans'][$indexOfAns])?$point++:null;
    $indexOfAns++;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Score</title>
</head>
<body>
    <?php 
    echo '<h2>your score is '.$point.' / ' .count($rightAns).'</h2>';
    ?>
    <a href="./quiz.php"> try again </a>
</body>
</html>