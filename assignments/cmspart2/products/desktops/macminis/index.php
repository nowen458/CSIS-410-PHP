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
            
            <h1>Mac mini</h1>
            
            <?php
                if ($dbc1 = new mysqli('mysql3.hostica.com', 'natedog_admin1', 'password', 'natedog_db')) {
                } else {
                    print die($dbc1->connect_error);
                }
            
                if(isset($_GET['name']) && isset($_GET['price']) && isset($_GET['qty'])) {
                    $itemArray = array (
                        'name' => $_GET['name'],
                        'price' => $_GET['price'],
                        'qty' => $_GET['qty']
                    );
                    
                    $_SESSION['sessioncart'][] = $itemArray;
                    
                    $name = $itemArray['name'];
                    $price = $itemArray['price'];
                    $qty = $itemArray['qty'];
                    
                    $query = "INSERT INTO ascs_cart (name, price, qty) VALUES ('$_GET[name]', '$_GET[price]', '$_GET[qty]')";
                    
                    if ($r = $dbc1->query($query)) {
                    } else {
                        printf("Error: %s\n", $dbc1->error);
                    }
                    
                }
            ?>
            
            <div class="product">
                
                <div class="productimage">
                    <img src="http://owencsis410.com/assignments/cmsprojectpart2/pictures/products/macmini.jpg" alt="Mac Mini" style="width:300px;height:300px;">
                </div>
                
                <div class="productcontent">
                    <p>The Mac Mini is a sleek machine that is not only powerful, but also affordable. The Mac Mini is the best choice for organizations who already have monitors, keyboard, mice, etc., and only need the computing device itself.
                    </p>
                </div>
            </div>
            
            <form action="index.php?name=<?php echo$itemArray['name'];?>&price=<?php echo $itemArray['price'];?>&qty=<?php echo $itemArray['qty'];?>" method="post">
                
                <table>
                    
                    <?php
                        $query1 = "SELECT * FROM ascs_macminis WHERE id = 1";
                        if ($r = $dbc1->query($query1)) {
                                while ($row = $r->fetch_array()) {
                                    print "
                                        <tr>
                                            <td>Model: {$row['id']}</td>
                                            <td>Name: {$row['name']}</td>
                                            <td>Processor: {$row['processor']}GHz</td>
                                            <td>Hard Drive: {$row['harddrive']}gb</td>
                                            <td>RAM: {$row['ram']}GB</td>
                                            <td>Price: \${$row['price']}</td>
                                            <td><a href='index.php?name=MacMiniModel1&price=449.00&qty=1'>Add to Cart</a></td>
                                        </tr>";
                            }
                        }
                    ?>
                    
                    <?php
                        $query2 = "SELECT * FROM ascs_macminis WHERE id = 2";
                        if ($r2 = $dbc1->query($query2)) {
                                while ($row2 = $r2->fetch_array()) {
                                    print "
                                        <tr>
                                            <td>Model: {$row2['id']}</td>
                                            <td>Name: {$row2['name']}</td>
                                            <td>Processor: {$row2['processor']}GHz</td>
                                            <td>Hard Drive: {$row2['harddrive']}TB</td>
                                            <td>RAM: {$row2['ram']}GB</td>
                                            <td>Price: \${$row2['price']}</td>
                                            <td><a href='index.php?name=MacMiniModel2&price=649.00&qty=1'>Add to Cart</a></td>
                                        </tr>";
                            }
                        }
                    ?>
                    
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