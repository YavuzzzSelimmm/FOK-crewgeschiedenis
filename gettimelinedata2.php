<?php
	$output = array();
	include 'db.php';
	$con = new PDO("mysql:host=" . $dbserver . ";dbname=" . $dbname, $dbuser, $dbpass); 
	$sql = "SELECT gebruiker.Gebruikersnaam, rol.Afkorting, rol.Omschrijving, activiteit.Startdatum, activiteit.Einddatum FROM activiteit LEFT JOIN gebruiker ON activiteit.FK_Gebruiker = gebruiker.PK_Gebruiker LEFT JOIN rol ON activiteit.FK_Rol = rol.PK_Rol WHERE gebruiker.PK_Gebruiker = '".$_GET['user']."'";
	$stmt = $con->prepare($sql);
	$stmt->execute();
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		if(! $row['Einddatum'])
			$row['Einddatum'] = date("Y-m-d");
		$output[count($output)] = Array($row['Gebruikersnaam'], strtotime($row['Startdatum'])*1000, strtotime($row['Einddatum'])*1000);
	}
	echo json_encode($output);
?>