<?php
/**
 * Reference
 *https://www.php.net/manual/en/language.references.whatdo.php
 *
 *
 * 参照渡し
 * https://www.php.net/manual/ja/language.references.pass.php
 */

//1. Assign By Reference

$a = 0;
echo 'a:'.$a."\n";

$b =& $a;
echo 'a:'.$a."\n";
echo 'b:'.$b."\n";

$a += 3;
echo 'a:'.$a."\n";
echo 'b:'.$b."\n";

$c = 0;
$d = $c;
$c += 3;
echo 'c:'.$c."\n";
echo 'd:'.$d."\n";

//2. Pass By Reference

function ref_test(&$var){
    $var++;
}
$e = 1;
ref_test($e);
echo 'e:'.$e."\n";

//3. Return By Reference

?>