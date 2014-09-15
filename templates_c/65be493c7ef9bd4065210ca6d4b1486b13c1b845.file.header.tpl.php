<?php /* Smarty version Smarty-3.1.19, created on 2014-09-07 09:00:02
         compiled from "content/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:975317780540c1210712f46-78141270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65be493c7ef9bd4065210ca6d4b1486b13c1b845' => 
    array (
      0 => 'content/templates/header.tpl',
      1 => 1410079725,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '975317780540c1210712f46-78141270',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_540c12107ff784_40252880',
  'variables' => 
  array (
    'validInlog' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540c12107ff784_40252880')) {function content_540c12107ff784_40252880($_smarty_tpl) {?><!DOCTYPE html>
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
        <?php if (!isset($_smarty_tpl->tpl_vars['validInlog']->value)) {?>
        <form method="post" action="index.php">
            <ul>
                <li>Gebruikersnaam: <input type="text" id="username" name="username" /></li>
                <li>Wachtwoord: <input type="password" id="password" name="password" /></li> 
                <li><button class="btn_green" name="smtInloggen" type="submit" value="clicked">Inloggen</button</li>
            </ul>
        </form>
        <?php } else { ?>
            Ingelogd als <?php echo $_smarty_tpl->tpl_vars['username']->value;?>

        <?php }?>
    </div>
    
    <?php if (isset($_smarty_tpl->tpl_vars['validInlog']->value)) {?>
    <div id="admin_nav">
        <ul>
            <li><a href="?admin=nieuw_account">Nieuw account</a></li>
            <li><a href="?admin=wijzig_account">Wijzig account</a></li>
            <li><a href="?logout">Uitloggen</a></li>
            <li><a href="?admin=users">Users</a></li>
            <li><a href="?admin=users">Fora</a></li>
        </ul>
    </div>
    <?php }?>
    
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
    
</div>   <?php }} ?>
