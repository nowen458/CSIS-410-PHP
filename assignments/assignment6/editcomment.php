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
    
    echo "Edit Entry";
    
    //authenticate to take user to new form
    if ($dbc1 = new mysqli('mysql3.hostica.com', 'natedog_admin1', 'password', 'natedog_db')) {
        print '<p>Connected to database.</p>'; //login to database
    } else {
        print die($dbc1->connect_error);
    }

    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        
        print '<form action="" method="POST">
        
                <p>Title: <input type="text" name="title" size="20"/></p>
                <p>Comment: <textarea name="comment" cols="40"  rows="5"></textarea></p>
                <input type="submit" name="submit" value="Update Comment" />
                <input type="hidden" name="id" value="' . $_GET['id'] . '"/>
                <input type="hidden" name="completed" value="true"/>

                </form>';
        
    } if (isset($_POST['id']) && is_numeric($_POST['id'])) {
        
        $error = FALSE;
        if (!empty($_POST['title']) && !empty($_POST['comment'])) {
            $title = trim(strip_tags($_POST['title']));
            $comment = trim(strip_tags($_POST['comment']));
        } else {
            echo "Please submit both a Title and Comment.";
            $error = TRUE;
        }
        
        if (!$error) {
            $query = "UPDATE owen_comments_table SET title = '$title', comment='$comment' WHERE id={$_POST['id']}";
            $runquery = $dbc1->query($query);
            print "Comment has been updated.";
        }
        
    }
    ?>
    
    <!--Footer-->
    <?php 
        include("../../footer.php");
    ?>
</body>
</html>