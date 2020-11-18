<?php

$offset = 0;

if(isset($_POST['text']) && isset($_POST['searchfor']) && isset($_POST['replacewith'])){
    $text = $_POST['text'];
    $search = $_POST['searchfor'];
    $replace = $_POST['replacewith'];

    $string_length = strlen($search);

    if(!empty($text) && !empty($search) && !empty($replace)){
        while($strpos = strpos($text, $search, $offset)){
           $offset = $string_length + $strpos;
           $text = substr_replace($text, $replace, $strpos, $string_length);
        }
        echo $text . "</br>";
    }
}

?>

<form action="index.php" method="POST">

    <textarea name="text" id="" cols="30" rows="6"></textarea><br><br>

    <label for="">Search for:</label><br>
    <input type="text" name="searchfor"><br><br>

    <label for="">Replace with:</label><br>
    <input type="text" name="replacewith"><br><br>

    <input type="submit" value="find and replace">

</form> 