<?php 
try {
	require('config.php'); 
	$con = new PDO("mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);

	$sql = "SELECT DATE_FORMAT(InsertDate, '%d-%m-%Y %H.%i uur') InsertDate
			FROM Data
			ORDER BY InsertDate DESC
			LIMIT 1"; 
					
	$stmt=$con->prepare($sql);
	$stmt->execute(); 
	$row = $stmt->fetch(PDO::FETCH_ASSOC);

	echo $row['InsertDate'] . '.';
}
				
// Error handeling
catch(PDOException $e) {
	echo '<pre>';
	echo 'Regel: '.$e->getLine(). '<br />';
	echo 'Bestand: '.$e->getFile(). '<br />'; 
	echo 'Foutmelding: '.$e->getMessage();
	echo '</pre>'; 
}				

?>
		