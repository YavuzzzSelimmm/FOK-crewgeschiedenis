<?php 
$id = $_GET["id"];
?>

<div id="content" class="content">
	<!-- begin page-header -->
	<h1 class="page-header">
		Ranglijst 
		<?php
		    if ($id == 'fok') { echo '<small>FOK!</small>'; } 
		elseif ($id == 'forum') { echo '<small>FORUM</small>'; } 
		elseif ($id == 'frontpage') { echo '<small>FRONTPAGE</small>'; } 
		elseif ($id == 'games') { echo '<small>GAMES</small>'; } 
		elseif ($id == 'sport') { echo '<small>SPORT</small>'; } 
		?>
	</h1> 
	<!-- end page-header -->
	
<?php 
if ($id == 'fok') {	
?>
	<!-- begin row -->
	<div class="row">
		<!-- begin col-6 -->
		<div class="col-md-4">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#totaal" data-toggle="tab">Totaal</a></li>
				<li class=""><a href="#chefspell" data-toggle="tab">Chef Spellcheckers</a></li>
				<li class=""><a href="#spell" data-toggle="tab">Spellchecker</a></li>
				<li class=""><a href="#designer" data-toggle="tab">Designer</a></li>
				<li class=""><a href="#fokfot" data-toggle="tab">FOK!fotograaf</a></li>
				<li class=""><a href="#fobomod" data-toggle="tab">Fotoboek-mod</a></li>
				<li class=""><a href="#hrfot" data-toggle="tab">HR Fotografie</a></li>
				<li class=""><a href="#manpr" data-toggle="tab">Manager PR</a></li>
				<li class=""><a href="#pr" data-toggle="tab">PR</a></li>
				<li class=""><a href="#postkantoor" data-toggle="tab">Postkantoor</a></li>
				<li class=""><a href="#wikimod" data-toggle="tab">Wiki-mod</a></li>
				<li class=""><a href="#weblogger" data-toggle="tab">Weblogger</a></li>
			</ul>
			
			<div class="tab-content">
				<div class="tab-pane fade active in" id="totaal">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
								<th>Aantal dagen</th>
							</tr>
						</thead>
						<tbody>
					<?php 
						$nr = 0;
						
						try {
							require('config.php'); 
							
							$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
							$sql=	"select
										UserID, UserName, Subsite, Count(*) NrOfUniqueDays
									from (select 
											  User.ID AS UserID
											, Data.User        AS UserName
											, Data.Subsite     AS Subsite
											, Date.Day 
										from Date
										join Data
											on Date.Day between Data.Startdate and case when Data.Enddate = '0000-00-00' then curdate() else Data.Enddate end
										left join User 
											on Data.User = User.UserName
										where Data.Subsite = 'FOK!'
										group by User.ID, Data.User, Data.Subsite, Date.Day) Ranglijst
									group by UserID
									order by NrOfUniqueDays desc
									"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
					
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								echo '<tr>';
								echo '<td>' . ++$nr . '</td>';
								echo '<td><a href="/user/'. $row['UserID'] .'">' . $row['UserName'] . '</a></td>';
								echo '<td>' . $row['NrOfUniqueDays'] . '</td>';
								echo '</tr>';
							}
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
						</tbody>
					</table>
							
				</div>
				
				
				
				<div class="tab-pane fade" id="chefspell">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
								<th>Aantal dagen</th>
							</tr>
						</thead>
						<tbody>
					<?php 
						$nr = 0;
						
						try {
							require('config.php'); 
							
							$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
							$sql=	"select
										UserID, UserName, Subsite, Count(*) NrOfUniqueDays
									from (select 
											  User.ID AS UserID
											, Data.User        AS UserName
											, Data.Subsite     AS Subsite
											, Date.Day 
										from Date
										join Data
											on Date.Day between Data.Startdate and case when Data.Enddate = '0000-00-00' then curdate() else Data.Enddate end
										left join User 
											on Data.User = User.UserName
										where Data.Subsite = 'FOK!' and Data.Unit = 'Chef Spellcheckers'
										group by User.ID, Data.User, Data.Subsite, Date.Day) Ranglijst
									group by UserID
									order by NrOfUniqueDays desc"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
					
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								echo '<tr>';
								echo '<td>' . ++$nr . '</td>';
								echo '<td><a href="/user/'. $row['UserID'] .'">' . $row['UserName'] . '</a></td>';
								echo '<td>' . $row['NrOfUniqueDays'] . '</td>';
								echo '</tr>';
							}
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
						</tbody>
					</table>
				</div>
				
				
				<div class="tab-pane fade" id="spell">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
								<th>Aantal dagen</th>
							</tr>
						</thead>
						<tbody>
					<?php 
						$nr = 0;
						
						try {
							require('config.php'); 
							
							$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
							$sql=	"select
										UserID, UserName, Subsite, Count(*) NrOfUniqueDays
									from (select 
											  User.ID AS UserID
											, Data.User        AS UserName
											, Data.Subsite     AS Subsite
											, Date.Day 
										from Date
										join Data
											on Date.Day between Data.Startdate and case when Data.Enddate = '0000-00-00' then curdate() else Data.Enddate end
										left join User 
											on Data.User = User.UserName
										where Data.Subsite = 'FOK!' and Data.Unit = 'Spellchecker'
										group by User.ID, Data.User, Data.Subsite, Date.Day) Ranglijst
									group by UserID
									order by NrOfUniqueDays desc"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
					
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								echo '<tr>';
								echo '<td>' . ++$nr . '</td>';
								echo '<td><a href="/user/'. $row['UserID'] .'">' . $row['UserName'] . '</a></td>';
								echo '<td>' . $row['NrOfUniqueDays'] . '</td>';
								echo '</tr>';
							}
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
						</tbody>
					</table>
				</div>

				<div class="tab-pane fade" id="designer">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
								<th>Aantal dagen</th>
							</tr>
						</thead>
						<tbody>
					<?php 
						$nr = 0;
						
						try {
							require('config.php'); 
							
							$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
							$sql=	"select
										UserID, UserName, Subsite, Count(*) NrOfUniqueDays
									from (select 
											  User.ID AS UserID
											, Data.User        AS UserName
											, Data.Subsite     AS Subsite
											, Date.Day 
										from Date
										join Data
											on Date.Day between Data.Startdate and case when Data.Enddate = '0000-00-00' then curdate() else Data.Enddate end
										left join User 
											on Data.User = User.UserName
										where Data.Subsite = 'FOK!' and Data.Unit = 'Designer'
										group by User.ID, Data.User, Data.Subsite, Date.Day) Ranglijst
									group by UserID
									order by NrOfUniqueDays desc"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
					
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								echo '<tr>';
								echo '<td>' . ++$nr . '</td>';
								echo '<td><a href="/user/'. $row['UserID'] .'">' . $row['UserName'] . '</a></td>';
								echo '<td>' . $row['NrOfUniqueDays'] . '</td>';
								echo '</tr>';
							}
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
						</tbody>
					</table>
				</div>

				<div class="tab-pane fade" id="fobomod">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
								<th>Aantal dagen</th>
							</tr>
						</thead>
						<tbody>
					<?php 
						$nr = 0;
						
						try {
							require('config.php'); 
							
							$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
							$sql=	"select
										UserID, UserName, Subsite, Count(*) NrOfUniqueDays
									from (select 
											  User.ID AS UserID
											, Data.User        AS UserName
											, Data.Subsite     AS Subsite
											, Date.Day 
										from Date
										join Data
											on Date.Day between Data.Startdate and case when Data.Enddate = '0000-00-00' then curdate() else Data.Enddate end
										left join User 
											on Data.User = User.UserName
										where Data.Subsite = 'FOK!' and Data.Unit = 'Fotoboek-moderator'
										group by User.ID, Data.User, Data.Subsite, Date.Day) Ranglijst
									group by UserID
									order by NrOfUniqueDays desc"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
					
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								echo '<tr>';
								echo '<td>' . ++$nr . '</td>';
								echo '<td><a href="/user/'. $row['UserID'] .'">' . $row['UserName'] . '</a></td>';
								echo '<td>' . $row['NrOfUniqueDays'] . '</td>';
								echo '</tr>';
							}
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
						</tbody>
					</table>
				</div>

				<div class="tab-pane fade" id="hrfot">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
								<th>Aantal dagen</th>
							</tr>
						</thead>
						<tbody>
					<?php 
						$nr = 0;
						
						try {
							require('config.php'); 
							
							$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
							$sql=	"select
										UserID, UserName, Subsite, Count(*) NrOfUniqueDays
									from (select 
											  User.ID AS UserID
											, Data.User        AS UserName
											, Data.Subsite     AS Subsite
											, Date.Day 
										from Date
										join Data
											on Date.Day between Data.Startdate and case when Data.Enddate = '0000-00-00' then curdate() else Data.Enddate end
										left join User 
											on Data.User = User.UserName
										where Data.Subsite = 'FOK!' and Data.Unit = 'HR Fotografie'
										group by User.ID, Data.User, Data.Subsite, Date.Day) Ranglijst
									group by UserID
									order by NrOfUniqueDays desc"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
					
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								echo '<tr>';
								echo '<td>' . ++$nr . '</td>';
								echo '<td><a href="/user/'. $row['UserID'] .'">' . $row['UserName'] . '</a></td>';
								echo '<td>' . $row['NrOfUniqueDays'] . '</td>';
								echo '</tr>';
							}
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
						</tbody>
					</table>
				</div>

				<div class="tab-pane fade" id="manpr">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
								<th>Aantal dagen</th>
							</tr>
						</thead>
						<tbody>
					<?php 
						$nr = 0;
						
						try {
							require('config.php'); 
							
							$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
							$sql=	"select
										UserID, UserName, Subsite, Count(*) NrOfUniqueDays
									from (select 
											  User.ID AS UserID
											, Data.User        AS UserName
											, Data.Subsite     AS Subsite
											, Date.Day 
										from Date
										join Data
											on Date.Day between Data.Startdate and case when Data.Enddate = '0000-00-00' then curdate() else Data.Enddate end
										left join User 
											on Data.User = User.UserName
										where Data.Subsite = 'FOK!' and Data.Unit = 'Manager PR'
										group by User.ID, Data.User, Data.Subsite, Date.Day) Ranglijst
									group by UserID
									order by NrOfUniqueDays desc"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
					
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								echo '<tr>';
								echo '<td>' . ++$nr . '</td>';
								echo '<td><a href="/user/'. $row['UserID'] .'">' . $row['UserName'] . '</a></td>';
								echo '<td>' . $row['NrOfUniqueDays'] . '</td>';
								echo '</tr>';
							}
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
						</tbody>
					</table>
				</div>

				<div class="tab-pane fade" id="pr">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
								<th>Aantal dagen</th>
							</tr>
						</thead>
						<tbody>
					<?php 
						$nr = 0;
						
						try {
							require('config.php'); 
							
							$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
							$sql=	"select
										UserID, UserName, Subsite, Count(*) NrOfUniqueDays
									from (select 
											  User.ID AS UserID
											, Data.User        AS UserName
											, Data.Subsite     AS Subsite
											, Date.Day 
										from Date
										join Data
											on Date.Day between Data.Startdate and case when Data.Enddate = '0000-00-00' then curdate() else Data.Enddate end
										left join User 
											on Data.User = User.UserName
										where Data.Subsite = 'FOK!' and Data.Unit = 'PR'
										group by User.ID, Data.User, Data.Subsite, Date.Day) Ranglijst
									group by UserID
									order by NrOfUniqueDays desc"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
					
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								echo '<tr>';
								echo '<td>' . ++$nr . '</td>';
								echo '<td><a href="/user/'. $row['UserID'] .'">' . $row['UserName'] . '</a></td>';
								echo '<td>' . $row['NrOfUniqueDays'] . '</td>';
								echo '</tr>';
							}
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
						</tbody>
					</table>
				</div>

				<div class="tab-pane fade" id="postkantoor">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
								<th>Aantal dagen</th>
							</tr>
						</thead>
						<tbody>
					<?php 
						$nr = 0;
						
						try {
							require('config.php'); 
							
							$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
							$sql=	"select
										UserID, UserName, Subsite, Count(*) NrOfUniqueDays
									from (select 
											  User.ID AS UserID
											, Data.User        AS UserName
											, Data.Subsite     AS Subsite
											, Date.Day 
										from Date
										join Data
											on Date.Day between Data.Startdate and case when Data.Enddate = '0000-00-00' then curdate() else Data.Enddate end
										left join User 
											on Data.User = User.UserName
										where Data.Subsite = 'FOK!' and Data.Unit = 'Postkantoor'
										group by User.ID, Data.User, Data.Subsite, Date.Day) Ranglijst
									group by UserID
									order by NrOfUniqueDays desc"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
					
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								echo '<tr>';
								echo '<td>' . ++$nr . '</td>';
								echo '<td><a href="/user/'. $row['UserID'] .'">' . $row['UserName'] . '</a></td>';
								echo '<td>' . $row['NrOfUniqueDays'] . '</td>';
								echo '</tr>';
							}
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
						</tbody>
					</table>
				</div>

				<div class="tab-pane fade" id="wikimod">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
								<th>Aantal dagen</th>
							</tr>
						</thead>
						<tbody>
					<?php 
						$nr = 0;
						
						try {
							require('config.php'); 
							
							$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
							$sql=	"select
										UserID, UserName, Subsite, Count(*) NrOfUniqueDays
									from (select 
											  User.ID AS UserID
											, Data.User        AS UserName
											, Data.Subsite     AS Subsite
											, Date.Day 
										from Date
										join Data
											on Date.Day between Data.Startdate and case when Data.Enddate = '0000-00-00' then curdate() else Data.Enddate end
										left join User 
											on Data.User = User.UserName
										where Data.Subsite = 'FOK!' and Data.Unit = 'Wiki-moderator'
										group by User.ID, Data.User, Data.Subsite, Date.Day) Ranglijst
									group by UserID
									order by NrOfUniqueDays desc"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
					
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								echo '<tr>';
								echo '<td>' . ++$nr . '</td>';
								echo '<td><a href="/user/'. $row['UserID'] .'">' . $row['UserName'] . '</a></td>';
								echo '<td>' . $row['NrOfUniqueDays'] . '</td>';
								echo '</tr>';
							}
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
						</tbody>
					</table>
				</div>

				<div class="tab-pane fade" id="weblogger">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
								<th>Aantal dagen</th>
							</tr>
						</thead>
						<tbody>
					<?php 
						$nr = 0;
						
						try {
							require('config.php'); 
							
							$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
							$sql=	"select
										UserID, UserName, Subsite, Count(*) NrOfUniqueDays
									from (select 
											  User.ID AS UserID
											, Data.User        AS UserName
											, Data.Subsite     AS Subsite
											, Date.Day 
										from Date
										join Data
											on Date.Day between Data.Startdate and case when Data.Enddate = '0000-00-00' then curdate() else Data.Enddate end
										left join User 
											on Data.User = User.UserName
										where Data.Subsite = 'FOK!' and Data.Unit = 'Weblogger'
										group by User.ID, Data.User, Data.Subsite, Date.Day) Ranglijst
									group by UserID
									order by NrOfUniqueDays desc"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
					
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								echo '<tr>';
								echo '<td>' . ++$nr . '</td>';
								echo '<td><a href="/user/'. $row['UserID'] .'">' . $row['UserName'] . '</a></td>';
								echo '<td>' . $row['NrOfUniqueDays'] . '</td>';
								echo '</tr>';
							}
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
						</tbody>
					</table>
				</div>
				
			</div>
		</div>
		<!-- end col-6 -->
	</div>
	<!-- end row -->
<?php 
}

