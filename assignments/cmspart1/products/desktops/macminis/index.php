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
                define ('TITLE', 'ASCS | Mac Mini'); // DEFINE TITLE OF PAGE
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
            
            <h1>iMac</h1>
            
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
                    <img src="http://owencsis410.com/assignments/cmsprojectpart1/pictures/products/macmini.png" alt="Mac Mini" style="width:300px;height:300px;">
                </div>
                
                <div class="productcontent">
                    <p>The Mac Mini is a sleek machine that is not only powerful, but also affordable. The Mac Mini is the best choice for organizations who already have monitors, keyboard, mice, etc., and only need the computing device itself.
                    </p>
                </div>
            </div>
            
            <form action="index.php?name=<?php echo$itemArray['name'];?>&price=<?php echo $itemArray['price'];?>&qty=<?php echo $itemArray['qty'];?>" method="post">
                
                <table>
                    
                    <tr>
                    
                        <td>Model 1: 1.4GHz processor, 500GB HDD, 4GB RAM. Price: $449.00<br/ ><a href="index.php?name=MacMiniModel1&price=449.00&qty=1">Add to Cart</a>
                        </td>
                        
                        <td>Model 2: 2.6GHz processor, 1TB HDD, 8GB RAM. Price: $649.00<br/ ><a href="index.php?name=MacMiniModel2&price=649.00&qty=1">Add to Cart</a>
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