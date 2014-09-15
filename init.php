<?php
session_start();
require_once("classes/Smarty-3.1.19/libs/Smarty.class.php");
require_once("classes/user.inc.php");
require_once("classes/rollen.inc.php");

//database connectie opzetten. $db zal vervolgens in elke pagina beschikbaar zijn. Hoeft niet meer opnieuw gedaan te worden.
try{
    $db = new PDO('mysql:host='.$db_host.';dbname='.$db_database.';charset=utf8', $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e){
    echo "Kan geen verbinding maken met de database " . $e->getMessage();
}

//Smarty object aanmaken. Dit hoeft ook maar 1x gedaan te worden.
$smarty = new Smarty();

$header_template_file = "header.tpl";

//aanmaken user object. Deze zal door de class gevuld worden en is overal benaderbaar
$user = new User();

if(!isset($_SERVER["HTTP_REFERER"])){
  unset($_SESSION["username"]);
  unset($_SESSION["password"]);
}

//usergegevens komt binnen via inlogform of is al in sessie. 
if(!isset($_SESSION["username"])){
    $username = (isset($_POST["smtInloggen"])) ? $_POST["username"] : "";
    $password = (isset($_POST["smtInloggen"])) ? md5($_POST["password"]) : "";
} else {
   $username = (isset($_SESSION["username"])) ? $_SESSION["username"] : "";
    $password = (isset($_SESSION["username"])) ? $_SESSION["password"] : ""; 
}

if($user->login($username, $password)){
    $_SESSION["userid"] = $user->userid;
    $_SESSION["username"] = $user->username;
    $_SESSION["password"] = $user->password;
    
    $smarty->assign("validInlog", 1);
    $smarty->assign("userid", $user->userid);
    $smarty->assign("username", $user->username);
}


if(isset($_GET["type"])){
    $include_file = $content_dir.$_GET["type"].".php";
    $template_file = $templates_dir.$_GET["type"].".tpl";
}

if(isset($_GET["admin"])){
    $include_file = $admin_content_dir.$_GET["admin"].".php";
    $template_file = $admin_templates_dir.$_GET["admin"].".tpl";
}
