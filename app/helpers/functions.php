<?php 
    #CODE GENERATION VARIABLES
    $p_code = '0123456789';
    $e_code = 'abcdefghijklmnopqrstuvwzyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $e_cap = 'ABCDEFGHIJKLMNPQRSTUVWXYZ123456789';
    $ref_code = '0123456789abcdefghijklmnopqrstuvwzyz';
    $user_key = $p_code . $e_code;

    function generateRandomString($x, $length){
        return substr(str_shuffle(str_repeat($x, ceil($length/strlen($x)))), 1,$length);
    }

    function dd($value) { // to be deleted
        echo "<pre>", print_r($value, true), "</pre>";
        die();
    }

?>