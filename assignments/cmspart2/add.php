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
            
            <?php
                define ('TITLE', 'ASCS | Add Content'); // DEFINE TITLE OF PAGE
                Include('templates/header.html');
            ?>
            
        </div><!--HEADER-->
        
        <!--MENU-->
        <div class="menu">
            
            <?php //MENU
                Include('templates/menu.html');
            ?>
            
        </div><!--MENU-->
        
        <div class="content"><!--CONTENT-->
            
            <h2>Please add content.</h2>
            
            <?php
                //authenticate to take user to new form
                if ($dbc1 = new mysqli('mysql3.hostica.com', 'natedog_admin1', 'password', 'natedog_db')) {
                } else {
                    print die($dbc1->connect_error);
                }

                if (isset($_GET['id']) && is_numeric($_GET['id'])) {

                    print '<form action="" method="POST">

                            <p>Text: <textarea name="content" cols="40"  rows="5"></textarea></p>
                            <input type="submit" name="submit" value="Add Content" />
                            <input type="hidden" name="id" value="' . $_GET['id'] . '"/>
                            <input type="hidden" name="completed" value="true"/>

                            </form>';

                } if (isset($_POST['id']) && is_numeric($_POST['id'])) {

                    $error = FALSE;
                    if (!empty($_POST['content'])) {
                        $content = trim(strip_tags($_POST['content']));
                    } else {
                        echo "Please enter a complete entry.";
                        $error = TRUE;
                    }

                    if (!$error) {
                        $query = "INSERT INTO acsc_main_page VALUES (id, content), ({$_POST['id']}, '$content')";
                        $runquery = $dbc1->query($query);
                        print "<p>Content has been added.</p>";
                    }

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