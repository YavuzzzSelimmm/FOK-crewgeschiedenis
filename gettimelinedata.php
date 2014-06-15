<?php
  $q=$_GET["q"];
  include 'db.php';

  $sql_query = "  	SELECT 
			  G.Gebruikersnaam, R.Afkorting Rolafkorting, R.Omschrijving Rolomschrijving,  A.Startdatum, IFNULL(A.Einddatum,CURDATE()) Einddatum
	  	FROM Activiteit A
		LEFT JOIN Gebruiker G
			ON A.FK_Gebruiker = G.PK_Gebruiker
		LEFT JOIN Rol R
			ON A.FK_ROL = R.PK_ROL
		LEFT JOIN Subsite S
			ON R.FK_Groep = S.PK_Subsite
		WHERE G.PK_Gebruiker = " . $q . "
		ORDER BY A.Startdatum ASC, IFNULL(A.Einddatum,CURDATE()) ASC";

  

  $con = mysql_connect($dbserver,$dbuser,$dbpass);
  if (!$con){ die('Could not connect: ' . mysql_error()); }
  mysql_select_db($dbname, $con);
  $result = mysql_query($sql_query);


while($row = mysql_fetch_array($result))
	{
		$Gebruikersnaam[] = $row['Gebruikersnaam'];
		$Rolafkorting[] = $row['Rolafkorting'];
		$Rolomschrijving[] = $row['Rolomschrijving'];
		$Startdatum[] = $row['Startdatum'];
		$Einddatum[] = $row['Einddatum'];
	}

$rows = array();
foreach($Gebruikersnaam as $index => $name) {
$rows[] = array("c"=>
				   array($Rolafkorting[$index],
						 $Rolomschrijving[$index],
						 '1382704503079',
						 '1382704509179') 
			   );
}

$cols = array(
array(
"id"=>"",
"label"=>"Rolafkorting",
"pattern"=>"",
"type"=>"string"),
array(
"id"=>"",
"label"=>"Rolomschrijving",
"pattern"=>"",
"type"=>"string"),
array(
"id"=>"",
"label"=>"Startdatum",
"pattern"=>"",
"type"=>"number"),
array(
"id"=>"",
"label"=>"Einddatum",
"pattern"=>"",
"type"=>"number"));

$arr = array("cols"=>$cols,"rows"=>$rows);

print_r(json_encode($arr));
?>

