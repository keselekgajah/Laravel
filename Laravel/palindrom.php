<?php
$input  = "Ibu ratna antar ubi";
$input = strtolower($input);
$input = str_replace(' ', '', $input);

if ($input == strrev($input))
{
    echo "$input = true";
}
else
{
    echo "$input = false";
}
?>



