<?php include("content/date.php"); ?>
<div class="span12 main-column">
	<h1><strong>Opa.Bakkebaard</strong> <small>240730</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><?=$ui_OpaBakkebaard?></div>
		</div>
        
		<div class="span6">
            <h4>5 januari 2009</h4>
            <p class="experience"><strong><a href="http://forum.fok.nl/user/profile/240730" target="blank_">FOK!profiel</a></strong></p>
			<br />
		</div>
	</div>
	
	<div class="text-divider5"><span></span></div>
 
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
		  <td><?=$KLB?></td>
		  <td><a href="http://forum.fok.nl/topic/1529216" target="_blank">15 sep 2010</a></td>
		  <td>09 dec 2011</td>
		  <td><?=$uOpaBakkebaard_i1;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$ONZ?></td>
		  <td><a href="http://forum.fok.nl/topic/1552472" target="_blank">30 okt 2010</a></td>
		  <td><a href="http://forum.fok.nl/topic/1740419" target="_blank">20 nov 2011</a></td>
		  <td><?=$uOpaBakkebaard_i2;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$DIG?></td>
		  <td><a href="http://forum.fok.nl/topic/1740419" target="_blank">20 nov 2011</a></td>
		  <td><a href="http://forum.fok.nl/topic/1752623" target="_blank">17 dec 2011</a></td>
		  <td><?=$uOpaBakkebaard_i3;?> dagen</td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><strong>Forum Admin</strong></td>
		  <td><a href="http://forum.fok.nl/topic/1749049" target="_blank">09 dec 2011</a></td>
		  <td>heden</td>
		  <td><?=$uOpaBakkebaard_i4;?> dagen</td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td><code><?=$uOpaBakkebaard_total;?> dagen</code></td>
		</tr>
	  </tbody>
	</table>
	
		<div class="text-divider5"><span></span></div>

		<ul class="nav nav-tabs" id="myTab">
			<li class="active"><a data-toggle="tab" href="#user">User</a></li>
			<li class=""><a data-toggle="tab" href="#fok">FOK!</a></li>
		</ul>
		<div class="tab-content" id="myTabContent" style="width: 100%; height: 325px;">		
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
					[ '1', 'KLB', new Date(2010, 08, 15), new Date(2011, 11, 09) ],
					[ '2', 'ONZ', new Date(2010, 09, 30), new Date(2011, 10, 20) ],
					[ '3', 'DIG', new Date(2011, 10, 20), new Date(2011, 11, 17) ],
					[ 'FA', 'Forum Admin', new Date(2011, 11, 09), new Date() ]]);
		
 				 chart.draw(dataTable, {height: 225});
				  
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
					[ ' ', 'Opa.Bakkebaard', new Date(2008, 12, 05), new Date() ],
					[ '1', 'KLB', new Date(2010, 08, 15), new Date(2011, 11, 09) ],
					[ '2', 'ONZ', new Date(2010, 09, 30), new Date(2011, 10, 20) ],
					[ '3', 'DIG', new Date(2011, 10, 20), new Date(2011, 11, 17) ],
					[ 'FA', 'Forum Admin', new Date(2011, 11, 09), new Date() ]]);
					
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
				['KLB',  <?=$uOpaBakkebaard_i1?>],
				['ONZ',  <?=$uOpaBakkebaard_i2?>],
				['DIG',  <?=$uOpaBakkebaard_i3?>],
				['Forum Admin',  <?=$uOpaBakkebaard_i4?>]
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 400px;"></div>
</div>
                          