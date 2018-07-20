<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="\css\style.css"/>
    <title>Assignment 2</title>
</head>
<body>
    <!--Menu-->
    <?php 
        include("../../menu.php");
    ?>
    
    <!--Display name-->
    <h2><?php require("variables.php");
         echo "$john_name";?>
    </h2>
    
    <!--Display picture-->
    <img src="pictures/johnowen.JPG" alt="john Owen" style="width:300px;height:300px;">
    
    <!--Information-->
    <ul>
        <li>Career: <?php echo "$john_career"; ?></li>
        <li>Favorite Color: <?php echo "$john_color"; ?></li>
        <li>Favorite Season: <?php echo "$john_season"; ?></li>
        <li>Education: <?php echo "$john_education"; ?></li>
    </ul>
    
    <!--Footer-->
    <?php 
        include("../../footer.php");
    ?>
</body>
</html>