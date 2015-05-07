<?php 
$r = boxwood_new();
boxwood_add_text($r, "xxx");

$tests = array(
    'aaa xxx bbb',
    'aaaxxx',
    'xxxbbb',
    'aaaxxxbbb',
    'aaa(xxx)bbb',
    'xxx bbb',
    'aaa xxx',
    'aaa?xxx!bbb',
    'axxx',
    'xxxb',
    'xxx',
    '(xxx',
    'xxx)',
    "aaa\xc0xxx",               // \xc0 is an explicit word boundary
    "aaa\xc1xxx",               // \xc1 is a trash character (word)
);

foreach ($tests as $test) {
    echo boxwood_replace_text($r, $test, '*', false), "\n";
    echo boxwood_replace_text($r, $test, '*', true), "\n";
    echo "\n";
}
?>
