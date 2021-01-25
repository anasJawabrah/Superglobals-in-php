<?php 
session_start();

if (isset($_REQUEST['go'])) {

    if (empty($_REQUEST["task"])) {
    $nameErr = "add new task";
    } else {

        
    if (($_SESSION['tasks'])) {
        $preDate=$_SESSION['tasks'];
        $upDate=$preDate.','.$_REQUEST["task"];
        $_SESSION['tasks']=$upDate;

    }else{
        $_SESSION['tasks']=
        $_REQUEST["task"];


    }
    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q4</title>
</head>
<body>
    <form method="post" action="q4.php?" >
    <label>Add :</label>
    <br> <br>
    <input type="text" name="task" >
    <input type="submit" name="go">
    </form>


    <?php

    echo('<h3>To do List</h3>
    <ul>');

    $tasks=explode(',',$_SESSION['tasks']);


    foreach ($tasks as $task) {
        echo(
        '<li>
        '.$task.'
        </li>');
    }
    echo('</ul>');
    ?>
</body>
</html>