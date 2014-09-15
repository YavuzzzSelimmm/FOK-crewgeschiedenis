<?php

class Rollen{
    
    function haal_rollen_voor_gebruiker($PK_Gebruiker){
        global $db;
        
        try{
            $stmt = $db->prepare("SELECT r.PK_Rol, r.Omschrijving, a.PK_Activiteit, a.Startdatum, a.Einddatum, a.StartURL, a.EindURL, s.Naam
                                    FROM Activiteit AS a 
                                    INNER JOIN Rol AS r ON (a.FK_Rol = r.PK_Rol) 
                                    INNER JOIN Subsite AS s ON (r.FK_Subsite = s.PK_Subsite)
                                    WHERE a.FK_Gebruiker = :FK_Gebruiker ");
            
            $stmt->execute(array(":FK_Gebruiker" => $PK_Gebruiker));
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        } catch(PDOException $e){
            echo $e->getMessage;
        }
    }
    
    function haal_rollen_voor_subsite($PK_Subsite){
        global $db;
        
        try{
            $stmt = $db->prepare("SELECT PK_Rol, Omschrijving
                                    FROM Rol
                                    WHERE FK_Subsite=:subsite");
            
            $stmt->execute(array(":subsite" => $PK_Subsite));
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        } catch(PDOException $e){
            echo $e->getMessage;
        }
    }
    
    
    function haal_rollen(){
        global $db;
        
        try{
            $stmt = $db->prepare("SELECT r.PK_Rol, r.Omschrijving, s.Naam 
                                    FROM Rol AS r
                                    INNER JOIN Subsite AS s ON (r.FK_Subsite = PK_Subsite)");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e){
            echo $e->getMessage;
        }
    }
    
    function invoeren_rol_voor_gebruiker($data){
        global $db;
        
        try{
            $stmt = $db->prepare("INSERT INTO Activiteit (FK_Gebruiker, FK_Rol, Startdatum, Einddatum, StartURL, EindURL)
                                         VALUES (:FK_Gebruiker, :FK_Rol, :Startdatum, :Einddatum, :StartURL, :EindURL) ");
            $stmt->execute($data);
       
        } catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    
    function verwijder_rollen_van_gebruiker($PK_Gebruiker){
      global $db;
        
        try{
            $stmt = $db->prepare("DELETE FROM Activiteit WHERE FK_Gebruiker=:PK_Gebruiker");
            $stmt->execute(array(":PK_Gebruiker" => $PK_Gebruiker));
       
        } catch(PDOException $e){
            echo $e->getMessage();
        }  
    }
}