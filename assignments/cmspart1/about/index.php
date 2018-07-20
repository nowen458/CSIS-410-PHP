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
                
                <h1><a href="/assignments/cmsprojectpart1/about/index.php">About Us</a></h1>
                <h1>|</h1>
                <h1><a href="/assignments/cmsprojectpart1/about/beliefs.php">What We Believe</a></h1>
                <h1>|</h1>
                <h1><a href="/assignments/cmsprojectpart1/about/faqs.php">FAQs</a></h1>
                
            </div><!--SUBMENU-->
    
            <p>In 1963, Christian Book Source began to provide Christian schools access to affordable and quality teaching materials. Due to the economy and the changing needs of Christian schools, Christian Book Source's name was changed to Apple Solutions for Christian Schools in 2008 and became the leader of sourcing schools with Apple equipment and software solutions to enhance learning and knowledge.
            </p>
    
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