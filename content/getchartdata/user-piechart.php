<?php
$id=$_GET["id"];
	
try {
	require('../../config.php'); 
	
	$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);
	$sql =	"SELECT 
				  G.Gebruikersnaam
				, R.Afkorting Rolafkorting
				, SUM(DATEDIFF(IFNULL(A.Einddatum,CURDATE()),A.Startdatum)+1) Duur
			FROM Activiteit A
			LEFT JOIN Gebruiker G
				ON A.FK_Gebruiker = G.PK_Gebruiker
			LEFT JOIN Rol R
				ON A.FK_ROL = R.PK_ROL
			LEFT JOIN Subsite S
				ON R.FK_Subsite = S.PK_Subsite
			WHERE G.UserID = " . $id . "
			GROUP BY G.Gebruikersnaam, R.Afkorting
			ORDER BY A.Startdatum ASC, IFNULL(A.Einddatum,CURDATE()) ASC";

	$stmt=$con->prepare($sql); 
	$stmt->execute(); 

	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
		$Gebruikersnaam[] = $row['Gebruikersnaam'];
		$Rol[] = $row['Rolafkorting'];
		$Duur[] = $row['Duur'];
	}
	
	$rows = array();
	foreach($Gebruikersnaam as $index => $name) {
		$rows[] = array("c"=>array(  array("v"=>$Rol[$index],"f"=>null)
		                           , array("v"=>(int)$Duur[$index],"f"=>null) ));
	}

	$cols =	array(  array("id"=>"","label"=>"Rol","pattern"=>"","type"=>"string")
				  , array("id"=>"","label"=>"Duur","pattern"=>"","type"=>"number") );

	$arr = array("cols"=>$cols,"rows"=>$rows);

	print_r(json_encode($arr));
}
	
// Errorafhandeling
catch(PDOException $e) {
	echo '<pre>';
	echo 'Regel: '.$e->getLine(). '<br />';
	echo 'Bestand: '.$e->getFile(). '<br />'; 
	echo 'Foutmelding: '.$e->getMessage();
	echo '</pre>'; 
}