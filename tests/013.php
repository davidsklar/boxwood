<?php 
$r = boxwood_new();
boxwood_add_text($r, "ɹǝqɯǝɯ");

$tests = array(
    'ǝɔuǝıɹǝdxǝ ɹǝqɯǝɯ ɐƃǝɯo',
    'ǝɔuǝıɹǝdxǝɹǝqɯǝɯ ɐƃǝɯo',
    'ǝɔuǝıɹǝdxǝ ɹǝqɯǝɯɐƃǝɯo',
    'ǝɔuǝıɹǝdxǝɹǝqɯǝɯɐƃǝɯo',
    'ǝɔuǝıɹǝdxǝ(ɹǝqɯǝɯ)ɐƃǝɯo',
    'ɹǝqɯǝɯ ɐƃǝɯo',
    'ǝɔuǝıɹǝdxǝ ɹǝqɯǝɯ',
);

foreach ($tests as $test) {
    echo boxwood_replace_text($r, $test, '*', false), "\n";
    echo boxwood_replace_text($r, $test, '*', true), "\n";
    echo "\n";
}
?>
