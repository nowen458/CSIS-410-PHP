<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="\assignments\cmsprojectpart2\css\style.css"/>
    
</head>
    
    
<body>
    
    <div id="wrapper">
        
        <!--HEADER-->
        <div id="header">
            
            <?php
                define ('TITLE', 'ASCS | Login'); // DEFINE TITLE OF PAGE
                Include('../templates/header.html');
            ?>
            
        </div><!--HEADER-->
        
        <!--MENU-->
        <div class="menu">
            
            <?php //MENU
                Include('../templates/menu.html');
            ?>
            
        </div><!--MENU-->
        
        <div class="content"><!--CONTENT-->
            
            <?php
            
                // connect to database
                if ($dbc = new mysqli('mysql3.hostica.com', 'natedog_admin1', 'password', 'natedog_db')) {
                } else {
                    print die($dbc->connect_error);
                }
            
                // if form is submitted, verify username and password
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    if (!empty($_POST['username']) && !empty($_POST['password'])) {
                        $query1 = $dbc->query("SELECT * FROM ascs_user WHERE username = '" . $_POST['username'] . "' AND password = '" . $_POST['password'] . "'") or die($dbc1->connect_error); // queries database to see if username and password match
                        $rows = $query1->num_rows; // assigns the number of rows to $rows

                        // if rows is greater than 0 (a match), set loggedin to TRUE and store the username in session variable
                        if ($rows > 0) {
                            $_SESSION['loggedin'] = TRUE;
                            $_SESSION['user'] = $_POST['username'];
                            print '<p>You have successfully logged in.</p>';
                        } else {
                            print '<p>The incorrect username and/or password was entered. Please try again.</p>';
                        }
                    } else {
                        print '<p>Please enter both a username and password.</p>';
                    }
                }

                // if user is not logged in, show form
                if (($_SESSION['loggedin'] == FALSE)) {
                    print '
                        <form action = "" method = "post">
                            <p>Username<input type = "text" name = "username"/></p>
                            <p>Password<input type = "text" name = "password"/></p>
                            <input type="submit" name="submit" formaction="">
                        </form>';
                } else if ($_SERVER['REQUEST_METHOD'] !== 'POST'){ // if the user did not just submit a form, say that user is already logged in
                    print '<p>You are already logged in</p>';
                }
            
            ?>

        </div><!--CONTENT-->
        
        <!--FOOTER-->
        <div id="footer">
            
            <!--SOCIAL MEDIA-->
            <div class="socialmedia">
                
                <?php Include('../templates/socialmedia.html');?>
            
            </div><!--SOCIAL MEDIA-->
            
            <?php Include('../templates/footer.html');?>
            
        </div><!--FOOTER-->
    
    </div><!--WRAPPER-->
    
</body>
</html>