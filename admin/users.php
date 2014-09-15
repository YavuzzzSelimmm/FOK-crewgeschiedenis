<?php

if($user->username != "admin"){
    header("location: index.php");
}

$rollen = new Rollen();
$subsites = new Subsites();

if(isset($_GET["delete_user"])){
    
    $id_to_delete = $_GET["delete_user"];
    $rollen->verwijder_rollen_van_gebruiker($id_to_delete);
    $user->delete_user($id_to_delete);
    header("location: index.php?admin=users");
}

$smarty->assign("subsites", $subsites->haal_subsites());
$smarty->display($template_file);   