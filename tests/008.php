<?php 
$r = boxwood_new(false);
boxwood_add_text($r, "monkey");
boxwood_add_text($r, "salad");
boxwood_add_text($r, "ŚÄłäđ");
$c = boxwood_replace_text($r, "My monkey ate some salad today and also some ŚÄłäđ and śäłäđ.","*");
print $c;
?>
