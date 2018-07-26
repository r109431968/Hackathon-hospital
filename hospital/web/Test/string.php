
<?php
$str = "t h i s i s m y p h p";
print_r (explode(" ",$str));
 $array = array($str);

echo "H="."<br>";
echo substr_count("$str","h")."<br>";
echo "P=";
echo substr_count("$str","p")."<br>";
echo "T=";
echo substr_count("$str","t")."<br>";


?> 
