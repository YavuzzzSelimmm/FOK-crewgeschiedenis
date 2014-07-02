 <div class="container">
	<div class="jumbotron">
		<h2>Admin</h2>
		<div>
			<a href="?admin=index"><button class="btn" type="button">Index</button></a>
			<a href="?admin=index&user"><button class="btn" type="button">User</button></a>
			<a href="?admin=index&subsite"><button class="btn" type="button">Subsite</button></a>
			<a href="?admin=index&rol"><button class="btn" type="button">Rol</button></a>
			<a href="?admin=index&activiteit"><button class="btn" type="button">Activiteit</button></a>
		</div>
	</div>
<?

require('config.php');
$mysqli = new mysqli($settings["dbserver"], $settings["dbuser"], $settings["dbpass"], $settings["dbname"]);

/* Allows the user to both create new records and edit existing records */
/* User */
if (isset($_GET['user'])) {
	// creates the new/edit record form
	function renderForm($Gebruikersnaam = '', $UserID ='', $Registratiedatum ='', $UI='', $Foutmelding = '', $PK = '') {
		echo '<h1>'; if ($PK != '') { echo 'Gebruiker wijzigen'; } else { echo 'Gebruiker toevoegen'; }; echo '</h1>'; 
		if ($Foutmelding != '') {
			echo '<div style="padding:4px; margin: 0 0 10px 0; border:1px solid red; color:red">' . $Foutmelding. '</div>';
		}
		?>
		<form class="form-horizontal" action="" method="post">
			<?php if ($PK != '') { ?>
			<input type="hidden" name="PK" value="<?php echo $PK; ?>" />
			<p>PK: <?php echo $PK; ?></p>
			<?php } ?>
		
			<div class="form-group">
				<label for="Gebruikersnaam" class="col-sm-2 control-label">Gebruikersnaam</label>
				<div class="col-sm-4"><input name="Gebruikersnaam" class="form-control" type="text" value="<?php echo $Gebruikersnaam; ?>"></div>
			</div>
			<div class="form-group">
				<label for="UserID" class="col-sm-2 control-label">UserID</label>
				<div class="col-sm-4"><input name="UserID" class="form-control" type="text" value="<?php echo $UserID; ?>"></div>
			</div>
			<div class="form-group">
				<label for="Registratiedatum" class="col-sm-2 control-label">Registratiedatum</label>
				<div class="col-sm-4"><input name="Registratiedatum" class="form-control" type="text" value="<?php echo $Registratiedatum; ?>"></div>
			</div>
			<div class="form-group">
				<label for="UI" class="col-sm-2 control-label">UI</label>
				<div class="col-sm-8"><input name="UI" class="form-control" type="text" value="<?php echo $UI; ?>"></div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-4"><button type="submit" name="submit" class="btn btn-info">Verzenden!</button></div>
			</div>
		</form>
	<?
	}
	
	// edit user

	// if the 'PK' variable is set in the URL, we know that we need to edit a record
	if (isset($_GET['PK'])) {
		// if the form's submit button is clicked, we need to process the form
		if (isset($_POST['submit'])) {
			// make sure the 'PK' in the URL is valid
			if (is_numeric($_POST['PK'])) {
				// get variables from the URL/form
				$PK = $_POST['PK'];
				$Gebruikersnaam = htmlentities($_POST['Gebruikersnaam'], ENT_QUOTES);
				$UserID = htmlentities($_POST['UserID'], ENT_QUOTES);
				$Registratiedatum= htmlentities($_POST['Registratiedatum'], ENT_QUOTES);
				$UI = htmlentities($_POST['UI'], ENT_QUOTES);
			
				// check that fields are not empty
				if ($Gebruikersnaam == '' || $UserID == '' || $Registratiedatum == '' || $UI == '') {
					// if they are empty, show an error message and display the form
					$Foutmelding = 'ERROR: Please fill in all required fields!';
					renderForm($Gebruikersnaam, $UserID, $Registratiedatum, $UI, $Foutmelding, $PK);
				}
				else {
					// if everything is fine, update the record in the database
					if ($stmt = $mysqli->prepare("UPDATE Gebruiker SET Gebruikersnaam = ?, UserID = ?, Registratiedatum = ?, UI = ? WHERE PK_Gebruiker=?")){
						$stmt->bind_param("ssssi", $Gebruikersnaam, $UserID, $Registratiedatum, $UI, $PK);
						$stmt->execute();
						$stmt->close();
					}
					// show an error message if the query has an error
					else
					{
						echo "ERROR: could not prepare SQL statement.";
					}
				
				// redirect the user once the form is updated
				header("Location: ?admin=index&user");
				}
			}
			
			// if the 'PK' variable is not valid, show an error message
			else {
				echo "Error!";
			}
		}
		
		// if the form hasn't been submitted yet, get the info from the database and show the form
		else {
			// make sure the 'PK' value is valid
			if (is_numeric($_GET['PK']) && $_GET['PK'] > 0) {
				// get 'PK' from URL
				$PK = $_GET['PK'];
					
				// get the record from the database
				if($stmt = $mysqli->prepare("SELECT * FROM Gebruiker WHERE PK_Gebruiker=?")) {
					$stmt->bind_param("i", $PK);
					$stmt->execute();
						
					$stmt->bind_result($PK, $Gebruikersnaam, $UserID, $Registratiedatum, $UI);
					$stmt->fetch();
						
					// show the form
					renderForm($Gebruikersnaam, $UserID, $Registratiedatum, $UI, NULL, $PK);
						
					$stmt->close();
				}
				
				// show an error if the query has an error
				else {
					echo "Error: could not prepare SQL statement";
				}
			}
			
			// if the 'PK' value is not valid, redirect the user back to the user page
			else {
				header("Location: ?admin=index&user");
			}
		}
	}
	
	// new user
	
	// if the 'PK' variable is not set in the URL, we must be creating a new record
	else{
		// if the form's submit button is clicked, we need to process the form
		if (isset($_POST['submit'])) {
			// get the form data
			$Gebruikersnaam = htmlentities($_POST['Gebruikersnaam'], ENT_QUOTES);
			$UserID = htmlentities($_POST['UserID'], ENT_QUOTES);
			$Registratiedatum = htmlentities($_POST['Registratiedatum'], ENT_QUOTES);
			$UI = htmlentities($_POST['UI'], ENT_QUOTES);
				
			// check that fields are not empty
			if ($Gebruikersnaam == '' || $UserID == '' || $Registratiedatum == '' || $UI == '') {
				// if they are empty, show an error message and display the form
				$Foutmelding = 'ERROR: Please fill in all required fields!';
				renderForm($Gebruikersnaam, $UserID, $Registratiedatum, $UI, $Foutmelding);
			}
			else {
				// insert the new record into the database
				if ($stmt = $mysqli->prepare("INSERT Gebruiker (Gebruikersnaam, UserID, Registratiedatum, UI) VALUES (?, ?, ?, ?)")) {
					$stmt->bind_param("siss", $Gebruikersnaam, $UserID, $Registratiedatum, $UI);
					$stmt->execute();
					$stmt->close();
				}
				
				// show an error if the query has an error
				else {
					echo "ERROR: Could not prepare SQL statement.";
				}
					
				// redirect the user
				header("Location: ?admin=index&user");
			}
		}
		
		// if the form hasn't been submitted yet, show the form
		else {
			renderForm();
		}
	}
		
	// close the mysqli connection
	$mysqli->close();
}


