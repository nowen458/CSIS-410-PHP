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
                define ('TITLE', 'ASCS | iPad Air'); // DEFINE TITLE OF PAGE
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
            
            <h1>iPad Air</h1>
            
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
                    <img src="http://owencsis410.com/assignments/cmsprojectpart1/pictures/products/ipadair.jpg" alt="iPad Air" style="width:300px;height:300px;">
                </div>
                
                <div class="productcontent">
                    <p>The iPad Air is the ultimate solution for students. Not only is the iPad Air affordable, it offers mobility like no other device at this price point. Available in 2 colors, this is the ideal solution for organizations on a budget.
                    </p>
                </div>
            </div>
            
            <form action="index.php?name=<?php echo$itemArray['name'];?>&price=<?php echo $itemArray['price'];?>&qty=<?php echo $itemArray['qty'];?>" method="post">
                
                <table>
                    
                    <tr>
                    
                        <td>Model 1: Silver, 32GB. Price: $299.00<br/ ><a href="index.php?name=iPadAirModel1&price=299.00&qty=1">Add to Cart</a>
                        </td>
                        
                        <td>Model 2: Silver, 128GB. Price: $399.00<br/ ><a href="index.php?name=iPadAirModel2&price=399.00&qty=1">Add to Cart</a>
                        </td>
                        
                        <td>Model 3: Space Gray, 32GB. Price: $299.00<br/ ><a href="index.php?name=iPadAirModel3&price=299.00&qty=1">Add to Cart</a>
                        </td>
                        
                        <td>Model 4: Space Gray, 128GB. Price: $399.00<br/ ><a href="index.php?name=iPadAirModel4&price=399.00&qty=1">Add to Cart</a>
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