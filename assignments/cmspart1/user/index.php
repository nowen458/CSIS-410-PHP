<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="\assignments\cmsprojectpart1\css\style.css"/>
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
                define ('TITLE', 'ASCS | Account'); // DEFINE TITLE OF PAGE
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
    
            <h1><a href="/assignments/cmsprojectpart2/user/login.php">Login</a></h1>
            <h1><a href="/assignments/cmsprojectpart2/user/logout.php">Logout</a></h1>
            
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