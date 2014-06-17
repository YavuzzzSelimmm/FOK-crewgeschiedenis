<html>
	<head>
		<!--Load the AJAX API-->
		<script type="text/javascript" src="jsapi"></script>
		<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
		<script type="text/javascript">
			// Load the Visualization API and the piechart,table package.
			google.load('visualization', '1', {
				'packages': ['corechart', 'table', 'timeline']
			});
			function drawItems(num) {
				var jsonPieChartData = $.ajax({
					url: "getpiechartdata.php",
					data: "q=" + num,
					dataType: "json",
					async: false
				}).responseText;
	
				var jsonTableData = $.ajax({
					url: "gettabledata.php",
					data: "q=" + num,
					dataType: "json",
					async: false
				}).responseText;
	
				var jsonTimelineData;
				$.ajax({
					url: "gettimelinedata.php",
					dataType: "JSON",
					async: false,
					data: {
						user: num
					},
					success: function(callback) {
						jsonTimelineData = callback;
					}
				});
				// Create our data table out of JSON data loaded from server.
				var piechartdata = new google.visualization.DataTable(jsonPieChartData);
				var tabledata = new google.visualization.DataTable(jsonTableData);
				//var timelinedata = new google.visualization.DataTable(jsonTimelineData);
	
				// Instantiate and draw our pie chart, passing in some options.
				var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
				chart.draw(piechartdata, {
					width: 700,
					height: 350,
					chartArea: {
						left: "5%",
						top: "5%",
						width: "90%",
						height: "90%"
					}
				});
	
				// Instantiate and draw our table, passing in some options.
				var table = new google.visualization.Table(document.getElementById('table_div'));
				table.draw(tabledata, {
					width: 700,
					chartArea: {
						left: "5%",
						top: "5%",
						width: "90%",
						height: "90%"
					},
					showRowNumber: true,
					alternatingRowStyle: true
				});
	
				// Instantiate Timeline
				var container = document.getElementById('timeline_div');
				var chart = new google.visualization.Timeline(container);
				var dataTable = new google.visualization.DataTable();
				dataTable.addColumn({ type: 'string', id: 'Forum' });
				dataTable.addColumn({ type: 'number', id: 'Start' });
				dataTable.addColumn({ type: 'number', id: 'End' });
				dataTable.addRows(jsonTimelineData);
				chart.draw(dataTable);

			}
		</script>
	</head>

	<body>
		<form>
			<select name="users" onchange="drawItems(this.value)">
				<option value="">Gebruiker:</option>
	
				<?php 
					try {
						// Databasegegevens ophalen
						include 'db.php'; 
						
						// Verbinding maken met de database
						$con= new PDO( "mysql:host=" . $dbserver . ";dbname=" . $dbname, $dbuser, $dbpass);  
						// Query - Lijst van gebruikersnamen
						$sql="SELECT PK_Gebruiker, Gebruikersnaam FROM Gebruiker ORDER BY Gebruikersnaam ASC" ; 
						
						// Query 'klaarmaken'
						// prepare() handelt goed af tegen SQL injecties 
						$stmt=$con->prepare($sql); 
						
						// Voor de query uit
						$stmt->execute(); 

						// Data printen
						while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
				?>
				 <option value="<?=$row['PK_Gebruiker']?>"><?=$row['Gebruikersnaam']?></option>
				<?php 
						}
					} 
				
					// Errorafhandeling
					catch(PDOException $e)
						{
							echo '<pre>';
							echo 'Regel: '.$e->getLine(). '<br />';
							echo 'Bestand: '.$e->getFile(). '<br />'; 
							echo 'Foutmelding: '.$e->getMessage();
							echo '</pre>'; 
						}
				?>
			</select>
		</form>
			
		<div id="table_div"></div>
		<br /><br /><br />
		<div id="chart_div"></div>
		<br /><br /><br />
		<div id="timeline_div"></div>
	</body>
</html>
