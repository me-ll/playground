<?php
/*
Test code for word_counter.php
*/


// -- File for test --
require "word_counter.php";

// -- Input to check --
$input_sentence[0] = "test    t.e.s.t test2test, te'st test. test 7 hello-world TEST Test.";
$input_sentence[1] = "test    t.e.s.t test2test, te'st test. test 7 hello-world TEST Test.";
$input_sentence[2] = "this is test";
$input_sentence[3] = " a";

//How many words the inputs have..
$how_many_words[0] = 10;
$how_many_words[1] = 1;
$how_many_words[2] = 3;
$how_many_words[3] = 1;

foreach($input_sentence as $key => $check_input){

    $test_result = countWords($check_input);
    $test_result_count_all = $test_result['count_all'];

    if($test_result_count_all === $how_many_words[$key]){
        echo "OK\n";
    }else{
        echo "NG";
        echo " : test_result_count_all...".$test_result_count_all."\n";
    }

}

/*
OK
NG : test_result_count_all...10
OK
OK
*/

?>
