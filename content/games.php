<div id="content" class="content">
	<!-- begin page-header -->
	<h1 class="page-header">Games <small>games.fok.nl</small></h1>
	<!-- end page-header -->
			
	<!-- begin row -->
	<div class="row">
		<!-- begin col-12 -->
		<div class="col-md-12">
			<!-- begin panel -->
			<div class="panel panel-inverse">
				<?php /*
				<div class="panel-heading">
					<h4 class="panel-title">Users</h4>
				</div>
				*/ ?>
			
				<?php $nr = 0;?>
				<div class="panel-body">
					<table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
						<thead>
							<tr>
								<th>#</th>
								<th>Functie</th>
							</tr>
						</thead>
						<tbody>
						<?php 
						try {
							require('config.php'); 
							
							$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
							$sql=	"SELECT DISTINCT
										  Unit.ID
										, Unit.Name
									FROM Unit
									JOIN (SELECT DISTINCT Subsite, Unit FROM Data) Data
										ON Unit.Subsite = Data.Subsite 
										   AND Unit.Name = Data.Unit 
									WHERE Unit.Subsite = 'Games'
									ORDER BY Unit.Name"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
					
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								echo '<tr>';
								echo '<td>' . ++$t . '</td>';
								echo '<td><a href="/game/'. $row['ID'] .'">' . $row['Name'] . '</a></td>';
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
		<!-- end panel -->
		</div>
	<!-- end col-10 -->
	</div>
<!-- end row -->
</div>