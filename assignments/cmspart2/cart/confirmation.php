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
            
            <?php

            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $streetaddress = $_POST['streetaddress'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $zip = $_POST['zip'];
            $creditcard = $_POST['creditcard'];
            $expiration = $_POST['expiration'];
            $cvc = $_POST['cvc'];
            
            ?>
            
            <h1>Confirmation</h1>
            
            <div class="simplestatement">
                
                <p>Thank you, <?php echo $firstname;?>. Your order has been placed.</p>
                
            </div>
            
            <h2>Details</h2>
            
            <p>Name: <?php echo $firstname;?> <?php echo $lastname;?></p>
            <p>Email: <?php echo $email;?></p>
            <p>Address: <?php echo $streetaddress;?>, <?php echo $city;?>, <?php echo $state;?>, <?php echo $zip;?></p>
            <p>Credit Card: <?php echo $creditcard;?></p>
            <p>Expiration: <?php echo $expiration;?></p>
            <p>CVC: <?php echo $cvc;?></p>
            
            
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