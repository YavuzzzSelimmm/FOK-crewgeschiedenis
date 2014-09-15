<?php

$mods = array(
"Fopje",
"Frank_Drebin",
"Friek_",
"Frutsel",
"GGMM",
"HeaN82",
"HeatWave",
"HetKlusKonijn",
"Hexagon",
"Houniet",
"iBenny",
"IHVK",
"JDude",
"jitzzzze",
"Kaas-",
"kanovinnie",
"Karina",
"Lavenderr",
"LethalNinja",
"liesje1979",
"LittleBrownie",
"Lois",
"LompeHork",
"Lotusss",
"Lutte",
"Magneet",
"Maharbal",
"Maisnon",
"Marie30",
"Mike",
"MissBliss",
"Misstique",
"Ml-etje",
"Mortaxx",
"motorbloempje",
"murp",
"Mylene",
"Natalie",
"Nibb-it",
"NJ",
"Oerbeer",
"Ole",
"Opa.Bakkebaard",
"paddy",
"Pharkus",
"Puala",
"Re",
"rene90",
"Renesite",
"RockabeIIa",
"rubbereend",
"Sack_Blabbath",
"SaintOfKillers",
"senesta",
"SiIk",
"sitting_elfling",
"Sjeen",
"shmoopy",
"Snakey",
"Sounddragon",
"sp3c",
"Specularium",
"static",
"Tamashii",
"timmmmm",
"UIO_AMS",
"Vonkenboer",
"zarGon");

include_once("simple_html_dom.php");
include_once("../config.php");

try{
    $db = new PDO('mysql:host='.$db_host.';dbname='.$db_database.';charset=utf8', $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e){
    echo "Kan geen verbinding maken met de database " . $e->getMessage();
}

$strCookie = 'PHPSESSID=7ecc41ef57901596ae663a4a580dbe02;sessid=7ecc41ef57901596ae663a4a580dbe02; user=305897';  

$gebruikers = array();
foreach($mods as $mod){
    
    try{
        $stmt = $db->prepare("SELECT * FROM Gebruiker WHERE Gebruikersnaam=:username");
        $stmt->execute(array(":username" => $mod));
        
        if($stmt->rowCount() > 0){
            continue;
        }
    } catch(PDOException $error){
        exit;
    }
    
    $gebruiker = array();
    $ch = curl_init();
    $timeout = 0; // set to zero for no timeout
    curl_setopt ($ch, CURLOPT_URL, 'http://forum.fok.nl/user/profile/'.$mod);
    curl_setopt($ch, CURLOPT_COOKIE, $strCookie);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    
    $html = curl_exec($ch);
    curl_close($ch);

    $html1 = str_get_html($html);


    $gebruiker[":Gebruikersnaam"] = $mod;

    foreach($html1->find('.usericon') as $e){
        $img = $e->src;
        $gebruiker[":UI"] = $img;
    }

    $arr_id = explode("http://i.fokzine.net/usericons/", $img);
    $arr_id = explode("/", $arr_id[1]);
    $gebruiker[":UserID"] = $arr_id[0];

    foreach($html1->find('td') as $e){
        $dagen = array("maandag", "dinsdag", "woensdag", "donderdag", "vrijdag", "zaterdag", "zondag");
        $text = $e->innertext;
        $arr_text = explode(" ", $text);
        if(in_array($arr_text[0], $dagen)){
            $dag_v_week = $arr_text[0];
            $dag_v_maand = $arr_text[1];
            
            $maanden = array("januari" => "01", "februari" => "02", "maart"=> "03", "april"=> "04", "mei"=> "05", "juni"=>"06", "juli"=>"07", "augustus"=>"08", "september"=>"09", "oktober"=>"10", "november"=>"11", "december"=>"12");
            $maand = $maanden[$arr_text[2]];
            
            $jaar = $arr_text[3];
            
            $gebruiker[":Registratiedatum"] = $jaar."-".$maand."-".$dag_v_maand;
        }
    }
    
    $gebruikers[] =$gebruiker;
     
}

?>
<table width="100%" border="0">
<tr>
    <th>username</th>
    <th>ui</th>
    <th>id</th>
    <th>registratiedatum</th>
</tr>

<?php
foreach($gebruikers as $gebruiker){
    ?>
        <tr>
            <td><?php echo $gebruiker[":Gebruikersnaam"]; ?></td>
            <td><?php echo $gebruiker[":UI"]; ?></td>
            <td><?php echo $gebruiker[":UserID"]; ?></td>
            <td><?php echo $gebruiker[":Registratiedatum"]; ?></td>
        </tr>
    <?php
    
    try{
        $stmt = $db->prepare("INSERT INTO Gebruiker (Gebruikersnaam, UserID, Registratiedatum, UI) VALUES (:Gebruikersnaam, :UserID, :Registratiedatum, :UI) ");
        $stmt->execute($gebruiker);
    } catch(PDOException $error){
        
    }
}
    