elseif ($id == 'forum') {	
?>
	<!-- begin row -->
	<div class="row">
		<!-- begin col-6 -->
		<div class="col-md-4">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#totaal" data-toggle="tab">Totaal</a></li>
				<li class=""><a href="#mods" data-toggle="tab">Mods</a></li>
				<li class=""><a href="#fa" data-toggle="tab">FA</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane fade active in" id="totaal">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
								<th>Aantal dagen</th>
							</tr>
						</thead>
						<tbody>
					<?php 
						$nr = 0;
						
						try {
							require('config.php'); 
							
							$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
							$sql=	"select
										UserID, UserName, Subsite, Count(*) NrOfUniqueDays
									from (select 
											  User.ID AS UserID
											, Data.User        AS UserName
											, Data.Subsite     AS Subsite
											, Date.Day 
										from Date
										join Data
											on Date.Day between Data.Startdate and case when Data.Enddate = '0000-00-00' then curdate() else Data.Enddate end
										left join User 
											on Data.User = User.UserName
										where Data.Subsite = 'Forum'
										group by User.ID, Data.User, Data.Subsite, Date.Day) Ranglijst
									group by UserID
									order by NrOfUniqueDays desc
									"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
					
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								echo '<tr>';
								echo '<td>' . ++$nr . '</td>';
								echo '<td><a href="/user/'. $row['UserID'] .'">' . $row['UserName'] . '</a></td>';
								echo '<td>' . $row['NrOfUniqueDays'] . '</td>';
								echo '</tr>';
							}
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
						</tbody>
					</table>
							
				</div>
				
				
				
				<div class="tab-pane fade" id="mods">

					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
								<th>Aantal dagen</th>
							</tr>
						</thead>
						<tbody>
					<?php 
						$nr = 0;
						
						try {
							require('config.php'); 
							
							$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
							$sql=	"select
										UserID, UserName, Subsite, Count(*) NrOfUniqueDays
									from (select 
											  User.ID AS UserID
											, Data.User        AS UserName
											, Data.Subsite     AS Subsite
											, Date.Day 
										from Date
										join Data
											on Date.Day between Data.Startdate and case when Data.Enddate = '0000-00-00' then curdate() else Data.Enddate end
										left join User 
											on Data.User = User.UserName
										where Data.Subsite = 'Forum' and Data.Unit <> 'Forum Admin'
										group by User.ID, Data.User, Data.Subsite, Date.Day) Ranglijst
									group by UserID
									order by NrOfUniqueDays desc"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
					
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								echo '<tr>';
								echo '<td>' . ++$nr . '</td>';
								echo '<td><a href="/user/'. $row['UserID'] .'">' . $row['UserName'] . '</a></td>';
								echo '<td>' . $row['NrOfUniqueDays'] . '</td>';
								echo '</tr>';
							}
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
						</tbody>
					</table>
				</div>
				
				
				<div class="tab-pane fade" id="fa">

					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
								<th>Aantal dagen</th>
							</tr>
						</thead>
						<tbody>
					<?php 
						$nr = 0;
						
						try {
							require('config.php'); 
							
							$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
							$sql=	"select
										UserID, UserName, Subsite, Count(*) NrOfUniqueDays
									from (select 
											  User.ID AS UserID
											, Data.User        AS UserName
											, Data.Subsite     AS Subsite
											, Date.Day 
										from Date
										join Data
											on Date.Day between Data.Startdate and case when Data.Enddate = '0000-00-00' then curdate() else Data.Enddate end
										left join User 
											on Data.User = User.UserName
										where Data.Subsite = 'Forum' and Data.Unit = 'Forum Admin'
										group by User.ID, Data.User, Data.Subsite, Date.Day) Ranglijst
									group by UserID
									order by NrOfUniqueDays desc"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
					
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								echo '<tr>';
								echo '<td>' . ++$nr . '</td>';
								echo '<td><a href="/user/'. $row['UserID'] .'">' . $row['UserName'] . '</a></td>';
								echo '<td>' . $row['NrOfUniqueDays'] . '</td>';
								echo '</tr>';
							}
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
						</tbody>
					</table>
				</div>
				
			</div>
		</div>
		<!-- end col-6 -->
	</div>
	<!-- end row -->
<?php 
}

