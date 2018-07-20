<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="\css\style.css"/>
    <title>Assignment 1</title>
</head>
<body>
    <div id="footer">
        <a href="https://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0!" height="31" width="88" /></a>
        <?php
        filemtime("index.php");
        echo "<br />";
        echo "Last modified: ".date("F d Y H:i:s.", filemtime("index.php"));
        if (!isset($_SESSION['user'])) {
        echo " User not logged in.";
        } else echo " User: {$_SESSION['user']}";
        if (isset($_SESSION['role'])) {
            echo " Role: {$_SESSION['role']}";
        }
        if (isset($_SESSION['user'])) {
            echo " <a href='logoutquestion.php'>Logout</a>";
        }
        ?>
    </div>
</body>
</html>