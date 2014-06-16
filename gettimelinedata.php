<?php
	$output = array();
	include 'db.php';
	$con = new PDO("mysql:host=" . $dbserver . ";dbname=" . $dbname, $dbuser, $dbpass); 
	$sql =
		"SELECT
			  G.Gebruikersnaam
			, R.Afkorting
			, R.Omschrijving
			, A.Startdatum
			, IFNULL(A.Einddatum, CURDATE()) Einddatum
		 FROM Activiteit A
		 LEFT JOIN Gebruiker G
			ON A.FK_Gebruiker = G.PK_Gebruiker
		LEFT JOIN Rol R
			ON A.FK_Rol = R.PK_Rol
		WHERE G.PK_Gebruiker = ' ".$_GET['user']. " ' ";
	$stmt = $con->prepare($sql);
	$stmt->execute();
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		if(! $row['Einddatum'])
			$row['Einddatum'] = date("Y-m-d");
		$output[count($output)] = Array($row['Afkorting'], strtotime($row['Startdatum'])*1000, strtotime($row['Einddatum'])*1000);
	}
	echo json_encode($output);
?>
