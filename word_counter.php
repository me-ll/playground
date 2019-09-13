<?php
/*
1. Count words in a string
    - count words that have ., ', or - as one word.


2. Count how many times vocabularies are used
    - Count uppper and lower case words as same one


*/



function countWords($input){

    // count words that have . as one word
    $tmp = $input.' '; //remove . from last vocabulary
    $tmp = str_replace('. ',' ',$tmp); //replace ". + a space" to " a space"

    // 1-1.All vocabularies to count
    $all_vocab_ary  = str_word_count($tmp, 1, '0123456789.');

    // 1-2.The number of words
    //$count  = str_word_count($tmp); //It counts words that has . as different words
    $count = count($all_vocab_ary);

    // 2. How many times vocabularies are used
    $count_ary = array();
    foreach($all_vocab_ary as $vocab){

        $vocab_lower = strtolower($vocab);
        $count_ary[$vocab_lower]++;

    }

    $result = array();
    $result['count_all'] = $count;
    $result['all_vocab_list'] = $all_vocab_ary;
    $result['count_by_vocab'] = $count_ary;

    return $result;

}



// $test_sentence = "test    t.e.s.t test2test, te'st test. test 7 hello-world TEST Test.";
// $count_result = countWords($test_sentence);
// print_r($count_result);

/*
Array
(
    [count_all] => 10
    [all_vocab_list] => Array
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

    [count_by_vocab] => Array
        (
            [test] => 5
            [t.e.s.t] => 1
            [test2test] => 1
            [te'st] => 1
            [7] => 1
            [hello-world] => 1
        )

)
*/

?>
