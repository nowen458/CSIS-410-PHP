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
    
    <?php
        $familyname=$_POST['familyname'];
        
        // switch case to determine name and picture to use
        switch($familyname) {
            case 'maryowen':
                $picture="maryowen.JPG";
                $name="Mary Owen";
                break;
            case 'johnowen':
                $picture="johnowen.JPG";
                $name="John Owen";
                break;
            case 'dorisowen':
                $picture="dorisowen.JPG";
                $name="Doris Owen";
                break;
            case 'rickowen':
                $picture="rickowen.JPG";
                $name="Rick Owen";
                break;
            case 'matthewowen':
                $picture="matthewowen.JPG";
                $name="Matthew Owen";
                break;
        }
    
        // Declare variables
        $okay = TRUE;
    
        // Storing informaiton from index.php
        $career=$_POST['career'];
        $color=$_POST['color'];
        $season=$_POST['season'];
        $education=$_POST['education'];
    
        // Storing information in array
        $family = array (
            'Career' => "$career",
            'Color' => "$color",
            'Season' => "$season",
            'Education' => "$education"
        );
    ?>
</body>
</html>