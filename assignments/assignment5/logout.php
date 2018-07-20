<?php
            
    // START SESSION
    session_start();

    // DELETE SESSION VARIABLE
    unset($_SESSION);

    // RESET SESSION ARRAY
    $_SESSION = array();

    // DESTROY SESSION
    session_destroy();
            
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="\css\style.css"/>
    <title>Assignment 5</title>
</head>
<body>
    <!--Menu-->
    <?php 
        include("../../menu.php");
    ?>
    
    <p>You are now logged out.
    </p>
    
    <!--Menu-->
    <?php 
        include("../../footer.php");
    ?>
</body>
</html>