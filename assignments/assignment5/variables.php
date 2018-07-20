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

$data = <<<DATA
    $mary_name
    <br />
    Relationship: Mother
    <br />
    <a href="$mary_link">Click here</a>
    <br />
    <br />
    
    $rick_name
    <br />
    Relationship: Father
    <br />
    <a href="$rick_link">Click here</a>
    <br />
    <br />
    
    $doris_name
    <br />
    Relationship: Grandmother
    <br />
    <a href="$doris_link">Click here</a>
    <br />
    <br />
    
    $john_name
    <br />
    Relationship: Grandfather
    <br />
    <a href="$john_link">Click here</a>
    <br />
    <br />
    
    $matthew_name
    <br />
    Relationship: Brother
    <br />
    <a href="$matthew_link">Click here</a>
    <br />
    <br />
DATA;

$form = <<<FORM
    <form action="familyarray.php" method="post">
        <select name="familyname">
            <option value="maryowen">Mary Owen</option>
            <option value="rickowen">Rick Owen</option>
            <option value="dorisowen">Doris Owen</option>
            <option value="johnowen">John Owen</option>
            <option value="matthewowen">Matthew Owen</option>
        </select><br />
        
        Career:<input type="text" name="career"><br />
        Favorite Color:<input type="text" name="color"><br />
        Favorite Season:<input type="text" name="season"><br />
        Education:<input type="text" name="education"><br />
        
        <input type="submit" formaction="showfamily.php">
    </form>

FORM;
?>