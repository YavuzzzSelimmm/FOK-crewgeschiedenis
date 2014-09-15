<?php

class Subsites{
    
    function haal_subsites(){
        global $db;
        
        try{
            $stmt = $db->prepare("SELECT * FROM Subsite");
            $stmt->execute();
            
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        } catch(PDOException $e){
            
        }
    }
}