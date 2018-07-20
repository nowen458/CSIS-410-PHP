<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="\assignments\cmsprojectpart1\css\style.css"/>
    
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
            
            <?php // FORM VALIDATION
            
            // INITIALIZE VARIABLES
            $username = "";
            $password = "";
            $usernameerror = "";
            $passworderror = "";
            $messageerror = "";
            
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                validateVariables();
            } else showForm($username, $password, $usernameerror, $passworderror, $messageerror);
            
            function validateVariables() {
                
                // ASSIGN VALUES TO VARIABLES
                $username = $_POST['username'];
                $password = $_POST['password'];
                
                if (empty($username)) {
                    $username = NULL;
                    $usernameerror = "Please enter username.";
                }

                if (empty($password)) {
                    $password = NULL;
                    $passworderror = "Please enter password.";
                }
                
                if (((!empty($username)) && (!empty($password))) && ((((strtolower($username)) != 'admin') && ($password != 'admin')) xor (((strtolower($username)) != 'publisher') && ($password != 'publisher')) xor (((strtolower($username)) != 'customer') && ($password != 'customer')))) {
                    $username = NULL;
                    $password = NULL;
                    $messageerror = "Invalid username and/or password. Please try again.";
                }
                
                if (!($username && $password)) {
                    showForm($username, $password, $usernameerror, $passworderror, $messageerror);
                }
                
                if ($username && $password) {
                    loginConfirmation();
                }
            }
            
            function showForm($username, $password, $usernameerror, $passworderror, $messageerror) {
                print <<< FORM
                    <h1>Login</h1>
    
                    <div class="simplestatement"><!--SIMPLE STATEMENT-->
                
                        <p>Please enter your login credentials.
                        </p>
                        
                        <p class="error">$messageerror</p>
                
                    </div><!--SIMPLE STATEMENT-->
            
                    
                    <form action="" method="post">
                
                        <p>Username: <input type="text" name="username" size="20" value="$username"/></p>
                        <p class="error">$usernameerror</p>
                        <p>Password: <input type="text" name="password" size="20" value="$password"/></p>
                        <p class="error">$passworderror</p>

                        <!--SUBMIT BUTTON-->
                        <input type="submit" name="submit">
                
                    </form>
FORM;
            } // END FUNCTION
            
            function loginConfirmation() {
                    print <<< TEXT
                        <h1>Congratulations.</h1>
    
                        <div class="simplestatement"><!--SIMPLE STATEMENT-->
                
                            <p>You have successfully logged in.
                            </p>
                
                        </div>
TEXT;
            } // END FUNCTION
            
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