<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="\assignments\cmsprojectpart2\css\style.css"/>
    <?php //ERROR-CHECKING
        ini_set ('display_errors', 1);
        error_reporting (E_ALL | E_STRICT);
    ?>
</head>
    
    
<body>
    
    <div id="wrapper">
        
        <!--HEADER-->
        <div id="header">
            
            <?php //HEADER
                define ('TITLE', 'ASCS | Checkout'); // DEFINE TITLE OF PAGE
                Include('../templates/header.html');
            ?>
            
        </div>
        
        
        <!--MENU-->
        <div class="menu">
            
            <?php
                Include('../templates/menu.html');
            ?>
            
        </div>
        
        <!--CONTENT-->
        <div class="content">
            
            <h1>Checkout</h1>
            
            <div class="simplestatement">
                
                <p>Please enter your information below.</p>
                
            </div>
            
            <form action="" method="post">
                
                <p>Purchaser Information:</p>
                <p>First name: <input type="text" name="firstname" size="20"/></p>
                <p>Last Name: <input type="text" name="lastname" size="20"/></p>
                <p>Email: <input type="text" name="email" size="20"/></p>
                
                <p>Shipping Address</p>
                <p>Street Address: <input type="text" name="streetaddress" size="20"/></p>
                <p>City: <input type="text" name="city" size="20"/></p>
                <p>State: <input type="text" name="state" size="2"/></p>
                <p>Zip: <input type="text" name="zip" size="20"/></p>
                <p>Credit Card: <input type="text" name="creditcard" size="20"/></p>
                <p>Expliration: <input type="text" name="expiration" size="4"/></p>
                <p>CVC: <input type="text" name="cvc" size="20"/></p>
                

                <!--SUBMIT BUTTON-->
                <input type="submit" name="submit" formaction="confirmation.php">

            </form> <!--END FUNCTION-->
            
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