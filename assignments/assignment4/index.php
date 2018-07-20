<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="\css\style.css"/>
    <title>Assignment 4</title>
</head>
<body>
    <?php ini_set ('display_errors', 1);
    error_reporting (E_ALL | E_STRICT);
    ?>
    
    <!--Menu-->
    <?php 
        include("../../menu.php");
    ?>
    
    <p>Welcome to Assignment 4. Please select a family member and input the correct information.</p>
    
    <form action="familyarray.php" method="post">
        <select name="familyname">
            <option value="maryowen">Mary Owen</option>
            <option value="rickowen">Rick Owen</option>
            <option value="dorisowen">Doris Owen</option>
            <option value="johnowen">John Owen</option>
            <option value="matthewowen">Matthew Owen</option>
        </select><br />
        
        Career:<input type="text" name="career"><br />
        Favorite Color:<input type="text" name="color"><br />
        Favorite Season:<input type="text" name="season"><br />
        Education:<input type="text" name="education"><br />
        
        <input type="submit" formaction="showfamily.php">
    </form>
    
    <!--Menu-->
    <?php 
        include("../../footer.php");
    ?>
</body>
</html>