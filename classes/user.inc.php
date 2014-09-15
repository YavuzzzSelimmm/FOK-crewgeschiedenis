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
    
    
    function getAllUsersAndRoles(){
        global $db;
        
        try{
           $stmt = $db->prepare("SELECT g.PK_Gebruiker, g.Gebruikersnaam, g.UI, r.Afkorting, s.Naam
                                   FROM Gebruiker AS g
                                   LEFT JOIN Activiteit AS a ON (g.PK_Gebruiker = a.FK_Gebruiker)
                                   LEFT JOIN Rol AS r ON (a.FK_Rol = r.PK_Rol) 
                                   LEFT JOIN Subsite AS s ON (r.FK_Subsite = s.PK_Subsite)");
           $stmt->execute(); 
           $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
           
           $return_data = array();
           foreach($results as $index=>$result){
                $id = $result["PK_Gebruiker"];
                $user_name = $result["Gebruikersnaam"];
                $rol = $result["Afkorting"];
                $subsite = $result["Naam"];
                $icon_url = $result["UI"];
                
                if(!isset($return_data[$id])){
                    $return_data[$id] = array();
                    $return_data[$id]["data_groups"] = array();
                    
                }
                
                $return_data[$id]["username"] = $user_name;
                $return_data[$id]["icon"] = $icon_url;
                
                if(!in_array($rol, $return_data[$id]["data_groups"])){
                    $return_data[$id]["data_groups"][] = $rol; 
                    $return_data[$id]["data_groups"][] = $subsite;
                }
               
            
           }
           
           
           foreach($return_data as $id=>$data){
                $return_data[$id]["json"] = json_encode($return_data[$id]["data_groups"]); 
           }
           
           return $return_data;
            
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
    
    function delete_user($id){
        global $db;
       
        try{
            $stmt = $db->prepare("DELETE FROM Gebruiker WHERE PK_Gebruiker=:id");
            $stmt->execute(array(":id" => $id));
            
        } catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    
}