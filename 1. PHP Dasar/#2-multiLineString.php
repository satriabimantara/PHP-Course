<?php
// HereDoc style
echo <<<TAG
Ini adalah contoh multiline string
HEllo oWorld Satria \n
TAG;


// Nowdoc
// tidak bisa variable parsing
echo <<<'TAG'
Ini adalah contoh multiline string (Nowdoc)
HEllo oWorld Satria
TAG;
