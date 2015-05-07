<?php 
$def = boxwood_new();
$alt = boxwood_new();
boxwood_set_word_boundary_bytes($alt, "()");
boxwood_add_text($def, "xxx");
boxwood_add_text($alt, "xxx");

$tests = array(
    'aaaxxx',
    'aaa xxx bbb',
    'aaa(xxx)bbb',
    'xxx',
    'aaa-xxx-bbb',
);

foreach ($tests as $test) {
    echo boxwood_replace_text($def, $test, '*', false), "\n";
    echo boxwood_replace_text($def, $test, '*', true), "\n";
    echo boxwood_replace_text($alt, $test, '*', false), "\n";
    echo boxwood_replace_text($alt, $test, '*', true), "\n";
    echo "\n";
}
?>
