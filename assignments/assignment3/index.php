<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="\css\style.css"/>
    <title>Assignment 3</title>
</head>
<body>
    <!--Menu-->
    <?php 
        include("../../menu.php");
    ?>
    
    <p>Welcome, please select a method of completing a survey.</p>
    
    <!--Buttons for user to select survey method-->
    <div class="button">
        <button type="button"><a href="getform.php">Get Method</a></button>
        <button type="button"><a href="postform.php">Post Method</a></button>
    </div>
    
    <!--Footer-->
    <?php 
        include("../../footer.php");
    ?>
</body>
</html>