<?php 

require('./db/o.php');



session_start();


if(isset($_SESSION['id'])&&$_SESSION['id'] < count($questions)){
    $index=$_SESSION['id'];

}
else{
    $index=0;
    $_SESSION['id']=$index;
}

$question=$questions[$index]['question'];
$opt=$questions[$index]['options'];

$ans1 = $opt[0] ;
$ans2 = $opt[1] ;
$ans3 = $opt[2] ;


if(isset($_REQUEST['submit'])|| isset($_REQUEST['end'])){
    
    if(!(isset($_REQUEST['choice']))){
        echo 'please select one of choices';
    }else{
        $choice=$_REQUEST['choice'];
        $_SESSION['ans'][$index]=$_REQUEST['choice'];
        echo ($_SESSION['ans'][$index]);
        $index++;
        $_SESSION['id']=$index;

        if (isset($_REQUEST['end'])) {
            header('location:end.php');
        }
    }
}

if(isset($_SESSION['ans'][$index])){
    $choice=$_SESSION['ans'][$index];
}else{
    $choice='';
}



?>

<html>
	<head>
		<title>Question</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>
		<header>
			<div class="container">
				<h1>PHP Question</h1>
			</div>
		</header>

		<main>
			<div class= "container">
				<div class= "current">Question: <?php echo $index+1; ?> of <?php echo count($questions); ?></div>

				<p class="question"><?php echo $question; ?></p>
				<form method="post" action="quiz.php">
					<ul class="choices">
                    
                        <li><input name="choice" type="radio" <?php
                        echo 'value="'.$ans1.'"'?>
                        <?php if(isset($choice) && $choice==$ans1) echo "checked";?> required=""><?php echo $ans1; ?></li>

                        <li><input name="choice" type="radio" 
                        <?php echo('value='.$ans2.'');
                        if(isset($choice) && $choice==$ans2) echo "checked";?> required=""><?php echo $ans2; ?></li>

                        <li><input name="choice" type="radio" 
                        <?php echo('value='.$ans3.'');
                        if(isset($choice) && $choice==$ans3) echo "checked";?> required=""><?php echo $ans3; ?></li>

                        
					</ul>
                    <?php if ($_SESSION['id'] == count($questions)-1){
                        
                        echo '<input type="submit" value="end" name="end">';
                        
                    }else{
                        echo '<input type="submit" value="next" name="submit">';
                        
                    }
                    
                    
                    ?>
					

                
					<br>
					<br>
					<!-- <a href="results.php" class="start"> next question</a> -->
				</form>
			</div>
		</main>
</body>
</html>