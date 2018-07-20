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
                define ('TITLE', 'ASCS | About Us'); // DEFINE TITLE OF PAGE
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
    
            <div class="submenu"><!--SUBMENU-->
                
                <h1><a href="/assignments/cmsprojectpart2/about/index.php">About Us</a></h1>
                <h1>|</h1>
                <h1><a href="/assignments/cmsprojectpart2/about/beliefs.php">What We Believe</a></h1>
                <h1>|</h1>
                <h1><a href="/assignments/cmsprojectpart2/about/faqs.php">FAQs</a></h1>
                
            </div><!--SUBMENU-->
            
            <?php

                //authenticate to take user to new form
                if ($dbc1 = new mysqli('mysql3.hostica.com', 'natedog_admin1', 'password', 'natedog_db')) {
                } else {
                    print die($dbc1->connect_error);
                }

                if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                    print '<form action="" method="post">
                                <p>Are you sure you want to delete the information on this page?</p>
                                <input type="hidden" name="id" value="' . $_GET['id'] . '"/>
                                <input type="submit" name="submit" value="Delete"/>
                                </p>
                           </form>';
                } if (isset($_POST['id']) && is_numeric($_POST['id'])) {
                    $query = "DELETE FROM ascs_about WHERE id={$_POST['id']} LIMIT 1";
                    $runquery = $dbc1->query($query);
                    print "Entry has been deleted.";
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