<?php session_start();?>

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
                define ('TITLE', 'ASCS | iMac'); // DEFINE TITLE OF PAGE
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
                    
                    $name = $_GET['name'];
                    $price = $_GET['price'];
                    $qty = $_GET['qty'];
                    
                    $query = "INSERT INTO ascs_cart ('name', 'price', 'qty') VALUES ('$name', '$price', '$qty')";
                    
                    $r -> query($query);
                    
                    
                }
            ?>
            
            <div class="product">
                
                <div class="productimage">
                    <img src="http://owencsis410.com/assignments/cmsprojectpart1/pictures/products/imac.jpg" alt="iMac" style="width:300px;height:300px;">
                </div>
                
                <div class="productcontent">
                    <p>The iMac is the ultimate workstation for the organization that requires desktop power in a compact design. With a durable and aesthic design, the iMac provides the power needed for organizations to complete even the most demanding tasks.
                    </p>
                </div>
            </div>
            
            <form action="index.php?name=<?php echo$itemArray['name'];?>&price=<?php echo $itemArray['price'];?>&qty=<?php echo $itemArray['qty'];?>" method="post">
                
                <table>
                    
                    <?php
                        $query1 = "SELECT * FROM ascs_imacs WHERE id = 1";
                        if ($r = $dbc1->query($query1)) {
                                while ($row = $r->fetch_array()) {
                                print "
                                    Model: {$row['id']}<br />
                                    Name: {$row['name']}<br />
                                    Screen Size: {$row['screensize']}<br />
                                    Hard Drive: {$row['harddrive']}<br />
                                    RAM: {$row['ram']}<br />
                                    Price: ${$row['price']}<br />";
                            }
                        }
                    ?>
                    
                    <tr>
                        <td>Model 2: 21.5 4K display, 3.0GHz, 1TB HDD, 8GB RAM. Price: $1199.00<br/ ><a href="index.php?name=iMacModel2&price=1199.00&qty=1">Add to Cart</a>
                        </td>
                    </tr>
                        
                    <tr>
                        <td>Model 3: 27" 5K display, 3.4GHz, 1TB HDD, 8GB RAM. Price: $1649.00<br/ ><a href="index.php?name=iMacModel3&price=1649.00&qty=1">Add to Cart</a>
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