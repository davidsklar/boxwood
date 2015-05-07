<?php 
$r = boxwood_new();
boxwood_add_text($r, "mon");
boxwood_add_text($r, "monkey");
boxwood_add_text($r, "monotreme");
$c = boxwood_replace_text($r, "a mont monkeys mono eat monotremes",'*');
print $c;
print "\n";
/* and now in a different order */
$r = boxwood_new();
boxwood_add_text($r, "monotreme");
boxwood_add_text($r, "monkey");
boxwood_add_text($r, "mon");
$c = boxwood_replace_text($r, "a mont monkeys mono eat monotremes",'*');
print $c;
?>
