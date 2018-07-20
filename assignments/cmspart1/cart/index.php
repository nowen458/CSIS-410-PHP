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
    
</head>
    
    
<body>
    
    <div id="wrapper">
        
        <!--HEADER-->
        <div id="header">
            
            <?php
                define ('TITLE', 'ASCS | Cart'); // DEFINE TITLE OF PAGE
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

            <h1>Your Cart</h1>
            
            <form action="" method="post" name="cart">
            
                <table width="600" border="1" bgcolor="#efefef">

                    <tr><!--COLUMN HEADERS-->
                        
                        <th scope="col">Item</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Cost</th>

                    </tr><!--COLUMN HEADERS-->
                    
                    <?php 
                    foreach ($_SESSION['sessioncart'] as $cartID => $cartItem) {
                        
                    ?>
                    <tr id="item<?php echo $cartID;?>">
                    
                        <td><?php echo $cartItem['name'];?></td>
                        <td>$<?php echo $cartItem['price'];?></td>
                        <td><input name="postQty[<?php echo $cartID;?>]" type = "text" id="item_<?php echo $cartID; ?>qty" value = "<?php echo $cartItem['qty'];?>" size = "2" maxlength="4"/></td>
                        <td>$
                            <?php 
                                $total = $cartItem['price'] * $cartItem['qty'];
                                echo $total;
                                $totaltotal = $totaltotal + $total;
                            ?>.00
                        </td>
                    
                    </tr>
                    
                    <?php } ?>
                    
                    <tr>
                        
                        <td>Total:</td>
                        <td></td>
                        <td></td>
                        <td>$<?php echo $totaltotal;?>.00</td>
                    
                    </tr>

                </table>
                <br/ >
                <input type="submit" name="submit" value="Checkout" formaction="checkout.php"><br/ >
                <input type="submit" name="submit" value="Empty Cart" formaction="<?php emptyCart();?>">
                
                <?php
                
                    function emptyCart() {
                        unset($_SESSION['sessioncart']);
                    }
                
                ?>
                
            </form>
            
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