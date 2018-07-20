<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
// maryowen variables
$mary_name = "Mary Owen";
$mary_career = "Stay at home mom";
$mary_color = "Purple";
$mary_season = "Fall";
$mary_education = "Bachelor's";
$mary_link = "maryowen.php";

// rickowen variables
$rick_name = "Rick Owen";
$rick_career = "DHL Delivery Service";
$rick_color = "Blue";
$rick_season = "Fall";
$rick_education = "Bachelor's";
$rick_link = "rickowen.php";
    
// dorisowen variables
$doris_name = "Doris Owen";
$doris_career = "Retired";
$doris_color = "Hazel";
$doris_season = "Spring";
$doris_education = "Bachelor's";
$doris_link = "dorisowen.php";

// johnowen variables
$john_name = "John Owen";
$john_career = "Retired";
$john_color = "Blue";
$john_season = "Summer";
$john_education = "Bachelor's";
$john_link = "johnowen.php";

// matthewowen variables
$matthew_name = "Matthew Owen";
$matthew_career = "Nurse";
$matthew_color = "Green";
$matthew_season = "Winter";
$matthew_education = "Bachelor's";
$matthew_link = "matthewowen.php";

$data = "jhloo";

$data1 = <<<DATA
    //display info for mary owen
    echo "$mary_name";
    echo "<br />";
    echo "Relationship: Mother";
    echo "<br />";
    echo '<a href="' . $mary_link . '">Click here</a>';
    echo "<br />";
    echo "<br />";
    
    //display info for rick owen
    echo "$rick_name";
    echo "<br />";
    echo "Relationship: Father";
    echo "<br />";
    echo '<a href="' . $rick_link . '">Click here</a>';
    echo "<br />";
    echo "<br />";
    
    //display info for doris owen
    echo "$doris_name";
    echo "<br />";
    echo "Relationship: Grandmother";
    echo "<br />";
    echo '<a href="' . $doris_link . '">Click here</a>';
    echo "<br />";
    echo "<br />";
    
    //display info for john owen
    echo "$john_name";
    echo "<br />";
    echo "Relationship: Grandfather";
    echo "<br />";
    echo '<a href="' . $john_link . '">Click here</a>';
    echo "<br />";
    echo "<br />";
    
    //display info for matthew owen
    echo "$matthew_name";
    echo "<br />";
    echo "Relationship: Brother";
    echo "<br />";
    echo '<a href="' . $matthew_link . '">Click here</a>';
    echo "<br />";
    echo "<br />";
DATA;
?>