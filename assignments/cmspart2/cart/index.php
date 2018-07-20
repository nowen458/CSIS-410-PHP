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
    <link rel="stylesheet" type="text/css" href="\assignments\cmsprojectpart2\css\style.css"/>
    
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
            
            <?php
                if ($dbc1 = new mysqli('mysql3.hostica.com', 'natedog_admin1', 'password', 'natedog_db')) {
                } else {
                    print die($dbc1->connect_error);
                }
            
                $query1 = "SELECT * FROM ascs_cart";
                $r = $dbc1->query($query1);
                $rows = $r->num_rows;
                if ($rows > 0) {
                    
            ?>
            <form method="POST">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
                <?php
                    
                    while ($row = $r->fetch_array()) {
                        extract($row);
                        
                ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['name']);?></td>
                    <td>$<?php echo htmlspecialchars($row['price']);?></td>
                    <td><?php echo htmlspecialchars($row['qty']);?></td>
                </tr>
                <?php } ?>
            </table>
            
            <input type="submit" name="submit" value="Checkout" formaction="checkout.php"><br/ >
                
            <input type="submit" name="submit" value="Empty Cart" formaction="emptycart.php"><br/ >
                
            </form>
            <?php } ?>
            
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