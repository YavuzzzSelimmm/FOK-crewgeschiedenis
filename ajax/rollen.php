<?php

//Deze page mag alleen benaderd worden via een AJAX call. Hierop controleren.
if(!isset($_SERVER["HTTP_X_REQUESTED_WITH"])){
    exit;
}

$subsite = $_POST["subsite"];

try{
    $query = "SELECT * FROM Rol ";
    
    if($subsite != "all"){
        $query.= " WHERE FK_Subsite=:subsite";
    }
    
    $query.= " ORDER BY Omschrijving ASC ";
    $stmt = $db->prepare($query);
    
    if($subsite != "all"){
        $stmt->execute(array(":subsite"=>$subsite));
    } else {
        $stmt->execute();
    }
    
    $smarty->assign("rollen", $stmt->fetchAll(PDO::FETCH_ASSOC));
    echo $smarty->fetch($template_file);
} catch(PDOException $e){
    
}