<?php session_start();?>

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
            
            <?php //HEADER
                define ('TITLE', 'ASCS | Welcome'); // DEFINE TITLE OF PAGE
                Include('templates/header.html');
            ?>
            
        </div>
        
        
        <!--MENU-->
        <div class="menu">
            
            <?php
                Include('templates/menu.html');
            ?>
            
        </div>
        
        <!--CONTENT-->
        <div class="content">
    
            <h1>Welcome</h1>
            
            <?php
            
                // connects to database
                if ($dbc = new mysqli('mysql3.hostica.com', 'natedog_admin1', 'password', 'natedog_db')) {
                    $query = "SELECT * FROM acsc_main_page"; // queries for content
                    if ($r = $dbc->query($query)) {
                        $n = $r->num_rows;
                        
                        if ($n > 0) {
                            // store info in array
                            $row = $r->fetch_array(); 
                            // prints information
                           
                            print "<p>{$row['content']}</p>";
                            
                            // if user is publisher or administrator, user can edit content
                            if (($_SESSION['user'])=="Publisher" || ($_SESSION['user'])=="Admin") {
                                print "<div class=\"editor\">
                                    <a href=\"edit.php?id={$row['id']}\">Edit</a>
                                </div>";
                            }
                            // if user is administrator, user can delete content
                            if (($_SESSION['user'])=="Admin") {
                                print "<div class=\"editor\">
                                    <a href=\"delete.php?id={$row['id']}\">Delete</a>
                                </div>";
                            }
                            
                        } else if (($_SESSION['user'])=="Admin") {
                            print "<div class=\"editor\">
                                <a href=\"add.php?id=1\">Add</a>
                            </div>";
                        }
                        
                    } 
                    
                } else {
                    print die($dbc1->connect_error);
                }
            
            ?>
    
        </div><!--CONTENT-->
        
        <!--FOOTER-->
        <div id="footer">
            
            <!--SOCIAL MEDIA-->
            <div class="socialmedia">
                
                <?php Include('templates/socialmedia.html');?>
            
            </div><!--SOCIAL MEDIA-->
            
            <?php Include('templates/footer.html');?>
            
        </div><!--FOOTER-->
    
    </div><!--WRAPPER-->
    
</body>
</html>