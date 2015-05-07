<?php 
$r = boxwood_new(false);
$a = boxwood_add_text($r, "Monkey");
$b = boxwood_add_text($r, "salad");
$c = boxwood_replace_text($r, "My monkey ate some Salad today.","!");
print $c;
?>