/* Subsite */
elseif (isset($_GET['subsite'])) {
	// creates the new/edit record form
	function renderForm($Naam = '', $Foutmelding = '', $PK = '') {
		echo '<h1>'; if ($PK != '') { echo 'Subsite wijzigen'; } else { echo 'Subsite toevoegen'; }; echo '</h1>'; 
		if ($Foutmelding != '') {
			echo '<div style="padding:4px; margin: 0 0 10px 0; border:1px solid red; color:red">' . $Foutmelding. '</div>';
		}
	?>
		<form class="form-horizontal" action="" method="post">
			<?php if ($PK != '') { ?>
			<input type="hidden" name="PK" value="<?php echo $PK; ?>" />
			<p>PK: <?php echo $PK; ?></p>
			<?php } ?>
		
			<div class="form-group">
				<label for="Naam" class="col-sm-2 control-label">Naam</label>
				<div class="col-sm-4"><input name="Naam" class="form-control" type="text" value="<?php echo $Naam; ?>"></div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-4"><button type="submit" name="submit" class="btn btn-info">Verzenden!</button></div>
			</div>
		</form>
		
		
	<?php
	}
	
	// edit subsite
		
	// if the 'PK' variable is set in the URL, we know that we need to edit a record
	if (isset($_GET['PK'])) {
		// if the form's submit button is clicked, we need to process the form
		if (isset($_POST['submit'])) {
			// make sure the 'PK' in the URL is valid
			if (is_numeric($_POST['PK'])) {
				// get variables from the URL/form
				$PK = $_POST['PK'];
				$Naam = htmlentities($_POST['Naam'], ENT_QUOTES);
					
				// check that name is not empty
				if ($Naam == '') {
					// if they are empty, show an error message and display the form
					$Foutmelding = 'ERROR: Please fill in all required fields!';
					renderForm($Naam, $Foutmelding, $PK);
				}
				else {
				// if everything is fine, update the record in the database
					if ($stmt = $mysqli->prepare("UPDATE Subsite SET Naam = ? WHERE PK_Subsite=?")) {
						$stmt->bind_param("si", $Naam, $PK);
						$stmt->execute();
						$stmt->close();
					}
					// show an error message if the query has an error
					else {
						echo "ERROR: could not prepare SQL statement.";
					}
						
					// redirect the user once the form is updated
					header("Location: ?admin=index&subsite");
				}
			}
			
			// if the 'PK' variable is not valid, show an error message
			else {
				echo "Error!";
			}
		}
		
		// if the form hasn't been submitted yet, get the info from the database and show the form
		else {
			// make sure the 'PK' value is valid
			if (is_numeric($_GET['PK']) && $_GET['PK'] > 0) {
				// get 'PK' from URL
				$PK = $_GET['PK'];
					
				// get the record from the database
				if($stmt = $mysqli->prepare("SELECT * FROM Subsite WHERE PK_Subsite=?")) {
					$stmt->bind_param("i", $PK);
					$stmt->execute();
						
					$stmt->bind_result($PK, $Naam);
					$stmt->fetch();
						
					// show the form
					renderForm($Naam, NULL, $PK);
						
					$stmt->close();
				}
				
				// show an error if the query has an error
				else {
					echo "Error: could not prepare SQL statement";
				}
			}
			
			// if the 'PK' value is not valid, redirect the user back to the view.php page
			else {
				header("Location: ?admin=index&subsite");
			}
		}
	}
	
	// new subite
	
	// if the 'PK' variable is not set in the URL, we must be creating a new record
	else{
		// if the form's submit button is clicked, we need to process the form
		if (isset($_POST['submit'])) {
			// get the form data
			$Naam = htmlentities($_POST['Naam'], ENT_QUOTES);
				
			// check that name is  not empty
			if ($Naam == '') {
				// if they are empty, show an error message and display the form
				$Foutmelding = 'ERROR: Please fill in all required fields!';
				renderForm($Naam, $Foutmelding);
			}
			else {
				// insert the new record into the database
				if ($stmt = $mysqli->prepare("INSERT Subsite (Naam) VALUES (?)")) {
					$stmt->bind_param("s", $Naam);
					$stmt->execute();
					$stmt->close();
				}
				// show an error if the query has an error
				else {
					echo "ERROR: Could not prepare SQL statement.";
				}
					
				// redirect the user
				header("Location: ?admin=index&subsite");
			}
		}
		// if the form hasn't been submitted yet, show the form
		else {
			renderForm();
		}
	}
	
	// close the mysqli connection
	$mysqli->close();
}


