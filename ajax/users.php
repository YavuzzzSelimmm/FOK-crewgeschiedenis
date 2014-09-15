<?php

//Deze page mag alleen benaderd worden via een AJAX call. Hierop controleren.
if(!isset($_SERVER["HTTP_X_REQUESTED_WITH"])){
    exit;
}



$start = isset($_POST["start"]) ? $_POST["start"] : false;
$limit = isset($_POST["limit"]) ? $_POST["limit"] : false;
$numRows = isset($_POST["numRows"]) ? $_POST["numRows"] : false;
$search = $_POST["search"];
$search_subsite = $_POST["search_subsite"];
$search_rol = $_POST["search_rol"];

try{
    $query = "SELECT DISTINCT g.PK_Gebruiker, g.Gebruikersnaam, g.UserID, g.Registratiedatum, g.UI 
              FROM Gebruiker AS g ";
    
        
    if($search_rol != "all" || $search_subsite != "all"){
        $query.= " INNER JOIN Activiteit AS a ON (g.PK_Gebruiker = a.FK_Gebruiker) ";
    }
    
    if($search_subsite != "all"){
        $query.= " INNER JOIN Rol AS r ON (a.FK_Rol = r.PK_Rol) ";
    }
    
    $query.= " WHERE 1=1";
    
    if($search != "all"){
        $query.= " AND g.Gebruikersnaam LIKE :search";
    }
    
    if($search_rol != "all"){
        $query.= " AND a.FK_Rol = :rol";
    }
    
    if($search_subsite != "all"){
        $query.= " AND r.FK_Subsite=:subsite ";
    }
    
    if(!$numRows){
        $query .= " LIMIT ". $start.",".$limit;
    }
    
    
    $stmt = $db->prepare($query);
    
    $data = array();
    if($search != "all"){
        $data[":search"] = '%'.$search.'%';
    }
    
    if($search_rol != "all"){
       $data[":rol"] = $search_rol; 
    } 
    
    if($search_subsite != "all"){
        $data[":subsite"] = $search_subsite;
    }
    
    if(count($data) > 0){
       $stmt->execute($data); 
    } else {
        $stmt->execute();
    }
    
    
    if($numRows){
       echo $stmt->rowCount();
       exit; 
    } 
    
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $users = array();
    
    foreach($result as $index => $user_row){
        $row = array();
        $row["PK_Gebruiker"] = $user_row["PK_Gebruiker"];
        $row["Gebruikersnaam"] = $user_row["Gebruikersnaam"];
        $row["UserID"] = $user_row["UserID"];
        $row["Registratiedatum"] = $user_row["Registratiedatum"];
        $row["UI"] = $user_row["UI"];
        
        $stmt = $db->prepare("SELECT 
                                a.Startdatum, a.Einddatum, a.Startdatum, a.Einddatum, a.StartURL, a.EindURL, 
                                r.Omschrijving, s.Naam
                                FROM Activiteit AS a
                                INNER JOIN Rol AS r ON (a.FK_Rol = r.PK_rol)
                                INNER JOIN Subsite AS s ON (r.FK_Subsite = PK_Subsite)
                                WHERE a.FK_Gebruiker=:user_id");
        
        $stmt->execute(array(":user_id" => $user_row["PK_Gebruiker"]));
        
        $row["rollen"] = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $users[] = $row;
    }
    
  
    $smarty->assign("users", $users);
    echo $smarty->fetch($template_file);
    
    
} catch(PDOException $e){
    echo $e->getMessage();
}