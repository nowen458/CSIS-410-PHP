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
                define ('TITLE', 'ASCS | Products'); // DEFINE TITLE OF PAGE
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
            
            <h1>Products</h1>
            
            <div class="simplestatement"><!--SIMPLE STATEMENT-->
                
                <p>Please select a product category to continue</p>
                
            </div><!--SIMPLE STATEMENT-->
            
            <div class="productpictures"><!--PRODUCT PICTURES-->
                
                <a href="desktops/index.php"><img src="http://owencsis410.com/assignments/cmsprojectpart1/pictures/products/imac.jpg" alt="Desktops" style="width:200px;height:200px;"></a>
                <p>Desktops</p>
                
                <a href="laptops/index.php"><img src="http://owencsis410.com/assignments/cmsprojectpart1/pictures/products/macbookpro.jpg" alt="Laptops" style="width:200px;height:200px;"></a>
                <p>Laptops</p>
                
                <a href="tablets/index.php"><img src="http://owencsis410.com/assignments/cmsprojectpart1/pictures/products/ipadpro.jpg" alt="Tablets" style="width:200px;height:200px;"></a>
                <p>Tablets</p>
                
            </div><!--PRODUCT PICTURES-->
   
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