/* Rol */
if (isset($_GET['rol'])) {
	// creates the new/edit record form
	function renderForm($Subsitenaam = '', $Rolafkorting = '', $Rolomschrijving = '', $Foutmelding = '', $PK = '') {
		echo '<h1>'; if ($PK != '') { echo 'Rol wijzigen'; } else { echo 'Rol toevoegen'; }; echo '</h1>'; 
		if ($Foutmelding != '') {
			echo '<div style="padding:4px; margin: 0 0 10px 0; border:1px solid red; color:red">' . $Foutmelding. '</div>';
		}
	?>
		<form class="form-horizontal" action="" method="post">
			<?php if ($PK != '') { ?>
			<input type="hidden" name="PK" value="<?php echo $PK; ?>" />
			<p>PK: <?php echo $PK; ?></p>
			<?php } ?>
		
			<div class="form-group">
				<label for="Subsitenaam" class="col-sm-2 control-label">Subsitenaam</label>
				<div class="col-sm-4"><input name="Subsitenaam" class="form-control" type="text" value="<?php echo $Subsitenaam; ?>"></div>
			</div>
			<div class="form-group">
				<label for="Rolafkorting" class="col-sm-2 control-label">Rolafkorting</label>
				<div class="col-sm-4"><input name="Rolafkorting" class="form-control" type="text" value="<?php echo $Rolafkorting; ?>"></div>
			</div>
			<div class="form-group">
				<label for="Rolomschrijving" class="col-sm-2 control-label">Rolomschrijving</label>
				<div class="col-sm-4"><input name="Rolomschrijving" class="form-control" type="text" value="<?php echo $Rolomschrijving; ?>"></div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-4"><button type="submit" name="submit" class="btn btn-info">Verzenden!</button></div>
			</div>
		</form>
	<?php
	}
	
	// edit rol
	
	// if the 'PK' variable is set in the URL, we know that we need to edit a record
	if (isset($_GET['PK'])) {
		// if the form's submit button is clicked, we need to process the form
		if (isset($_POST['submit'])) {
			// make sure the 'PK' in the URL is valid
			if (is_numeric($_POST['PK'])) {
				// get variables from the URL/form
				$PK = $_POST['PK'];
				$Rolafkorting = htmlentities($_POST['Rolafkorting'], ENT_QUOTES);
				$Rolomschrijving = htmlentities($_POST['Rolomschrijving'], ENT_QUOTES);
				$Subsitenaam = htmlentities($_POST['Subsitenaam'], ENT_QUOTES);
					
				// check that fields are not empty
				if ($Subsitenaam == '' || $Rolafkorting == '' || $Rolomschrijving == '') {
					// if they are empty, show an error message and display the form
					$Foutmelding = 'ERROR: Please fill in all required fields!';
					renderForm($Subsitenaam, $Rolafkorting, $Rolomschrijving, $Foutmelding, $PK);
				}
				else {
			
				/* UPDATE QUERY DOES NOT WORK
				   Updating 'Subsitenaam' does not work.
				   Updating 'Rolafkorting' en 'Rolomschrinving' works.
				*/
					// if everything is fine, update the record in the database  
					// Update Rolafkorting + Rolomschrijving
					if ($stmt = $mysqli->prepare("UPDATE Rol R SET Afkorting = ?, Omschrijving = ? WHERE PK_Rol=?")) {
						$stmt->bind_param("ssi", $Rolafkorting, $Rolomschrijving, $PK);
						$stmt->execute();
						$stmt->close();
					}
					
					// Update FK_Subsite
					if ($stmt= $mysqli->prepare("UPDATE Rol R LEFT JOIN Subsite S ON R.FK_Subsite = S.PK_Subsite SET R.FK_Subsite = S.PK_Subsite WHERE S.Naam = ? AND R.PK_Rol=?")) {
						$stmt->bind_param("si", $Subsitenaam, $PK);
						$stmt->execute();
						$stmt->close();
					}
				/* UPDATEQUERY WERKT NIET */
					
					// show an error message if the query has an error
					else {
						echo "ERROR: could not prepare SQL statement.";
					}
					
					// redirect the user once the form is updated
					header("Location: ?admin=index&rol");
				}
			}
			
			// if the 'PK' variable is not valid, show an error message
			else {
				echo "Error!";
			}
		}
		
		// if the form hasn't been submitted yet, get the info from the database and show the form
		else {
			// make sure the 'PK' value is valid
			if (is_numeric($_GET['PK']) && $_GET['PK'] > 0) {
				// get 'PK' from URL
				$PK = $_GET['PK'];
					
				// get the record from the database
				if($stmt = $mysqli->prepare("SELECT R.PK_Rol, S.Naam Subsitenaam, R.Afkorting Rolafkorting, R.Omschrijving Rolomschrijving FROM Rol R LEFT JOIN Subsite S ON R.FK_Subsite = S.PK_Subsite WHERE R.PK_Rol=?")) {
					$stmt->bind_param("i", $PK);
					$stmt->execute();
						
					$stmt->bind_result($PK, $Subsitenaam, $Rolafkorting, $Rolomschrijving);
					$stmt->fetch();
						
					// show the form
					renderForm($Subsitenaam, $Rolafkorting, $Rolomschrijving, NULL, $PK);
						
					$stmt->close();
				}
				
				// show an error if the query has an error
				else {
					echo "Error: could not prepare SQL statement";
				}
			}
			
			// if the 'PK' value is not valid, redirect the user back to the view.php page
			else {
				header("Location: ?admin=index&rol");
			}
		}
	}
	
	// nieuwe rol
	
	// if the 'PK' variable is not set in the URL, we must be creating a new record
	else {
		// if the form's submit button is clicked, we need to process the form
		if (isset($_POST['submit'])) {
			// get the form data
			$Subsitenaam = htmlentities($_POST['Subsitenaam'], ENT_QUOTES);
			$Rolafkorting = htmlentities($_POST['Rolafkorting'], ENT_QUOTES);
			$Rolomschrijving = htmlentities($_POST['Rolomschrijving'], ENT_QUOTES);
			
			// check that fields are not empty
			if ($Subsitenaam == '' || $Rolafkorting == '' || $Rolomschrijving == '') {
				// if they are empty, show an error message and display the form
				$Foutmelding = 'ERROR: Please fill in all required fields!';
				renderForm($Subsitenaam, $Rolafkorting, $Rolomschrijving, $Foutmelding);
			}
			else {
			/* INSERT QUERY DOES NOT WORK
				When inserting field 'Subsitenaam' (subsite name), the associated PK_Subsite (primary key) has to be looked up from the table 'Subsite'.
				  In the table 'Rol' (role), this value value is stored in the column 'FK_Subsite'.
			*/
				// insert the new record into the database
				if ($stmt = $mysqli->prepare("INSERT Rol () VALUES (? ? ?)")) {
					$stmt->bind_param("sss", $Subsitenaam, $Rolafkorting, $Rolomschrijving);
					$stmt->execute();
					$stmt->close();
				}
			/* INSERT QUERY DOES NOT WORK */
			
				// show an error if the query has an error
				else {
					echo "ERROR: Could not prepare SQL statement.";
				}
				
				// redirect the user
				header("Location: ?admin=index&rol");
			}
		}
		
		// if the form hasn't been submitted yet, show the form
		else {
			renderForm();
		}
	}
		
	// close the mysqli connection
	$mysqli->close();
}