elseif ($id == 'frontpage') {	
?>
	<!-- begin row -->
	<div class="row">
		<!-- begin col-6 -->
		<div class="col-md-10">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#totaal" data-toggle="tab">Totaal</a></li>
				<li class=""><a href="#cmfp" data-toggle="tab">Coördinator Moderaties</a></li>
				<li class=""><a href="#erfp" data-toggle="tab">Eindredactie</a></li>
				<li class=""><a href="#modfp" data-toggle="tab">Moderator</a></li>
				<li class=""><a href="#nwspst" data-toggle="tab">Nieuwsposter</a></li>
				<li class=""><a href="#redfp" data-toggle="tab">Redactie</a></li>
				<li class=""><a href="#manrevfp" data-toggle="tab">Manager Reviews</a></li>
				<li class=""><a href="#revfp" data-toggle="tab">Reviewer</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane fade active in" id="totaal">
					<table class="table table-striped" style="width: 300px;">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
								<th>Aantal dagen</th>
							</tr>
						</thead>
						<tbody>
					<?php 
						$nr = 0;
						
						try {
							require('config.php'); 
							
							$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
							$sql=	"select
										UserID, UserName, Subsite, Count(*) NrOfUniqueDays
									from (select 
											  User.ID AS UserID
											, Data.User        AS UserName
											, Data.Subsite     AS Subsite
											, Date.Day 
										from Date
										join Data
											on Date.Day between Data.Startdate and case when Data.Enddate = '0000-00-00' then curdate() else Data.Enddate end
										left join User 
											on Data.User = User.UserName
										where Data.Subsite = 'Frontpage'
										group by User.ID, Data.User, Data.Subsite, Date.Day) Ranglijst
									group by UserID
									order by NrOfUniqueDays desc
									"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
					
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								echo '<tr>';
								echo '<td>' . ++$nr . '</td>';
								echo '<td><a href="/user/'. $row['UserID'] .'">' . $row['UserName'] . '</a></td>';
								echo '<td>' . $row['NrOfUniqueDays'] . '</td>';
								echo '</tr>';
							}
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
						</tbody>
					</table>
							
				</div>
				
				
				
				<div class="tab-pane fade" id="cmfp">

					<table class="table table-striped" style="width: 300px;">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
								<th>Aantal dagen</th>
							</tr>
						</thead>
						<tbody>
					<?php 
						$nr = 0;
						
						try {
							require('config.php'); 
							
							$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
							$sql=	"select
										UserID, UserName, Subsite, Count(*) NrOfUniqueDays
									from (select 
											  User.ID AS UserID
											, Data.User        AS UserName
											, Data.Subsite     AS Subsite
											, Date.Day 
										from Date
										join Data
											on Date.Day between Data.Startdate and case when Data.Enddate = '0000-00-00' then curdate() else Data.Enddate end
										left join User 
											on Data.User = User.UserName
										where Data.Subsite = 'Frontpage' and Data.Unit like 'Co%rdinator Moderaties FP'
										group by User.ID, Data.User, Data.Subsite, Date.Day) Ranglijst
									group by UserID
									order by NrOfUniqueDays desc"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
					
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								echo '<tr>';
								echo '<td>' . ++$nr . '</td>';
								echo '<td><a href="/user/'. $row['UserID'] .'">' . $row['UserName'] . '</a></td>';
								echo '<td>' . $row['NrOfUniqueDays'] . '</td>';
								echo '</tr>';
							}
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
						</tbody>
					</table>
				</div>
				
				
				<div class="tab-pane fade" id="erfp">

					<table class="table table-striped" style="width: 300px;">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
								<th>Aantal dagen</th>
							</tr>
						</thead>
						<tbody>
					<?php 
						$nr = 0;
						
						try {
							require('config.php'); 
							
							$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
							$sql=	"select
										UserID, UserName, Subsite, Count(*) NrOfUniqueDays
									from (select 
											  User.ID AS UserID
											, Data.User        AS UserName
											, Data.Subsite     AS Subsite
											, Date.Day 
										from Date
										join Data
											on Date.Day between Data.Startdate and case when Data.Enddate = '0000-00-00' then curdate() else Data.Enddate end
										left join User 
											on Data.User = User.UserName
										where Data.Subsite = 'Frontpage' and Data.Unit = 'Eindredactie FP'
										group by User.ID, Data.User, Data.Subsite, Date.Day) Ranglijst
									group by UserID
									order by NrOfUniqueDays desc"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
					
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								echo '<tr>';
								echo '<td>' . ++$nr . '</td>';
								echo '<td><a href="/user/'. $row['UserID'] .'">' . $row['UserName'] . '</a></td>';
								echo '<td>' . $row['NrOfUniqueDays'] . '</td>';
								echo '</tr>';
							}
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
						</tbody>
					</table>
				</div>
				
				
				<div class="tab-pane fade" id="modfp">
					<table class="table table-striped" style="width: 300px;">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
								<th>Aantal dagen</th>
							</tr>
						</thead>
						<tbody>
					<?php 
						$nr = 0;
						
						try {
							require('config.php'); 
							
							$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
							$sql=	"select
										UserID, UserName, Subsite, Count(*) NrOfUniqueDays
									from (select 
											  User.ID AS UserID
											, Data.User        AS UserName
											, Data.Subsite     AS Subsite
											, Date.Day 
										from Date
										join Data
											on Date.Day between Data.Startdate and case when Data.Enddate = '0000-00-00' then curdate() else Data.Enddate end
										left join User 
											on Data.User = User.UserName
										where Data.Subsite = 'Frontpage' and Data.Unit = 'Moderator FP'
										group by User.ID, Data.User, Data.Subsite, Date.Day) Ranglijst
									group by UserID
									order by NrOfUniqueDays desc"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
					
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								echo '<tr>';
								echo '<td>' . ++$nr . '</td>';
								echo '<td><a href="/user/'. $row['UserID'] .'">' . $row['UserName'] . '</a></td>';
								echo '<td>' . $row['NrOfUniqueDays'] . '</td>';
								echo '</tr>';
							}
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
						</tbody>
					</table>
				</div>
				
				
				<div class="tab-pane fade" id="nwspst">

					<table class="table table-striped" style="width: 300px;">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
								<th>Aantal dagen</th>
							</tr>
						</thead>
						<tbody>
					<?php 
						$nr = 0;
						
						try {
							require('config.php'); 
							
							$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
							$sql=	"select
										UserID, UserName, Subsite, Count(*) NrOfUniqueDays
									from (select 
											  User.ID AS UserID
											, Data.User        AS UserName
											, Data.Subsite     AS Subsite
											, Date.Day 
										from Date
										join Data
											on Date.Day between Data.Startdate and case when Data.Enddate = '0000-00-00' then curdate() else Data.Enddate end
										left join User 
											on Data.User = User.UserName
										where Data.Subsite = 'Frontpage' and Data.Unit = 'Nieuwsposter'
										group by User.ID, Data.User, Data.Subsite, Date.Day) Ranglijst
									group by UserID
									order by NrOfUniqueDays desc"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
					
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								echo '<tr>';
								echo '<td>' . ++$nr . '</td>';
								echo '<td><a href="/user/'. $row['UserID'] .'">' . $row['UserName'] . '</a></td>';
								echo '<td>' . $row['NrOfUniqueDays'] . '</td>';
								echo '</tr>';
							}
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
						</tbody>
					</table>
				</div>
				
				
				<div class="tab-pane fade" id="redfp">

					<table class="table table-striped" style="width: 300px;">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
								<th>Aantal dagen</th>
							</tr>
						</thead>
						<tbody>
					<?php 
						$nr = 0;
						
						try {
							require('config.php'); 
							
							$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
							$sql=	"select
										UserID, UserName, Subsite, Count(*) NrOfUniqueDays
									from (select 
											  User.ID AS UserID
											, Data.User        AS UserName
											, Data.Subsite     AS Subsite
											, Date.Day 
										from Date
										join Data
											on Date.Day between Data.Startdate and case when Data.Enddate = '0000-00-00' then curdate() else Data.Enddate end
										left join User 
											on Data.User = User.UserName
										where Data.Subsite = 'Frontpage' and Data.Unit = 'Redactie FP'
										group by User.ID, Data.User, Data.Subsite, Date.Day) Ranglijst
									group by UserID
									order by NrOfUniqueDays desc"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
					
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								echo '<tr>';
								echo '<td>' . ++$nr . '</td>';
								echo '<td><a href="/user/'. $row['UserID'] .'">' . $row['UserName'] . '</a></td>';
								echo '<td>' . $row['NrOfUniqueDays'] . '</td>';
								echo '</tr>';
							}
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
						</tbody>
					</table>
				</div>
				
				
				<div class="tab-pane fade" id="manrevfp">
					<table class="table table-striped"  style="width: 300px;">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
								<th>Aantal dagen</th>
							</tr>
						</thead>
						<tbody>
					<?php 
						$nr = 0;
						
						try {
							require('config.php'); 
							
							$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
							$sql=	"select
										UserID, UserName, Subsite, Count(*) NrOfUniqueDays
									from (select 
											  User.ID AS UserID
											, Data.User        AS UserName
											, Data.Subsite     AS Subsite
											, Date.Day 
										from Date
										join Data
											on Date.Day between Data.Startdate and case when Data.Enddate = '0000-00-00' then curdate() else Data.Enddate end
										left join User 
											on Data.User = User.UserName
										where Data.Subsite = 'Frontpage' and Data.Unit = 'Manager Reviews'
										group by User.ID, Data.User, Data.Subsite, Date.Day) Ranglijst
									group by UserID
									order by NrOfUniqueDays desc"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
					
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								echo '<tr>';
								echo '<td>' . ++$nr . '</td>';
								echo '<td><a href="/user/'. $row['UserID'] .'">' . $row['UserName'] . '</a></td>';
								echo '<td>' . $row['NrOfUniqueDays'] . '</td>';
								echo '</tr>';
							}
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
						</tbody>
					</table>
				</div>
				
				
				<div class="tab-pane fade" id="revfp">
					<table class="table table-striped" style="width: 300px;">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
								<th>Aantal dagen</th>
							</tr>
						</thead>
						<tbody>
					<?php 
						$nr = 0;
						
						try {
							require('config.php'); 
							
							$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
							$sql=	"select
										UserID, UserName, Subsite, Count(*) NrOfUniqueDays
									from (select 
											  User.ID AS UserID
											, Data.User        AS UserName
											, Data.Subsite     AS Subsite
											, Date.Day 
										from Date
										join Data
											on Date.Day between Data.Startdate and case when Data.Enddate = '0000-00-00' then curdate() else Data.Enddate end
										left join User 
											on Data.User = User.UserName
										where Data.Subsite = 'Frontpage' and Data.Unit = 'Reviewer'
										group by User.ID, Data.User, Data.Subsite, Date.Day) Ranglijst
									group by UserID
									order by NrOfUniqueDays desc"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
					
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								echo '<tr>';
								echo '<td>' . ++$nr . '</td>';
								echo '<td><a href="/user/'. $row['UserID'] .'">' . $row['UserName'] . '</a></td>';
								echo '<td>' . $row['NrOfUniqueDays'] . '</td>';
								echo '</tr>';
							}
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
						</tbody>
					</table>
				</div>
				
			</div>
		</div>
		<!-- end col-6 -->
	</div>
	<!-- end row -->
<?php 
}

