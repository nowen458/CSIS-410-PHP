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
                define ('TITLE', 'ASCS | FAQs'); // DEFINE TITLE OF PAGE
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
    
            <h2>When was ASCS Started?</h2>
            
            <p>ASCS originally started in 1963 as Christian Book Source and was later renamed in 2008.</p>
            
            <h2>What is ASCS?</h2>
            
            <p>ASCS is an organization that provides quality tools and equipment to Christian schools to further education and assist in providing a Godly education.</p>
            
            <h2>Are there discounts when purchasing from ASCS?</h2>
            
            <p>Yes, our items are discounted at the Apple education rate. We also provide discounts for volume orders.</p>
            
            <h2>Is purchasing from ASCS secure?</h2>
            
            <p>Yes, we provided standard e-commerce encryption and protect your financial information in secure databases.</p>
            
            <h2>Is there a cost for shipping?</h2>
            
            <p>We believe in saving as much money as we can for our customers. All items, no matter how large or small, are shipped free of charge.</p>
            
            <h2>What about tax?</h2>
            
            <p>Due to the nature of our business and being an online retailer, purchases made from our website are tax-exempt, saving you even more money.</p>
            
            
    
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