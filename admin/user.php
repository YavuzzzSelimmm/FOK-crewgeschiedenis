<?php

if($user->username != "admin"){
    header("location: index.php");
}

$rollen = new Rollen();
$PK_Gebruiker = (isset($_GET["id"])) ? $_GET["id"] : 0;

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
        $rollen->verwijder_rollen_van_gebruiker($PK_Gebruiker);    
    } else {
        $PK_Gebruiker = $user->insertUser($data);
    }
    

    //rol(len) toevoegen
    $aantal_rijen = $_POST["aantal_rijen"];
   
    for($i = 1; $i<=$aantal_rijen;$i++){
        
        if($_POST["row_".$i."_rol"] > 0){
            
            $data = array();
            $data[":FK_Gebruiker"] = $PK_Gebruiker;
            $data[":FK_Rol"] = $_POST["row_".$i."_rol"];
            $data[":Startdatum"] = date("Y-m-d", strtotime($_POST["row_".$i."_Startdatum"]));
            $data[":Einddatum"] = ($_POST["row_".$i."_Einddatum"] != "") ? date("Y-m-d", strtotime($_POST["row_".$i."_Einddatum"])) : NULL;
            $data[":StartURL"] = $_POST["row_".$i."_StartURL"];
            $data[":EindURL"] = $_POST["row_".$i."_EindURL"];
                        
            $rollen->invoeren_rol_voor_gebruiker($data);
        }
    }
    
    header("location: index.php?admin=user&id=".$PK_Gebruiker);    
}


$row = $user->getUser($PK_Gebruiker);


if($PK_Gebruiker > 0) {
   $smarty->assign("rollen_gebruiker", $rollen->haal_rollen_voor_gebruiker($PK_Gebruiker));
}

$smarty->assign("gebruiker", $user->getUser($PK_Gebruiker));
$smarty->assign("rollen", $rollen->haal_rollen());
$smarty->display($template_file);