/* Activiteit */
if (isset($_GET['activiteit'])) {
	// creates the new/edit record form
	function renderForm($Gebruikersnaam = '', $Subsitenaam = '', $Rolafkorting= '', $Startdatum= '', $Einddatum = '', $StartURL = '', $EindURL= '', $Foutmelding = '', $PK = '') {
		echo '<h1>'; if ($PK != '') { echo 'Activiteit wijzigen'; } else { echo 'Activiteit toevoegen'; }; echo '</h1>'; 
		if ($Foutmelding != '') {
			echo '<div style="padding:4px; margin: 0 0 10px 0; border:1px solid red; color:red">' . $Foutmelding. '</div>';
		}
	?>
		<form class="form-horizontal" action="" method="post">
			<?php if ($PK != '') { ?>
			<input type="hidden" name="PK" value="<?php echo $PK; ?>" />
			<p>PK: <?php echo $PK; ?></p>
			<?php } ?>
		
			<div class="form-group">
				<label for="Gebruikersnaam" class="col-sm-2 control-label">Gebruikersnaam</label>
				<div class="col-sm-4"><input name="Gebruikersnaam" class="form-control" type="text" value="<?php echo $Gebruikersnaam; ?>"></div>
			</div>
			<div class="form-group">
				<label for="Subsitenaam" class="col-sm-2 control-label">Subsitenaam</label>
				<div class="col-sm-4"><input name="Subsitenaam" class="form-control" type="text" value="<?php echo $Subsitenaam; ?>"></div>
			</div>
			<div class="form-group">
				<label for="Rolafkorting" class="col-sm-2 control-label">Rolafkorting</label>
				<div class="col-sm-4"><input name="Rolafkorting" class="form-control" type="text" value="<?php echo $Rolafkorting; ?>"></div>
			</div>
			<div class="form-group">
				<label for="Startdatum" class="col-sm-2 control-label">Startdatum</label>
				<div class="col-sm-4"><input name="Startdatum" class="form-control" type="text" value="<?php echo $Startdatum; ?>"></div>
			</div>
			<div class="form-group">
				<label for="Einddatum" class="col-sm-2 control-label">Einddatum</label>
				<div class="col-sm-4"><input name="Einddatum" class="form-control" type="text" value="<?php echo $Einddatum; ?>"></div>
			</div>
			<div class="form-group">
				<label for="StartURL" class="col-sm-2 control-label">StartURL</label>
				<div class="col-sm-8"><input name="StartURL" class="form-control" type="text" value="<?php echo $StartURL; ?>"></div>
			</div>
			<div class="form-group">
				<label for="EindURL" class="col-sm-2 control-label">EindURL</label>
				<div class="col-sm-8"><input name="EindURL" class="form-control" type="text" value="<?php echo $EindURL; ?>"></div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-4"><button type="submit" name="submit" class="btn btn-info">Verzenden!</button></div>
			</div>
		</form>
	<?php
	}
	
	// edit Activiteit
	
	// if the 'PK' variable is set in the URL, we know that we need to edit a record
	if (isset($_GET['PK'])) {
		// if the form's submit button is clicked, we need to process the form
		if (isset($_POST['submit'])) {
			// make sure the 'PK' in the URL is valid
			if (is_numeric($_POST['PK'])) {
				// get variables from the URL/form
				$PK = $_POST['PK'];
				$Startdatum = htmlentities($_POST['Startdatum'], ENT_QUOTES);
				$Einddatum = htmlentities($_POST['Einddatum'], ENT_QUOTES);
				$StartURL = htmlentities($_POST['StartURL'], ENT_QUOTES);
				$EindURL = htmlentities($_POST['EindURL'], ENT_QUOTES);
				$Gebruikersnaam = htmlentities($_POST['Gebruikersnaam'], ENT_QUOTES);
				$Subsitenaam = htmlentities($_POST['Subsitenaam'], ENT_QUOTES);
				$Rolafkorting = htmlentities($_POST['Rolafkorting'], ENT_QUOTES);
					
				// check that fields are not empty
				if ($Startdatum == '' || $Einddatum == '' || $StartURL == '' || $EindURL == '' || $Gebruikersnaam == '' || $Subsitenaam == '' || $Rolafkorting == '') {
					// if they are empty, show an error message and display the form
					$Foutmelding = 'ERROR: Please fill in all required fields!';
					renderForm($Gebruikersnaam, $Subsitenaam, $Rolafkorting, $Startdatum, $Einddatum, $StartURL, $EindURL, $Foutmelding, $PK);
				}
				else {
			
				/* UPDATE QUERY DOES NOT WORK
						Updating 'Gebruikersnaam' + 'Subsitenaam' + 'Rolafkorting' does not work.
						Updating 'Startdatum' + 'Einddatum' + 'StartURL' + 'EindURL' works.
				*/
					// if everything is fine, update the record in the database
					// Update Startdatum + Einddatum + StartURL + EindURL
					if ($stmt = $mysqli->prepare("UPDATE Activiteit A SET Startdatum = ?, Einddatum = ?, StartURL = ?, EindURL = ? WHERE PK_Activiteit=?")) {
						$stmt->bind_param("ssssi", $Startdatum, $Einddatum, $StartURL, $EindURL, $PK);
						$stmt->execute();
						$stmt->close();
					}
					
					// Update Gebruikersnaam + Subsite + Rolafkorting
					if ($stmt= $mysqli->prepare("UPDATE Activiteit")) {
						$stmt->bind_param("si", $Gebruikersnaam, $Subsitenaam, $Rolafkorting, $PK);
						$stmt->execute();
						$stmt->close();
					}
				/* UPDATE QUERY DOES NOT WORK */
					
					// show an error message if the query has an error
					else {
						echo "ERROR: could not prepare SQL statement.";
					}
					
					// redirect the user once the form is updated
					header("Location: ?admin=index&activiteit");
				}
			}
			
			// if the 'PK' variable is not valid, show an error message
			else {
				echo "Error!";
			}
		}
		
		// if the form hasn't been submitted yet, get the info from the database and show the form
		else {
			// make sure the 'PK' value is valid
			if (is_numeric($_GET['PK']) && $_GET['PK'] > 0) {
				// get 'PK' from URL
				$PK = $_GET['PK'];
					
				// get the record from the database
				if($stmt = $mysqli->prepare("SELECT A.PK_Activiteit, G.Gebruikersnaam, S.Naam Subsitenaam, R.Afkorting Rolafkorting, A.Startdatum, IFNULL(A.Einddatum,CURDATE()) Einddatum, A.StartURL, A.EindURL EindURL FROM Activiteit A LEFT JOIN Gebruiker G ON A.FK_Gebruiker = G.PK_Gebruiker LEFT JOIN Rol R ON A.FK_Rol	= R.PK_Rol LEFT JOIN Subsite S ON R.FK_Subsite = S.PK_Subsite WHERE A.PK_Activiteit = ?")) {
					$stmt->bind_param("i", $PK);
					$stmt->execute();
						
					$stmt->bind_result($PK, $Gebruikersnaam, $Subsitenaam, $Rolafkorting, $Startdatum, $Einddatum, $StartURL, $EindURL);
					$stmt->fetch();
						
					// show the form
					renderForm($Gebruikersnaam, $Subsitenaam, $Rolafkorting, $Startdatum, $Einddatum, $StartURL, $EindURL, NULL, $PK);
						
					$stmt->close();
				}
				
				// show an error if the query has an error
				else {
					echo "Error: could not prepare SQL statement";
				}
			}
			
			// if the 'PK' value is not valid, redirect the user back to the view.php page
			else {
				header("Location: ?admin=index&activiteit");
			}
		}
	}
	
	// nieuwe activiteit
	
	// if the 'PK' variable is not set in the URL, we must be creating a new record
	else {
		// if the form's submit button is clicked, we need to process the form
		if (isset($_POST['submit'])) {
			// get the form data
			$Startdatum = htmlentities($_POST['Startdatum'], ENT_QUOTES);
			$Einddatum = htmlentities($_POST['Einddatum'], ENT_QUOTES);
			$StartURL = htmlentities($_POST['StartURL'], ENT_QUOTES);
			$EindURL = htmlentities($_POST['EindURL'], ENT_QUOTES);
			$Gebruikersnaam = htmlentities($_POST['Gebruikersnaam'], ENT_QUOTES);
			$Subsitenaam = htmlentities($_POST['Subsitenaam'], ENT_QUOTES);
			$Rolafkorting = htmlentities($_POST['Rolafkorting'], ENT_QUOTES);
			
			// check that fields are not empty
			if ($Gebruikersnaam = '' || $Subsitenaam = '' || $Rolafkorting = '' || $Startdatum = '' || $Einddatum = '' || $StartURL = '' || $EindURL = '') {
				// if they are empty, show an error message and display the form
				$Foutmelding = 'ERROR: Please fill in all required fields!';
				renderForm($Gebruikersnaam, $Subsitenaam, $Rolafkorting, $Startdatum, $Einddatum, $StartURL, $EindURL, $Foutmelding);
			}
			else {
			/* INSERT QUERY DOES NOT WORK
				When inserting field 'Gebruikersnaam' (username), the associated PK_Gebruiker (primary key) has to be looked up from the table 'Gebruiker'.
				  In the table 'Activiteit' (activity), this value value is stored in the column 'FK_Gebruiker'.
				When inserting field 'Subsitenaam' (subsite name), the associated PK_Subsite (primary key) has to be looked up from the table 'Subsite'.
				  In the table 'Activiteit' (activity), this value value is stored in the column 'FK_Subsite'.
				When inserting field 'Rolafkorting' (role abbreviation), the associated PK_Rol (primary key) has to be looked up from the table 'Rol'.
				  In the table 'Activiteit' (activity), this value value is stored in the column 'FK_Rol'.
			*/
				// insert the new record into the database
				if ($stmt = $mysqli->prepare("INSERT Activiteit () VALUES (? ? ? ? ? ? ?)")) {
					$stmt->bind_param("sssssss", $Gebruikersnaam, $Subsitenaam, $Rolafkorting, $Startdatum, $Einddatum, $StartURL, $EindURL);
					$stmt->execute();
					$stmt->close();
				}
			/* INSERT QUERY DOES NOT WORK */
			
				// show an error if the query has an error
				else {
					echo "ERROR: Could not prepare SQL statement.";
				}
				
				// redirect the user
				header("Location: ?admin=index&activiteit");
			}
		}
		
		// if the form hasn't been submitted yet, show the form
		else {
			renderForm();
		}
	}
		
	// close the mysqli connection
	$mysqli->close();
}
?>
</div>