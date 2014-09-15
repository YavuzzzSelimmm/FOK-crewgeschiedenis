<?php

if($user->username != "admin"){
    header("location: index.php");
}

$PK_Gebruiker = (isset($_GET["PK_Gebruiker"])) ? $_GET["PK_Gebruiker"] : 0;
$rollen = new Rollen();


if(isset($_POST["smtUser"])){
    
    $data = array();
    $data[":Gebruikersnaam"] = $_POST["Gebruikersnaam"];
    $data[":UserID"]= $_POST["UserID"];
    $data[":Registratiedatum"] = date("Y-m-d", strtotime($_POST["Registratiedatum"]));
    $data[":UI"] = $_POST["UI"];
    
    if($PK_Gebruiker != 0){
        //Edit
        $data[":PK_Gebruiker"] = $PK_Gebruiker;
        $user->updateUser($PK_Gebruiker, $data);    
    } else {
        $PK_Gebruiker = $user->insertUser($data);
    }
    
    if($_POST["rol"] > 0){
        
    }
    
    header("location: index.php?admin=user&PK_Gebruiker=".$PK_Gebruiker);    
}


$row = $user->getUser($PK_Gebruiker);

$rollen = (isset($PK_Gebruiker) && $PK_Gebruiker > 0) ? $rollen->haal_rollen_voor_gebruiker($PK_Gebruiker) : $rollen->haal_rollen();

$smarty->assign("gebruiker", $user->getUser($PK_Gebruiker));
$smarty->assign("rollen", $rollen);
$smarty->display($template_file);