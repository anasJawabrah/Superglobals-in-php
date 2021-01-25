<?php 


if (isset($_REQUEST['go'])) {

    if (empty($_REQUEST["url"])) {
    $nameErr = "URL is required";
    } else {
    $url =$_REQUEST["url"];

    header('Location: https://www.google.com/search?q='.$url);

    }

}

// get you can use it without any form by <a></a>
// as a query string in YouTube 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q2</title>
</head>
<body>
    <form method="get" action="q2.php?" >
    <label>Google Search :</label>
    <br> <br>
    <input type="text" name="url" >
    <input type="submit" name="go">
    </form>
</body>
</html>

