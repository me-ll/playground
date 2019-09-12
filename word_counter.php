<?php
/*
1. Count words in a string
    - count words that have ., ', or - as one word.


2. Count how many times vocabularies are used
    - Count uppper and lower case words as same one


*/

// 1. Count the number of words in a string

$input = "test    t.e.s.t test2test, te'st test. test 7 hello-world TEST Test.";

//count words that have . as one word
$tmp = $input.' '; //remove . from last vocabulary
$tmp = str_replace('. ',' ',$tmp); //replace ". + a space" to " a space"

$count  = str_word_count($tmp);
echo 'The number of words : '.$count;


$all_vocab_ary  = str_word_count($tmp, 1, '0123456789.');
print_r($all_vocab_ary);

/*

The number of words : 13

Array
(
    [0] => test
    [1] => t.e.s.t
    [2] => test2test
    [3] => te'st
    [4] => test
    [5] => test
    [6] => 7
    [7] => hello-world
    [8] => TEST
    [9] => Test
)
*/


// 2. Count how many times vocabularies are used

$count_ary = array();
foreach($all_vocab_ary as $vocab){

    $vocab_lower = strtolower($vocab); //No distinction between upper and lower case
    $count_ary[$vocab_lower]++;

}

print_r($count_ary);

/*
Array
(
    [test] => 5
    [t.e.s.t] => 1
    [test2test] => 1
    [te'st] => 1
    [7] => 1
    [hello-world] => 1
)
*/

?>
