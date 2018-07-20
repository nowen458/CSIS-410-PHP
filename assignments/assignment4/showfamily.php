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
    <?php ini_set ('display_errors', 1);
    error_reporting (E_ALL | E_STRICT);
    ?>
    
    <!--Menu-->
    <?php 
        include("../../menu.php");
    ?>
    
    <!--Display name-->
    <h2><?php require("familyarray.php");
         echo "$name";?>
    </h2>
    
    <!--Display picture-->
    <img src="pictures/<?php echo "$picture";?>" alt=<?php echo "$name";?> style="width:300px;height:300px;">
    
    <!--Information-->
    <?php
        
        // Validation
        if (empty($family['Career'])) {
            print "Career needs to be entered for $name.";
            $okay = FALSE;
        }
            
        if (empty($family['Color'])) {
            print "Color needs to be entered for $name.";
            $okay = FALSE;
        }
    
        if (empty($family['Season'])) {
            print "Season needs to be entered for $name.";
            $okay = FALSE;
        }
    
        if (empty($family['Education'])) {
            print "Education needs to be entered for $name.";
            $okay = FALSE;
        }
    ?>
        <!--Prints out information-->
        <ul>
            <li>Career: <?php echo $family['Career'];?></li>
            <li>Favorite Color: <?php echo $family['Color'];?></li>
            <li>Favorite Season: <?php echo $family['Season'];?></li>
            <li>Education: <?php echo $family['Education'];?></li>
        </ul>
    
    <!--Footer-->
    <?php 
        include("../../footer.php");
    ?>
</body>
</html>