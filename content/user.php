<div class="container">
	<div class="page-header" id="user_select_form">
		<h1>Users</h1>
		<ol>
		<?php 
		try {
			require('config.php'); 
			
			$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
			$sql=	"SELECT
						PK_Gebruiker
						, Gebruikersnaam
					FROM Gebruiker
					ORDER BY Gebruikersnaam ASC"; 
				
			$stmt=$con->prepare($sql);
			$stmt->execute(); 
	
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
				echo '<li><a href="?type=user#user=' . $row['PK_Gebruiker'] . '" onClick="selectUser('. $row['PK_Gebruiker'] .')">' . $row['Gebruikersnaam'] . '</a></li>';
			}
		} 
		
		// Errorafhandeling
		catch(PDOException $e) {
			echo '<pre>';
			echo 'Regel: '.$e->getLine(). '<br />';
			echo 'Bestand: '.$e->getFile(). '<br />'; 
			echo 'Foutmelding: '.$e->getMessage();
			echo '</pre>'; 
		}				
		?>
		</ol>
	</div>
	
	<div id="table_div"></div>
	<br /><br /><br />
	<div id="chart_div"></div>
	<br /><br /><br />
	<div id="timeline_div"></div>
</div><!-- /container -->