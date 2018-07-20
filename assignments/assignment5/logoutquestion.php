<?php session_start();?>

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
    
    <p>Are you sure you want to log out?
    </p>
    
    <a href='logout.php'>Yes</a>
    <a href='index.php'>No</a>
    
    <!--Menu-->
    <?php 
        include("../../footer.php");
    ?>
</body>
</html>