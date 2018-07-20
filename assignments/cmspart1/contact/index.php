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
                define ('TITLE', 'ASCS | Contact Us'); // DEFINE TITLE OF PAGE
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
            $firstnameerror = "";
            $lastnameerror = "";
            $emailerror = "";
            $commenterror = "";
            $firstname = "";
            $lastname = "";
            $email = "";
            $comment = "";

            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                validateVariables();
            } else {
                showForm($firstnameerror, $lastnameerror, $emailerror, $commenterror, $firstname, $lastname, $email, $comment);
            }

            function validateVariables() {

                // ASSIGN VALUES TO VARIABLES
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $email = $_POST['email'];
                $comment = $_POST['comment'];

                if (empty($firstname)) {
                    $firstname = NULL;
                    $firstnameerror = "Please enter your first name.";
                }

                if (empty($lastname)) {
                    $lastname = NULL;
                    $lastnameerror = "Please enter your last name.";
                }

                if (empty($email)) {
                    $email = NULL;
                    $emailerror = "Please enter your email address.";
                }

                if (empty($comment)) {
                    $comment = NULL;
                    $commenterror = "Please enter details pertaining to your comment.";
                }
                
                if(!($firstname && $lastname && $email && $comment)) {
                    showForm($firstnameerror, $lastnameerror, $emailerror, $commenterror, $firstname, $lastname, $email, $comment);
                }
                
                if($firstname && $lastname && $email && $comment) {
                    showConfirmation($firstname, $email, $comment);
                }

            } // END FUNCTION

            function showForm($firstnameerror, $lastnameerror, $emailerror, $commenterror, $firstname, $lastname, $email, $comment) {
                print <<< FORM
                    <h1>Contact Us.</h1>
    
                    <div class="simplestatement"><!--SIMPLE STATEMENT-->
                
                        <p>Please enter your comments and/or suggestions and we will be sure to get back with you.
                        </p>
                
                    </div>
            
                    
                    <form action="" method="post">
                
                        <p>First name: <input type="text" name="firstname" size="20" value="$firstname"/></p>
                        <p class="error">$firstnameerror</p>
                        <p>Last Name: <input type="text" name="lastname" size="20" value="$lastname"/></p>
                        <p class="error">$lastnameerror</p>
                        <p>Email: <input type="text" name="email" size="20" value="$email"/></p>
                        <p class="error">$emailerror</p>
                        <p>Comments: <textarea name="comment" rows="5" columns="40" value="$comment"></textarea></p>
                        <p class="error">$commenterror</p>

                        <!--SUBMIT BUTTON-->
                        <input type="submit" name="submit">
                
                    </form> <!--END FUNCTION-->
FORM;
            }
            
            function showConfirmation($firstname, $email, $comment) {
                print <<< FORM
                <h1>Thank You.</h1>
                
                <div class="simplestatement"><!--SIMPLE STATEMENT-->
                
                    <p>Thank you, $firstname, we have received your support request and will respond shortly.</p>
            
                </div><!--SIMPLE STATEMENT-->
            
                <h2>Details</h2>
            
                <p>Name: $firstname</p>
                <p>Email: $email</p>
                <p>Comment: $comment</p>
FORM;
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