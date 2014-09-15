<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>FOK!crewgeschiedenis</title>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

</head>

<style>
body{
    margin-top: 0px;
    margin-left: 50px;
    margin-right: 50px;
    font-size: 12px;
}


#header{
    width: 100%;
    height: 150px;
    border-bottom: 1px solid #000;
    padding-top: 40px;
}

#logo{
    float: left;
}

#navbar{
    float: left;
    margin-top: 110px;
}

#menu li {
    float: left;
    list-style: none; 
    padding-right: 15px;   
}

#menu li a{
    text-decoration: none;
    font-size: 16px;
}

#menu li a:hover{
    text-decoration: none;
    font-weight: bold;
}


#user_login{
    position: absolute;
    top:0px;
    right:0px;
    padding-right: 10px;
}

#user_login ul li{
   float: left;
    list-style: none; 
    padding-right: 10px;  
}

#user_login ul li input{
    width: 75px;

}

.btn_green{
    background-color: green;
  moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border: 1px solid #009900;
  padding: 5px;
  color: #fff;
  height: 26px;
}


#admin_nav{
    position: absolute;
    top: 20px;
    right: 0px;
    padding-right: 10px;
}

#admin_nav ul li a{
    text-decoration: none;
}

#admin_nav ul li{
    list-style: none;    
}

#admin_nav li a:hover{
    font-weight: bold;
}
</style>     

<body>
<div id="header">
    <div id="user_login">
        {if !isset($validInlog)}
        <form method="post" action="index.php">
            <ul>
                <li>Gebruikersnaam: <input type="text" id="username" name="username" /></li>
                <li>Wachtwoord: <input type="password" id="password" name="password" /></li> 
                <li><button class="btn_green" name="smtInloggen" type="submit" value="clicked">Inloggen</button</li>
            </ul>
        </form>
        {else}
            Ingelogd als {$username}
        {/if}
    </div>
    
    {if isset($validInlog)}
    <div id="admin_nav">
        <ul>
            <li><a href="?admin=nieuw_account">Nieuw account</a></li>
            <li><a href="?admin=wijzig_account">Wijzig account</a></li>
            <li><a href="?logout">Uitloggen</a></li>
            <li><a href="?admin=users">Users</a></li>
            <li><a href="?admin=users">Fora</a></li>
        </ul>
    </div>
    {/if}
    
    <div id="logo">
        <img src="images/logo.png" />
    </div>
    
    <div id="navbar">
        <ul id="menu">
            <li><a href="?type=home">Home</a></li>
            <li><a href="?type=users">Users</a></li>
            <li><a href="?type=fora">Fora</a></li>
            <li><a href="?type=ranglijst">Ranglijst</a></li>
            <li><a href="?type=admin">Admin</a></li>
        </ul>
    </div>
    
</div>   