elseif ($id == 'games') {	
?>
	<!-- begin row -->
	<div class="row">
		<!-- begin col-6 -->
		<div class="col-md-4">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#totaal" data-toggle="tab">Totaal</a></li>
				<li class=""><a href="#red" data-toggle="tab">Redactie</a></li>
				<li class=""><a href="#er" data-toggle="tab">Eindredactie</a></li>
				<li class=""><a href="#hr" data-toggle="tab">Hoofdredactie</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane fade active in" id="totaal">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
								<th>Aantal dagen</th>
							</tr>
						</thead>
						<tbody>
					<?php 
						$nr = 0;
						
						try {
							require('config.php'); 
							
							$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
							$sql=	"select
										UserID, UserName, Subsite, Count(*) NrOfUniqueDays
									from (select 
											  User.ID AS UserID
											, Data.User        AS UserName
											, Data.Subsite     AS Subsite
											, Date.Day 
										from Date
										join Data
											on Date.Day between Data.Startdate and case when Data.Enddate = '0000-00-00' then curdate() else Data.Enddate end
										left join User 
											on Data.User = User.UserName
										where Data.Subsite = 'Games'
										group by User.ID, Data.User, Data.Subsite, Date.Day) Ranglijst
									group by UserID
									order by NrOfUniqueDays desc
									"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
					
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								echo '<tr>';
								echo '<td>' . ++$nr . '</td>';
								echo '<td><a href="/user/'. $row['UserID'] .'">' . $row['UserName'] . '</a></td>';
								echo '<td>' . $row['NrOfUniqueDays'] . '</td>';
								echo '</tr>';
							}
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
						</tbody>
					</table>					
				</div>
				
				
				<div class="tab-pane fade" id="red">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
								<th>Aantal dagen</th>
							</tr>
						</thead>
						<tbody>
					<?php 
						$nr = 0;
						
						try {
							require('config.php'); 
							
							$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
							$sql=	"select
										UserID, UserName, Subsite, Count(*) NrOfUniqueDays
									from (select 
											  User.ID AS UserID
											, Data.User        AS UserName
											, Data.Subsite     AS Subsite
											, Date.Day 
										from Date
										join Data
											on Date.Day between Data.Startdate and case when Data.Enddate = '0000-00-00' then curdate() else Data.Enddate end
										left join User 
											on Data.User = User.UserName
										where Data.Subsite = 'Games' and Data.Unit = 'Redactie Games'
										group by User.ID, Data.User, Data.Subsite, Date.Day) Ranglijst
									group by UserID
									order by NrOfUniqueDays desc"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
					
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								echo '<tr>';
								echo '<td>' . ++$nr . '</td>';
								echo '<td><a href="/user/'. $row['UserID'] .'">' . $row['UserName'] . '</a></td>';
								echo '<td>' . $row['NrOfUniqueDays'] . '</td>';
								echo '</tr>';
							}
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
						</tbody>
					</table>
				</div>
				
				
				<div class="tab-pane fade" id="er">

					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
								<th>Aantal dagen</th>
							</tr>
						</thead>
						<tbody>
					<?php 
						$nr = 0;
						
						try {
							require('config.php'); 
							
							$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
							$sql=	"select
										UserID, UserName, Subsite, Count(*) NrOfUniqueDays
									from (select 
											  User.ID AS UserID
											, Data.User        AS UserName
											, Data.Subsite     AS Subsite
											, Date.Day 
										from Date
										join Data
											on Date.Day between Data.Startdate and case when Data.Enddate = '0000-00-00' then curdate() else Data.Enddate end
										left join User 
											on Data.User = User.UserName
										where Data.Subsite = 'Games' and Data.Unit = 'Eindredactie Games'
										group by User.ID, Data.User, Data.Subsite, Date.Day) Ranglijst
									group by UserID
									order by NrOfUniqueDays desc"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
					
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								echo '<tr>';
								echo '<td>' . ++$nr . '</td>';
								echo '<td><a href="/user/'. $row['UserID'] .'">' . $row['UserName'] . '</a></td>';
								echo '<td>' . $row['NrOfUniqueDays'] . '</td>';
								echo '</tr>';
							}
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
						</tbody>
					</table>
				</div>
				<div class="tab-pane fade" id="hr">

					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
								<th>Aantal dagen</th>
							</tr>
						</thead>
						<tbody>
					<?php 
						$nr = 0;
						
						try {
							require('config.php'); 
							
							$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
							$sql=	"select
										UserID, UserName, Subsite, Count(*) NrOfUniqueDays
									from (select 
											  User.ID AS UserID
											, Data.User        AS UserName
											, Data.Subsite     AS Subsite
											, Date.Day 
										from Date
										join Data
											on Date.Day between Data.Startdate and case when Data.Enddate = '0000-00-00' then curdate() else Data.Enddate end
										left join User 
											on Data.User = User.UserName
										where Data.Subsite = 'Games' and Data.Unit = 'Hoofdredacteur Games'
										group by User.ID, Data.User, Data.Subsite, Date.Day) Ranglijst
									group by UserID
									order by NrOfUniqueDays desc"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
					
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								echo '<tr>';
								echo '<td>' . ++$nr . '</td>';
								echo '<td><a href="/user/'. $row['UserID'] .'">' . $row['UserName'] . '</a></td>';
								echo '<td>' . $row['NrOfUniqueDays'] . '</td>';
								echo '</tr>';
							}
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
						</tbody>
					</table>
				</div>				
			</div>
		</div>
		<!-- end col-6 -->
	</div>
	<!-- end row -->
<?php 
}

