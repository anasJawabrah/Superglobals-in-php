<?php 
session_start();

if (isset($_SESSION['counter'])) {
    $_SESSION['counter']++;
    
    echo "You counter value is : ".$_SESSION['counter'];
}else{
    $_SESSION['counter']=1;
    echo 'Your counter value is :'.$_SESSION['counter'];

}

?>