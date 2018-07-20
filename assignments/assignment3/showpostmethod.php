<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="\css\style.css"/>
    <title>Assignment 3</title>
</head>
<body>
    <?php ini_set ('display_errors', 1);
    error_reporting (E_ALL | E_STRICT);
    ?>
    
    <!--Menu-->
    <?php 
        include("../../menu.php");
    ?>
    
    <p>Thank your for leaving your feedback.</p>
    
    <?php 
        include("postmethod.php");
    
        echo "Name: $name";
    
        echo "<table align='center'>
            <!--Header-->
            <tr>
                <th>Questions</th>
                <th>MacBook Pro</th>
                <th>Mac Mini</th>
                <th>iPad Air</th>
                <th>iMac</th>
                <th>iPad Pro</th>
            </tr>
            
            <!--Question 1-->
            <tr>
                <td>Would you buy this product at this price?</td>
                <td>$macbookproprice</td>
                <td>$macminiprice</td>
                <td>$ipadairprice</td>
                <td>$imacprice</td>
                <td>$ipadproprice</td>
            </tr>
            
            <!--Question 2-->
            <tr>
                <td>How likely would it be for your organization to purchase this product?</td>
                <td>$macbookproliklihood</td>
                <td>$macminiliklihood</td>
                <td>$ipadairliklihood</td>
                <td>$imacliklihood</td>
                <td>$ipadproliklihood</td>
            </tr>
            
            <!--Question 3-->
            <tr>
                <td>Are the configurations for these devices suitable for your environment?</td>
                <td>$macbookprosuitable</td>
                <td>$macminisuitable</td>
                <td>$ipadairsuitable</td>
                <td>$imacsuitable</td>
                <td>$ipadprosuitable</td>
            </tr>
            
            <!--Question 4-->
            <tr>
                <td>If you were to purchase this device, how many would you be looking to purchase?</td>
                <td>$macbookproquantity</td>
                <td>$macminiquantity</td>
                <td>$ipadairquantity</td>
                <td>$imacquantity</td>
                <td>$ipadproquantity</td>
            </tr>
            
            <!--Question 5-->
            <tr>
                <td>How many students are in your school?</td>
                <td>$macbookprostudentquantity</td>
                <td>$macministudentquantity</td>
                <td>$ipadairstudentquantity</td>
                <td>$imacstudentquantity</td>
                <td>$ipadprostudentquantity</td>
            </tr>
        </table>";
    
        echo "Comments: $comments";
    ?>
    
    <!--Menu-->
    <?php 
        include("../../footer.php");
    ?>
</body>
</html>