<?php include("content/date.php"); ?>
<div class="span12 main-column">
	<h1><strong>Oerbeer</strong> <small>332000</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><?=$ui_Oerbeer?></div>
		</div>
        
		<div class="span6">
            <h4>16 januari 2011</h4>
            <p class="experience"><strong><a href="http://forum.fok.nl/user/profile/332000" target="blank_">FOK!profiel</a></strong></p>
			<br />
		</div>
	</div>
	
	<div class="text-divider5"><span></span></div>
	<h2>Forum</h2>
	<?php $t=0; ?>
	<table class="table table-striped">
	  <thead>
		<tr>
		  <th>#</th>
		  <th>Functie</th>
		  <th>Startdatum</th>
		  <th>Einddatum</th>
		  <th>Duur</th>
		</tr>
	  </thead>
	  <tbody>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$ONZ?></td>
		  <td><a href="http://forum.fok.nl/topic/1719388" target="_blank">05 okt 2011</a></td>
		  <td><a href="http://forum.fok.nl/topic/1978787" target="_blank">31 mei 2013</a></td>
		  <td><?=$uOerbeer_i1;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$SER?> <small>(2011)</small></td>
		  <td><a href="http://forum.fok.nl/topic/1752622" target="_blank">17 dec 2011</a></td>
		  <td><a href="http://forum.fok.nl/topic/1759827" target="_blank">02 jan 2012</a></td>
		  <td><?=$uOerbeer_i2;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$FVZ?></td>
		  <td><a href="http://forum.fok.nl/topic/1850432" target="_blank">29 jul 2012</a></td>
		  <td><a href="http://forum.fok.nl/topic/1872172" target="_blank">19 sep 2012</a></td>
		  <td><?=$uOerbeer_i3;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$SER?> <small>(2012)</small></td>
		  <td><a href="http://forum.fok.nl/topic/1907943" target="_blank">18 dec 2012</a></td>
		  <td><a href="http://forum.fok.nl/topic/1913752" target="_blank">31 dec 2012</a></td>
		  <td><?=$uOerbeer_i4;?> dagen</td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><strong><?=$US?></strong></td>
		  <td><a href="http://forum.fok.nl/topic/1978787" target="_blank">31 mei 2013</a></td>
		  <td>heden</td>
		  <td><?=$uOerbeer_i5;?> dagen</td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td><code><?=$uOerbeer_total;?> dagen</code></td>
		</tr>
	  </tbody>
	</table>

	<h2>FOK!</h2>
	<?php $t=0; ?>
	<table class="table table-striped">
	  <thead>
		<tr>
		  <th>#</th>
		  <th>Functie</th>
		  <th>Startdatum</th>
		  <th>Einddatum</th>
		  <th>Duur</th>
		</tr>
	  </thead>
	  <tbody>
		<tr>
		  <td><?=++$t?></td>
		  <td>Designer</td>
		  <td>11 jul 2012</td>
		  <td>05 apr 2013</td>
		  <td><?=$uOerbeer_fi1;?> dagen</td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><strong>Redactie FP</strong></td>
		  <td>02 aug 2012</td>
		  <td>heden</td>
		  <td><?=$uOerbeer_fi2;?> dagen</td>
		</tr>
	  </tbody>
	</table>
	
		<div class="text-divider5"><span></span></div>

		<ul class="nav nav-tabs" id="myTab">
			<li class="active"><a data-toggle="tab" href="#user">User</a></li>
			<li class=""><a data-toggle="tab" href="#fok">FOK!</a></li>
		</ul>
		<div class="tab-content" id="myTabContent" style="width: 100%; height: 410px;">		
			<div id="user" class="tab-pane fade active in">
				<script 
					type="text/javascript"
					src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization',
					   'version':'1','packages':['timeline']}]}"></script>
				<script type="text/javascript">

				google.setOnLoadCallback(drawChart);
				function drawChart() {
				  var container = document.getElementById('u');
				  var chart = new google.visualization.Timeline(container);
				  var dataTable = new google.visualization.DataTable();

				  dataTable.addColumn({ type: 'string', id: 'Term' });
				  dataTable.addColumn({ type: 'string', id: 'Name' });
				  dataTable.addColumn({ type: 'date', id: 'Start' });
				  dataTable.addColumn({ type: 'date', id: 'End' });

				  dataTable.addRows([
					[ '1', 'ONZ', new Date(2011, 09, 05), new Date(2013, 04, 31) ],
					[ '2', 'SER', new Date(2011, 11, 16), new Date(2011, 12, 02) ],
					[ 'Des', 'Designer', new Date(2012, 06, 11), new Date(2013, 03, 05) ],
					[ '3', 'FVZ', new Date(2012, 06, 29), new Date(2012, 08, 19) ],
					[ 'RFP', 'Redactie FP', new Date(2012, 07, 02), new Date() ],
					[ '2', 'SER', new Date(2012, 11, 18), new Date(2012, 11, 31) ],
					[ '5',  'US', new Date(2013, 04, 31), new Date() ]]);

			
					
 				 chart.draw(dataTable, {height: 325});
				  
				}
				</script>

				<div id="u" style="width: 100%"></div>
			</div>
			<div id="fok" class="tab-pane fade">
				<script 
					type="text/javascript"
					src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization',
					   'version':'1','packages':['timeline']}]}"></script>
				<script type="text/javascript">

				google.setOnLoadCallback(drawChart);
				function drawChart() {
				  var container = document.getElementById('f');
				  var chart = new google.visualization.Timeline(container);
				  var dataTable = new google.visualization.DataTable();

				  dataTable.addColumn({ type: 'string', id: 'Term' });
				  dataTable.addColumn({ type: 'string', id: 'Name' });
				  dataTable.addColumn({ type: 'date', id: 'Start' });
				  dataTable.addColumn({ type: 'date', id: 'End' });

				  dataTable.addRows([
					[ '#', 'FOK!', new Date(1999, 06, 01), new Date() ],
					[ ' ', 'Oerbeer', new Date(2010, 12, 16), new Date() ],
					[ '1', 'ONZ', new Date(2011, 09, 05), new Date(2013, 04, 31) ],
					[ '2', 'SER', new Date(2011, 11, 16), new Date(2011, 12, 02) ],
					[ 'Des', 'Designer', new Date(2012, 06, 11), new Date(2013, 03, 05) ],
					[ '3', 'FVZ', new Date(2012, 06, 29), new Date(2012, 08, 19) ],
					[ 'RFP', 'Redactie FP', new Date(2012, 07, 02), new Date() ],
					[ '2', 'SER', new Date(2012, 11, 18), new Date(2012, 11, 31) ],
					[ '5',  'US', new Date(2013, 04, 31), new Date() ]]);
					
				 var options = {
					width: 940,
					height: 385
				 };
					
 				 chart.draw(dataTable, options);
				  
				}
				</script>

				<div id="f"></div>
			</div>
		</div>

		<div class="text-divider5"><span></span></div>
		
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script type="text/javascript">
			google.load("visualization", "1", {packages:["corechart"]});
			google.setOnLoadCallback(drawChart);
			function drawChart() {
			var data = google.visualization.arrayToDataTable([
				['Functie', 'Dagen'],
				['ONZ',  <?=$uOerbeer_i1?>],
				['SER',  <?=$uOerbeer_i2+$uOerbeer_i4?>],
				['FVZ',  <?=$uOerbeer_i3?>],
				['US',   <?=$uOerbeer_i5?>]
				]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 400px;"></div>
</div>
                          