<?php

class User{
    
    var $userid;
    var $username;
    var $password;
    var $last_active;
    
    function login($username, $password){
        global $db;
        
        //eerst maar ff hardcoded
        if($username == "admin" && $password == md5("admin")){
            $this->userid = 1;
            $this->username = $username;
            $this->password = $password;
            $this->last_active = date("Y-m-d h:i:s");
        
            return true;
        }
    }
    
    function getUser($user_id){
        global $db;
        
        try{
            $stmt = $db->prepare("SELECT * FROM Gebruiker WHERE PK_Gebruiker=:user_id");
            $stmt->execute(array(":user_id" => $user_id));
            return $stmt->fetch();
        } catch(PDOException $e){
            echo $e->getMessage();
        }    
    }
    
    function getAllUsers(){
        global $db;
        
        try{
           $stmt = $db->prepare("SELECT * FROM Gebruiker ORDER BY PK_Gebruiker ASC");
           $stmt->execute(); 
           return $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        } catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }
    
    function updateUser($PK_Gebruiker, $data){
        global $db;
        
        try{
          
          $stmt=$db->prepare("UPDATE Gebruiker SET Gebruikersnaam=:Gebruikersnaam, UserId=:UserID, Registratiedatum=:Registratiedatum, UI=:UI WHERE PK_Gebruiker=:PK_Gebruiker");  
          $stmt->execute($data);  
        } catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    
    function insertUser($data){
        global $db;
        
         try{
            $stmt = $db->prepare("INSERT INTO Gebruiker (Gebruikersnaam, UserID, Registratiedatum, UI) VALUES (:Gebruikersnaam, :UserID, :Registratiedatum, :UI)");
            $stmt->execute($data);
            return $db->lastInsertId();
        } catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    
}