elseif ($id == 'sport') {	
?>
	<!-- begin row -->
	<div class="row">
		<!-- begin col-6 -->
		<div class="col-md-4">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#totaal" data-toggle="tab">Totaal</a></li>
				<li class=""><a href="#nwspst" data-toggle="tab">Nieuwsposter</a></li>
				<li class=""><a href="#red" data-toggle="tab">Redactie</a></li>
				<li class=""><a href="#er" data-toggle="tab">Eindredactie</a></li>
				<li class=""><a href="#sa" data-toggle="tab">Site Admin</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane fade active in" id="totaal">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
								<th>Aantal dagen</th>
							</tr>
						</thead>
						<tbody>
					<?php 
						$nr = 0;
						
						try {
							require('config.php'); 
							
							$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
							$sql=	"select
										UserID, UserName, Subsite, Count(*) NrOfUniqueDays
									from (select 
											  User.ID AS UserID
											, Data.User        AS UserName
											, Data.Subsite     AS Subsite
											, Date.Day 
										from Date
										join Data
											on Date.Day between Data.Startdate and case when Data.Enddate = '0000-00-00' then curdate() else Data.Enddate end
										left join User 
											on Data.User = User.UserName
										where Data.Subsite = 'Sport'
										group by User.ID, Data.User, Data.Subsite, Date.Day) Ranglijst
									group by UserID
									order by NrOfUniqueDays desc
									"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
					
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								echo '<tr>';
								echo '<td>' . ++$nr . '</td>';
								echo '<td><a href="/user/'. $row['UserID'] .'">' . $row['UserName'] . '</a></td>';
								echo '<td>' . $row['NrOfUniqueDays'] . '</td>';
								echo '</tr>';
							}
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
						</tbody>
					</table>
							
				</div>
				
				
				
				<div class="tab-pane fade" id="nwspst">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
								<th>Aantal dagen</th>
							</tr>
						</thead>
						<tbody>
					<?php 
						$nr = 0;
						
						try {
							require('config.php'); 
							
							$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
							$sql=	"select
										UserID, UserName, Subsite, Count(*) NrOfUniqueDays
									from (select 
											  User.ID AS UserID
											, Data.User        AS UserName
											, Data.Subsite     AS Subsite
											, Date.Day 
										from Date
										join Data
											on Date.Day between Data.Startdate and case when Data.Enddate = '0000-00-00' then curdate() else Data.Enddate end
										left join User 
											on Data.User = User.UserName
										where Data.Subsite = 'Sport' and Data.Unit = 'Nieuwsposter Sport'
										group by User.ID, Data.User, Data.Subsite, Date.Day) Ranglijst
									group by UserID
									order by NrOfUniqueDays desc"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
					
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								echo '<tr>';
								echo '<td>' . ++$nr . '</td>';
								echo '<td><a href="/user/'. $row['UserID'] .'">' . $row['UserName'] . '</a></td>';
								echo '<td>' . $row['NrOfUniqueDays'] . '</td>';
								echo '</tr>';
							}
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
						</tbody>
					</table>
				</div>
				
				
				<div class="tab-pane fade" id="er">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
								<th>Aantal dagen</th>
							</tr>
						</thead>
						<tbody>
					<?php 
						$nr = 0;
						
						try {
							require('config.php'); 
							
							$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
							$sql=	"select
										UserID, UserName, Subsite, Count(*) NrOfUniqueDays
									from (select 
											  User.ID AS UserID
											, Data.User        AS UserName
											, Data.Subsite     AS Subsite
											, Date.Day 
										from Date
										join Data
											on Date.Day between Data.Startdate and case when Data.Enddate = '0000-00-00' then curdate() else Data.Enddate end
										left join User 
											on Data.User = User.UserName
										where Data.Subsite = 'Sport' and Data.Unit = 'Eindredactie Sport'
										group by User.ID, Data.User, Data.Subsite, Date.Day) Ranglijst
									group by UserID
									order by NrOfUniqueDays desc"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
					
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								echo '<tr>';
								echo '<td>' . ++$nr . '</td>';
								echo '<td><a href="/user/'. $row['UserID'] .'">' . $row['UserName'] . '</a></td>';
								echo '<td>' . $row['NrOfUniqueDays'] . '</td>';
								echo '</tr>';
							}
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
						</tbody>
					</table>
				</div>
				
				<div class="tab-pane fade" id="red">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
								<th>Aantal dagen</th>
							</tr>
						</thead>
						<tbody>
					<?php 
						$nr = 0;
						
						try {
							require('config.php'); 
							
							$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
							$sql=	"select
										UserID, UserName, Subsite, Count(*) NrOfUniqueDays
									from (select 
											  User.ID AS UserID
											, Data.User        AS UserName
											, Data.Subsite     AS Subsite
											, Date.Day 
										from Date
										join Data
											on Date.Day between Data.Startdate and case when Data.Enddate = '0000-00-00' then curdate() else Data.Enddate end
										left join User 
											on Data.User = User.UserName
										where Data.Subsite = 'Sport' and Data.Unit = 'Redactie Sport'
										group by User.ID, Data.User, Data.Subsite, Date.Day) Ranglijst
									group by UserID
									order by NrOfUniqueDays desc"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
					
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								echo '<tr>';
								echo '<td>' . ++$nr . '</td>';
								echo '<td><a href="/user/'. $row['UserID'] .'">' . $row['UserName'] . '</a></td>';
								echo '<td>' . $row['NrOfUniqueDays'] . '</td>';
								echo '</tr>';
							}
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
						</tbody>
					</table>
				</div>
				
				<div class="tab-pane fade" id="sa">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
								<th>Aantal dagen</th>
							</tr>
						</thead>
						<tbody>
					<?php 
						$nr = 0;
						
						try {
							require('config.php'); 
							
							$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
							$sql=	"select
										UserID, UserName, Subsite, Count(*) NrOfUniqueDays
									from (select 
											  User.ID AS UserID
											, Data.User        AS UserName
											, Data.Subsite     AS Subsite
											, Date.Day 
										from Date
										join Data
											on Date.Day between Data.Startdate and case when Data.Enddate = '0000-00-00' then curdate() else Data.Enddate end
										left join User 
											on Data.User = User.UserName
										where Data.Subsite = 'Sport' and Data.Unit = 'Site Admin Sport'
										group by User.ID, Data.User, Data.Subsite, Date.Day) Ranglijst
									group by UserID
									order by NrOfUniqueDays desc"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
					
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								echo '<tr>';
								echo '<td>' . ++$nr . '</td>';
								echo '<td><a href="/user/'. $row['UserID'] .'">' . $row['UserName'] . '</a></td>';
								echo '<td>' . $row['NrOfUniqueDays'] . '</td>';
								echo '</tr>';
							}
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
						</tbody>
					</table>
				</div>				
			</div>
		</div>
		<!-- end col-6 -->
	</div>
	<!-- end row -->
<?php 
}
?>

</div>