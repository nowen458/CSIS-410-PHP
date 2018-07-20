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
    
    echo "Please select a family member from the family tree to view information.";
    
    require("variables.php");// import variables.php
    
    //display info for mary owen
    echo "<br />$mary_name";
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
    
    echo "Please login to add a comment.";

    // initialize variables
    $loggedin = false;
    $error = false;
    
    //authenticate to take user to new form
    if ($dbc1 = new mysqli('mysql3.hostica.com', 'natedog_admin1', 'password', 'natedog_db')) {
        print '<p>Connected to database.</p>'; //login to database
    } else {
        print die($dbc1->connect_error);
    }
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $query1 = $dbc1->query("SELECT * FROM owen_login_table WHERE email = '" . $_POST['email'] . "' AND password = '" . $_POST['password'] . "'") or die($dbc1->connect_error);
            $rows = $query1->num_rows;
            
            if ($rows > 0) {
                $loggedin = true;
                print '<a href = "addcomment.php">Click here to create a comment</a>';
            } else {
                $error = "The incorrect username and/or password was entered. Please try again.";
            }
        }
    }
    
    if (!$loggedin) {
        print '
            <form action = "" method = "post">
                <p>Email<input type = "text" name = "email"/></p>
                <p>Password<input type = "text" name = "password"/></p>
                <input type="submit" name="submit" formaction="">
            </form>';
    }
    
    //display comments
    $query2 = "SELECT * FROM owen_comments_table ORDER BY date DESC";
    if ($r = $dbc1->query($query2)) {
        while ($row = $r->fetch_array()) {
            print "<p><h3>Title: {$row['title']}<br />
            Name: {$row['name']}<br />
            Date: {$row['date']}<br />
            Comment: {$row['comment']}<br />
            <a href=\"editcomment.php?id={$row['id']}\">Edit</a>
            <a href=\"deletecomment.php?id={$row['id']}\">Delete</h3></a></p><hr />\n";
        }
    }
    ?>
    
    <!--Footer-->
    <?php 
        include("../../footer.php");
    ?>
</body>
</html>