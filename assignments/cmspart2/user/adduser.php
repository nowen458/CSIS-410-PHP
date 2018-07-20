<?php session_start();?>

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
                define ('TITLE', 'ASCS | Add User'); // DEFINE TITLE OF PAGE
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
            
            <h1>Add User</h1>
    
            <div class="simplestatement"><!--SIMPLE STATEMENT-->

                <p>Please enter the required details to add a new user.
                </p>

            </div>
            
            <?php
                if (($_SESSION['user'])=="Admin") {
                    //authenticate to take user to new form
                    if ($dbc1 = new mysqli('mysql3.hostica.com', 'natedog_admin1', 'password', 'natedog_db')) {
                    } else {
                        print die($dbc1->connect_error);
                    }

                    if (isset($_POST['completed'])) {
                        $error = FALSE;
                        if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) {
                            $fname = trim(strip_tags($_POST['fname']));
                            $lname = trim(strip_tags($_POST['lname']));
                            $email = trim(strip_tags($_POST['email']));
                            $username = trim(strip_tags($_POST['username']));
                            $password = trim(strip_tags($_POST['password']));
                        } else {
                            echo "Please enter all required details";
                            $error = TRUE;
                        }

                        if (!$error) {
                            $query = "INSERT INTO ascs_user (fname, lname, email, username, password) VALUES ('$fname', '$lname', '$email', '$username', '$password')";
                        }

                        if ($dbc1->query($query)) {
                            echo "<p>User has been created.</p>";
                        } else {
                            print ($dbc1->error);
                        }
                    }
                }
            ?>
    
            <form action="" method="POST">

                <p>First Name: <input type="text" name="fname" size="20"/></p>
                <p>Last Name: <input type="text" name="lname" size="20"/></p>
                <p>Username: <input type="text" name="username" size="20"/></p>
                <p>Email: <input type="text" name="email" size="20"/></p>
                <p>Password: <input type="text" name="password" size="20"/></p>
                <input type="submit" name="submit" value="Create User" />
                <input type="hidden" name="completed" value="true"/>

            </form>
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