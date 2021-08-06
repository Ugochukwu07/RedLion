<?php
//db
include(ROOT_PATH . '/app/database/db.php');
//helpers
include(ROOT_PATH . '/app/helpers/validate.php');
//models
include(ROOT_PATH . '/app/models/users.php');
//variables
include(ROOT_PATH . '/app/includes/vars.php');
 
$new = new UserModel();
$data = array('firstname' => 'He6llo', 'lastname' => '', 'username' => 'Mark12', 'phone'=> '+234814-344-0606', 'email' => 'example@email.com');
dd($new->addUser($data));

/* if(isset($_POST['sign-in'])){
    unset($_POST['sign-in']);
    $new->addUser($_POST);
    $isError ? hhh : kkk; 
} */
?>