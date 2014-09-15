<?php

if($user->username != "admin"){
    header("location: index.php");
}


$smarty->assign("users", $user->getAllUsers());
$smarty->display($template_file);   