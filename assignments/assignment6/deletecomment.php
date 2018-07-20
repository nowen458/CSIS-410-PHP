<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="\css\style.css"/>
    <title>Assignment 6</title>
</head>
<body>
    <!--Menu-->
    <?php 
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    include("../../menu.php");
    
    echo "Please add a Comment.";
    
    //authenticate to take user to new form
    if ($dbc1 = new mysqli('mysql3.hostica.com', 'natedog_admin1', 'password', 'natedog_db')) {
        print '<p>Connected to database.</p>'; //login to database
    } else {
        print die($dbc1->connect_error);
    }

    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        print '<form action="" method="post">
                    <p>Are you sure you want to delete this entry?</p>
                    <input type="hidden" name="id" value="' . $_GET['id'] . '"/>
                    <input type="submit" name="submit" value="Delete"/>
                    </p>
               </form>';
    } if (isset($_POST['id']) && is_numeric($_POST['id'])) {
        $query = "DELETE FROM owen_comments_table WHERE id={$_POST['id']} LIMIT 1";
        $runquery = $dbc1->query($query);
        print "Comment has been deleted.";
    }
    ?>
    
    <!--Footer-->
    <?php 
        include("../../footer.php");
    ?>
</body>
</html>