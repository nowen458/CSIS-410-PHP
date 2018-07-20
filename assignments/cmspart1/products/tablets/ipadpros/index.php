<?php
    // START SESSION IF NOT ALREADY STARTED
    if (!isset($_SESSION)) {
        session_start();
    }

    // CREATE SESSIONCART ARRAY
    if (!isset($_SESSION['sessioncart'])) {
        $_SESSION['sessioncart'] = array();
    }
?>
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
                define ('TITLE', 'ASCS | iPad Pro'); // DEFINE TITLE OF PAGE
                Include('../../../templates/header.html');
            ?>
            
        </div><!--HEADER-->
        
        <!--MENU-->
        <div class="menu">
            
            <?php //MENU
                Include('../../../templates/menu.html');
            ?>
            
        </div><!--MENU-->
        
        <div class="content"><!--CONTENT-->
            
            <h1>iPad Pro</h1>
            
            <?php
            
                if(isset($_GET['name']) && isset($_GET['price']) && isset($_GET['qty'])) {
                    $itemArray = array (
                        'name' => $_GET['name'],
                        'price' => $_GET['price'],
                        'qty' => $_GET['qty']
                    );
                    
                    $_SESSION['sessioncart'][] = $itemArray;
                }
            ?>
            
            <div class="product">
                
                <div class="productimage">
                    <img src="http://owencsis410.com/assignments/cmsprojectpart1/pictures/products/ipadpro.jpg" alt="iPad Pro" style="width:300px;height:300px;">
                </div>
                
                <div class="productcontent">
                    <h3>iPad Pro</h3>
                    <p>The iPad Pro provides all the benefits of the iPad Air, but provides additional power and screen size for the mobile professional. At 10.5" and 12.9", the iPad Pro packs laptop power into a table form factor.
                    </p>
                </div>
            </div>
            
            <form action="index.php?name=<?php echo$itemArray['name'];?>&price=<?php echo $itemArray['price'];?>&qty=<?php echo $itemArray['qty'];?>" method="post">
                
                <table>
                    
                    <tr>
                    
                        <td>Model 1: 10.5" display, Silver, 256GB. Price: $749.00<br/ ><a href="index.php?name=iPadProModel1&price=749.00&qty=1">Add to Cart</a>
                        </td>
                        
                        <td>Model 2: 10.5" display, Space Gray, 256GB. Price: $749.00<br/ ><a href="index.php?name=iPadProModel2&price=749.00&qty=1">Add to Cart</a>
                        </td>
                        
                        <td>Model 3: 12.9" display, Silver, 256GB. Price: $849.00<br/ ><a href="index.php?name=iPadProModel3&price=849.00&qty=1">Add to Cart</a>
                        </td>
                        
                        <td>Model 4: 12.9" display, Space Gray, 256GB. Price: $849.00<br/ ><a href="index.php?name=iPadProModel4&price=849.00&qty=1">Add to Cart</a>
                        </td>
                    
                    </tr>
                    
                </table>
                
            </form>
   
        </div><!--CONTENT-->
        
        <!--FOOTER-->
        <div id="footer">
            
            <!--SOCIAL MEDIA-->
            <div class="socialmedia">
                
                <?php Include('../../../templates/socialmedia.html');?>
            
            </div><!--SOCIAL MEDIA-->
            
            <?php Include('../../../templates/footer.html');?>
            
        </div><!--FOOTER-->
    
    </div><!--WRAPPER-->
    
</body>
</html>