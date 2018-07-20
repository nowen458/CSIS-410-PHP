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
    
    <p>Please select a family member from the family tree to view information.
    </p>
    
    <?php
    
    require("variables.php");// import variables.php
    
    //display info for mary owen
    echo "$mary_name";
    echo "<br />";
    echo "Relationship: Mother";
    echo "<br />";
    echo '<a href="' . $mary_link . '">Click here</a>';
    echo "<br />";
    echo "<br />";
    
    //display info for rick owen
    echo "$rick_name";
    echo "<br />";
    echo "Relationship: Father";
    echo "<br />";
    echo '<a href="' . $rick_link . '">Click here</a>';
    echo "<br />";
    echo "<br />";
    
    //display info for doris owen
    echo "$doris_name";
    echo "<br />";
    echo "Relationship: Grandmother";
    echo "<br />";
    echo '<a href="' . $doris_link . '">Click here</a>';
    echo "<br />";
    echo "<br />";
    
    //display info for john owen
    echo "$john_name";
    echo "<br />";
    echo "Relationship: Grandfather";
    echo "<br />";
    echo '<a href="' . $john_link . '">Click here</a>';
    echo "<br />";
    echo "<br />";
    
    //display info for matthew owen
    echo "$matthew_name";
    echo "<br />";
    echo "Relationship: Brother";
    echo "<br />";
    echo '<a href="' . $matthew_link . '">Click here</a>';
    echo "<br />";
    echo "<br />";
    
    ?>
    
    <!--Footer-->
    <?php 
        include("../../footer.php");
    ?>
</body>
</html>