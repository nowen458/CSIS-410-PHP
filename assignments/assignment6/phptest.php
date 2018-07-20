<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="\css\style.css"/>
    <title>Assignment 1</title>
</head>
<body>
    <!--Menu-->
    <?php
        include("../../menu.php");
    ?>
    
    <?php

        if ($dbc = new mysqli('localhost', 'natedog_admin1', 'password')) {
            print '<p>Successfully connected to MySQL!</p>';
        } else {
            print '<p>Error</p>';
        }

    ?>
    
    <!--Footer-->
    <?php
        include("../../footer.php");
    ?>
</body>
</html>