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

    if (isset($_POST['completed'])) {
        $error = FALSE;
        if (!empty($_POST['name']) && !empty($_POST['title']) && !empty($_POST['comment'])) {
            $name = trim(strip_tags($_POST['name']));
            $title = trim(strip_tags($_POST['title']));
            $comment = trim(strip_tags($_POST['comment']));
        } else {
            echo "Please submit both a Name, Title, and Comment.";
            $error = TRUE;
        }
        
        if (!$error) {
            $query = "INSERT INTO owen_comments_table (id, name, title, comment, date) VALUES (0, '$name', '$title', '$comment', NOW())";
        }
        
        if ($dbc1->query($query)) {
            echo "Comment has successfully been added.";
        } else {
            print ($dbc1->error);
        }
    }
    ?>
    
    <form action="" method="POST">
        
        <p>Name: <input type="text" name="name" size="20"/></p>
        <p>Title: <input type="text" name="title" size="20"/></p>
        <p>Comment: <textarea name="comment" cols="40"  rows="5"></textarea></p>
        <input type="submit" name="submit" value="Post Comment" />
        <input type="hidden" name="completed" value="true"/>
        
    </form>
    
    <!--Footer-->
    <?php 
        include("../../footer.php");
    ?>
</body>
</html>