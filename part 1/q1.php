<?php 


if( $_REQUEST["name"] && $_REQUEST["password"] ) {
   $name= $_REQUEST["name"] ;
   $password= $_REQUEST["password"];

    echo '<ul>
    <li>Username : '.$name.'</li>
    <li>password : '.$password.'</li>
    <li>Method type : '.$_SERVER['REQUEST_METHOD']
    .'</li>
    </ul>';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q1</title>
</head>
<body>
    <form method="post" action="q1.php?d=1" >
    <label>Username:</label>
    <input type="text" name="name">
    <br> <br>
    <label>Password:</label>
    <input type="password"name="password">
    <input type="submit">
    
    </form>
</body>
</html>