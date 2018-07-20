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
                define ('TITLE', 'ASCS | Tablets'); // DEFINE TITLE OF PAGE
                Include('../../templates/header.html');
            ?>
            
        </div><!--HEADER-->
        
        <!--MENU-->
        <div class="menu">
            
            <?php //MENU
                Include('../../templates/menu.html');
            ?>
            
        </div><!--MENU-->
        
        <div class="content"><!--CONTENT-->
            
            <h1>Tablets</h1>
            
            <div class="simplestatement"><!--SIMPLE STATEMENT-->
                
                <p>Please select a product to continue</p>
                
            </div><!--SIMPLE STATEMENT-->
            
            <div class="productpictures"><!--PRODUCT PICTURES-->
                
                <a href="ipadairs/index.php"><img src="http://owencsis410.com/assignments/cmsprojectpart1/pictures/products/ipadair.jpg" alt="iPad Airs" style="width:200px;height:200px;"></a>
                <p>iPad Air</p>
                
                <a href="ipadpros/index.php"><img src="http://owencsis410.com/assignments/cmsprojectpart1/pictures/products/ipadpro.jpg" alt="iPad Pros" style="width:200px;height:200px;"></a>
                <p>iPad Pro</p>
                
            </div><!--PRODUCT PICTURES-->
   
        </div><!--CONTENT-->
        
        <!--FOOTER-->
        <div id="footer">
            
            <!--SOCIAL MEDIA-->
            <div class="socialmedia">
                
                <?php Include('../../templates/socialmedia.html');?>
            
            </div><!--SOCIAL MEDIA-->
            
            <?php Include('../../templates/footer.html');?>
            
        </div><!--FOOTER-->
    
    </div><!--WRAPPER-->
    
</body>
</html>