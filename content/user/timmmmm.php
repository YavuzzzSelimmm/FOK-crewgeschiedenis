<?php include("content/date.php"); ?>
<div class="span12 main-column">
	<h1><strong>timmmmm</strong> <small>221644</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><?=$ui_timmmmm?></div>
		</div>
        
		<div class="span6">
            <h4>15 juli 2008</h4>
            <p class="experience"><strong><a href="http://forum.fok.nl/user/profile/221644" target="blank_">FOK!profiel</a></strong></p>
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
		  <td><?=$VKZ?> <small>(2010)</small></td>
		  <td><a href="http://forum.fok.nl/topic/1421953" target="_blank">06 mar 2010</a></td>
		  <td><a href="http://forum.fok.nl/topic/1522413" target="_blank">01 sep 2010</a></td>
		  <td><?=$utimmmmm_i1;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$NWS?></td>
		  <td><a href="http://forum.fok.nl/topic/1684761" target="_blank">18 jul 2011</a></td>
		  <td><a href="http://forum.fok.nl/topic/1883152" target="_blank">17 okt 2012</a></td>
		  <td><?=$utimmmmm_i2;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$VKZ?> <small>(2012)</small></td>
		  <td><a href="http://forum.fok.nl/topic/1807249" target="_blank">23 apr 2012</a></td>
		  <td><a href="http://forum.fok.nl/topic/1894165" target="_blank">13 nov 2012</a></td>
		  <td><?=$utimmmmm_i3;?> dagen</td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><strong><?=$NWS?></strong></td>
		  <td>02 dec 2012</td>
		  <td>heden</td>
		  <td><?=$utimmmmm_i4;?> dagen</td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td><code><?=$utimmmmm_total;?> dagen</code></td>
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
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><strong>Redactie FP</strong></td>
		  <td>02 aug 2012</td>
		  <td>heden</td>
		  <td><?=$utimmmmm_fi1;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td>Postkantoor</td>
		  <td><a href="http://forum.fok.nl/topic/1905058" target="_blank">11 dec 2012</a></td>
		  <td>20 jul 2013</td>
		  <td><?=$utimmmmm_fi2;?> dagen</td>
		</tr>
	  </tbody>
	</table>

		<div class="text-divider5"><span></span></div>

		<ul class="nav nav-tabs" id="myTab">
			<li class="active"><a data-toggle="tab" href="#user">User</a></li>
			<li class=""><a data-toggle="tab" href="#fok">FOK!</a></li>
		</ul>
		<div class="tab-content" id="myTabContent" style="width: 100%; height: 340px;">		
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
					[ '1', 'VKZ', new Date(2010, 02, 06), new Date(2010, 08, 01) ],
					[ '2', 'NWS', new Date(2011, 06, 18), new Date(2012, 09, 17) ],
					[ '1', 'VKZ', new Date(2012, 03, 23), new Date(2012, 10, 13) ],
					[ 'RFP', 'Redactie FP', new Date(2012, 07, 02), new Date() ],	
					[ '2', 'NWS', new Date(2012, 11, 02), new Date() ],
					[ 'PST', 'Postkantoor', new Date(2012, 11, 11), new Date(2013, 06, 20) ]]);			
					
 				 chart.draw(dataTable, {height: 250});
				  
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
					[ ' ', 'timmmmm', new Date(2008, 06, 15), new Date() ],
					[ '1', 'VKZ', new Date(2010, 02, 06), new Date(2010, 08, 01) ],
					[ '2', 'NWS', new Date(2011, 06, 18), new Date(2012, 09, 17) ],
					[ '1', 'VKZ', new Date(2012, 03, 23), new Date(2012, 10, 13) ],
					[ 'RFP', 'Redactie FP', new Date(2012, 07, 02), new Date() ],	
					[ '2', 'NWS', new Date(2012, 11, 02), new Date() ],
					[ 'PST', 'Postkantoor', new Date(2012, 11, 11), new Date(2013, 06, 20) ]]);	
					
				 var options = {
					width: 940,
					height: 300
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
				['VKZ',  <?=$utimmmmm_i1+$utimmmmm_i3?>],
				['NWS',  <?=$utimmmmm_i2+$utimmmmm_i4?>]
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 400px;"></div>
</div>
                          