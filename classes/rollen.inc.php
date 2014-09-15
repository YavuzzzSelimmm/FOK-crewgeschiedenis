<?php

class Rollen{
    
    function haal_rollen_voor_gebruiker($PK_Gebruiker){
        global $db;
        return;
        try{
            $stmt = $db->prepare("SELECT r.PK_Rol, r.Omschrijving FROM  ");
        } catch(PDOException $e){
            echo $e->getMessage;
        }
    }
    
    function haal_rollen(){
        global $db;
        
        try{
            $stmt = $db->prepare("SELECT PK_Rol, Omschrijving FROM Rol");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e){
            echo $e->getMessage;
        }
    }
}