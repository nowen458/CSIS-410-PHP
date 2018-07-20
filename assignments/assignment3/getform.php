<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="\css\style.css"/>
    <title>Assignment 3</title>
</head>
<body>
    <!--Menu-->
    <?php 
        include("../../menu.php");
    ?>
    
    <h1>Ranking Page</h1>
    
    <p>Welcome to our ranking page. Please read the description of the five products below and then submit your review. Thank you and have a great day.
    </p>
    
    <h1>Products</h1>
    
    <div class="product">
        <div class="productimage"><img src="pictures/macbookpro.jpg" alt="MacBook Pro" style="width:300px;height:300px;"></div>
        <div class="productcontent">
            <h3>MacBook Pro</h3>
            <p>The MacBook Pro is the best in class laptop that money can buy. With a unibody design, excellent battery life, and a powerful hardware, this is the go-to computer for those wishing for mobile workstation.
            </p>
            <ul>
                <li>Model 1: 13" display, 2.3GHz processor, 128GB SSD, 8GB RAM. Price: $1249.00</li>
                <li>Model 2: 13" display, 2.5GHz processor, 256GB SSD, 16GB RAM. Price: $1549.00</li>
                <li>Model 3: 15.4" display, 2.9GHz processor, 256GB SSD, 16GB RAM. Price: $2349.00</li>
            </ul>
        </div>
    </div>
    
    <div class="product">
        <div class="productimage"><img src="pictures/macmini.png" alt="Mac Mini" style="width:300px;height:300px;"></div>
        <div class="productcontent">
            <h3>Mac Mini</h3>
            <p>The Mac Mini is a sleek machine that is not only powerful, but also affordable. The Mac Mini is the best choice for organizations who already have monitors, keyboard, mice, etc., and only need the computing device itself.
            </p>
            <ul>
                <li>Model 1: 1.4GHz processor, 500GB HDD, 4GB RAM. Price: $449.00</li>
                <li>Model 2: 2.6GHz processor, 1TB HDD, 8GB RAM. Price: $649.00</li>
            </ul>
        </div>
    </div>
    
    <div class="product">
        <div class="productimage"><img src="pictures/ipadair.jpg" alt="iPad Air" style="width:300px;height:300px;"></div>
        <div class="productcontent">
            <h3>iPad Air</h3>
            <p>The iPad Air is the ultimate solution for students. Not only is the iPad Air affordable, it offers mobility like no other device at this price point. Available in 2 colors, this is the ideal solution for organizations on a budget.
            </p>
            <ul>
                <li>Model 1: Silver, 32GB. Price: $299.00</li>
                <li>Model 2: Silver, 128GB. Price: $399.00</li>
                <li>Model 3: Space Gray, 32GB. Price: $299.00</li>
                <li>Model 4: Space Gray, 128GB. Price: $399.00</li>
            </ul>
        </div>
    </div>
    <div class="product">
        <div class="productimage"><img src="pictures/imac.jpg" alt="iMac" style="width:300px;height:300px;"></div>
        <div class="productcontent">
            <h3>iMac</h3>
            <p>The iMac is the ultimate workstation for the organization that requires desktop power in a compact design. With a durable and aesthic design, the iMac provides the power needed for organizations to complete even the most demanding tasks.
            </p>
            <ul>
                <li>Model 1: 21.5 display, 2.3 GHz, 1TB HDD, 8GB RAM. Price: $999.00</li>
                <li>Model 2: 21.5 4K display, 3.0GHz, 1TB HDD, 8GB RAM. Price: $1199.00</li>
                <li>Model 3: 27" 5K display, 3.4GHz, 1TB HDD, 8GB RAM. Price: $1649.00</li>
            </ul>
        </div>
    </div>
    
    <div class="product">
        <div class="productimage"><img src="pictures/ipadpro.jpg" alt="iPad Pro" style="width:300px;height:300px;"></div>
        <div class="productcontent">
            <h3>iPad Pro</h3>
            <p>The iPad Pro provides all the benefits of the iPad Air, but provides additional power and screen size for the mobile professional. At 10.5" and 12.9", the iPad Pro packs laptop power into a table form factor.
            </p>
            <ul>
                <li>Model 1: 10.5" display, Silver, 256GB. Price: $749.00</li>
                <li>Model 2: 10.5" display, Space Gray, 256GB. Price: $749.00</li>
                <li>Model 3: 12.9" display, Silver, 256GB. Price: $849.00</li>
                <li>Model 4: 12.9" display, Space Gray, 256GB. Price: $849.00</li>
            </ul>
        </div>
    </div>
    
    <h1>Reviews</h1>
    
    <form action="getmethod.php" method="get">
        
        <p>Please type your name: <input type="text" name="name" size="20"/></p>
        
        <!--MacBook Pro-->
        <div>
            <h2>MacBook pro</h2>
            
            <!--1st question-->
            <p>Would you buy this product at this price?<br />
                <input type="radio" name="macbookproprice" value="Yes">Yes<br />
                <input type="radio" name="macbookproprice" value="No">No<br />
            </p>
            
            <!--2nd question-->
            <p>How likely would it be for your organization to purchase this product?<br />
                <input type="radio" name="macbookproliklihood" value="Likely">Likely<br />
                <input type="radio" name="macbookproliklihood" value="Not Likely">Not Likely<br />
            </p>
            
            <!--3rd question-->
            <p>Are the configurations for these devices suitable for your environment?<br />
                <input type="radio" name="macbookprosuitable" value="Yes">Yes<br />
                <input type="radio" name="macbookprosuitable" value="No">No<br />
            </p>
            
            <!--4th question-->
            <p>If you were to purchase this device, how many would you be looking to purchase?<br />
                <input type="radio" name="macbookproquantity" value="0-100">0-100<br />
                <input type="radio" name="macbookproquantity" value="101-500">101-500<br />
                <input type="radio" name="macbookproquantity" value="500+">500+<br />
                <input type="radio" name="macbookproquantity" value="NA">NA<br />
            </p>
            
            <!--5th question-->
            <p>How many students are in your school?<br />
                <input type="radio" name="macbookprostudentquantity" value="0-100">0-100<br />
                <input type="radio" name="macbookprostudentquantity" value="101-500">101-500<br />
                <input type="radio" name="macbookprostudentquantity" value="500+">500+<br />
            </p>
        </div>
        
        <!--Mac Mini-->
        <div>
            <h2>Mac Mini</h2>
            <!--1st question-->
            <p>Would you buy this product at this price?<br />
                <input type="radio" name="macminiprice" value="Yes">Yes<br />
                <input type="radio" name="macminiprice" value="No">No<br />
            </p>
            
            <!--2nd question-->
            <p>How likely would it be for your organization to purchase this product?<br />
                <input type="radio" name="macminiliklihood" value="Likely">Likely<br />
                <input type="radio" name="macminiliklihood" value="Not Likely">Not Likely<br />
            </p>
            
            <!--3rd question-->
            <p>Are the configurations for these devices suitable for your environment?<br />
                <input type="radio" name="macminisuitable" value="Yes">Yes<br />
                <input type="radio" name="macminisuitable" value="No">No<br />
            </p>
            
            <!--4th question-->
            <p>If you were to purchase this device, how many would you be looking to purchase?<br />
                <input type="radio" name="macminiquantity" value="0-100">0-100<br />
                <input type="radio" name="macminiquantity" value="101-500">101-500<br />
                <input type="radio" name="macminiquantity" value="500+">500+<br />
                <input type="radio" name="macminiquantity" value="NA">NA<br />
            </p>
            
            <!--5th question-->
            <p>How many students are in your school?<br />
                <input type="radio" name="macministudentquantity" value="0-100">0-100<br />
                <input type="radio" name="macministudentquantity" value="101-500">101-500<br />
                <input type="radio" name="macministudentquantity" value="500+">500+<br />
            </p>
        </div>
        
        <!--iPad Air-->
        <div>
            <h2>iPad Air</h2>
            <!--1st question-->
            <p>Would you buy this product at this price?<br />
                <input type="radio" name="ipadairprice" value="Yes">Yes<br />
                <input type="radio" name="ipadairprice" value="No">No<br />
            </p>
            
            <!--2nd question-->
            <p>How likely would it be for your organization to purchase this product?<br />
                <input type="radio" name="ipadairliklihood" value="Likely">Likely<br />
                <input type="radio" name="ipadairliklihood" value="Not Likely">Not Likely<br />
            </p>
            
            <!--3rd question-->
            <p>Are the configurations for these devices suitable for your environment?<br />
                <input type="radio" name="ipadairsuitable" value="Yes">Yes<br />
                <input type="radio" name="ipadairsuitable" value="No">No<br />
            </p>
            
            <!--4th question-->
            <p>If you were to purchase this device, how many would you be looking to purchase?<br />
                <input type="radio" name="ipadairquantity" value="0-100">0-100<br />
                <input type="radio" name="ipadairquantity" value="101-500">101-500<br />
                <input type="radio" name="ipadairquantity" value="500+">500+<br />
                <input type="radio" name="ipadairquantity" value="NA">NA<br />
            </p>
            
            <!--5th question-->
            <p>How many students are in your school?<br />
                <input type="radio" name="ipadairstudentquantity" value="0-100">0-100<br />
                <input type="radio" name="ipadairstudentquantity" value="101-500">101-500<br />
                <input type="radio" name="ipadairstudentquantity" value="500+">500+<br />
            </p>
        </div>
        
        <!--iMac-->
        <div>
            <h2>iMac</h2>
            <!--1st question-->
            <p>Would you buy this product at this price?<br />
                <input type="radio" name="imacprice" value="Yes">Yes<br />
                <input type="radio" name="imacprice" value="No">No<br />
            </p>
            
            <!--2nd question-->
            <p>How likely would it be for your organization to purchase this product?<br />
                <input type="radio" name="imacliklihood" value="Likely">Likely<br />
                <input type="radio" name="imacliklihood" value="Not Likely">Not Likely<br />
            </p>
            
            <!--3rd question-->
            <p>Are the configurations for these devices suitable for your environment?<br />
                <input type="radio" name=" imacsuitable" value="Yes">Yes<br />
                <input type="radio" name=" imacsuitable" value="No">No<br />
            </p>
            
            <!--4th question-->
            <p>If you were to purchase this device, how many would you be looking to purchase?<br />
                <input type="radio" name="imacquantity" value="0-100">0-100<br />
                <input type="radio" name="imacquantity" value="101-500">101-500<br />
                <input type="radio" name="imacquantity" value="500+">500+<br />
                <input type="radio" name="imacquantity" value="NA">NA<br />
            </p>
            
            <!--5th question-->
            <p>How many students are in your school?<br />
                <input type="radio" name="imacstudentquantity" value="0-100">0-100<br />
                <input type="radio" name="imacstudentquantity" value="101-500">101-500<br />
                <input type="radio" name="imacstudentquantity" value="500+">500+<br />
            </p>
        </div>
        
        <!--iPad Pro-->
        <div>
            <h2>iPad Pro</h2>
            <!--1st question-->
            <p>Would you buy this product at this price?<br />
                <input type="radio" name="ipadproprice" value="Yes">Yes<br />
                <input type="radio" name="ipadproprice" value="No">No<br />
            </p>
            
            <!--2nd question-->
            <p>How likely would it be for your organization to purchase this product?<br />
                <input type="radio" name="ipadproliklihood" value="Likely">Likely<br />
                <input type="radio" name="ipadproliklihood" value="Not Likely">Not Likely<br />
            </p>
            
            <!--3rd question-->
            <p>Are the configurations for these devices suitable for your environment?<br />
                <input type="radio" name="ipadprosuitable" value="Yes">Yes<br />
                <input type="radio" name="ipadprosuitable" value="No">No<br />
            </p>
            
            <!--4th question-->
            <p>If you were to purchase this device, how many would you be looking to purchase?<br />
                <input type="radio" name="ipadproquantity" value="0-100">0-100<br />
                <input type="radio" name="ipadproquantity" value="101-500">101-500<br />
                <input type="radio" name="ipadproquantity" value="500+">500+<br />
                <input type="radio" name="ipadproquantity" value="NA">NA<br />
            </p>
            
            <!--5th question-->
            <p>How many students are in your school?<br />
                <input type="radio" name="ipadprostudentquantity" value="0-100">0-100<br />
                <input type="radio" name="ipadprostudentquantity" value="101-500">101-500<br />
                <input type="radio" name="ipadprostudentquantity" value="500+">500+<br />
            </p>
        </div>
        
        <p>Please enter any additional comments: <textarea name="comments" rows="3" columns="30"></textarea></p>
        <input type="submit" formaction="showgetmethod.php">
    </form>
    
    <!--Menu-->
    <?php 
        include("../../footer.php");
    ?>
</body>
</html>