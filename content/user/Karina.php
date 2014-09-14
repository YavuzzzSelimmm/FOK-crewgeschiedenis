<?php include("content/date.php"); ?>
<div class="span12 main-column">
	<h1><strong>Karina</strong> <small>9859</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><?=$ui_Karina?></div>
		</div>
        
		<div class="span6">
            <h4>9 februari 2001</h4>
            <p class="experience"><strong><a href="http://forum.fok.nl/user/profile/9859" target="blank_">FOK!profiel</a></strong></p>
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
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><strong><?=$F40?></strong></td>
		  <td>22 jul 2011</td>
		  <td>heden</td>
		  <td><?=$uKarina_i1;?> dagen</td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><strong><?=$TAL?></strong></td>
		  <td><a href="http://forum.fok.nl/topic/1696845" target="_blank">14 aug 2011</a></td>
		  <td>heden</td>
		  <td><?=$uKarina_i2;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$EK?> <small>(2012)</small></td>
		  <td><a href="http://forum.fok.nl/topic/1797643" target="_blank">01 apr 2012</a></td>
		  <td><a href="http://forum.fok.nl/topic/1849426" target="_blank">27 jul 2012</a></td>
		  <td><?=$uKarina_i3?> dagen</td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td><code><?=$uKarina_total;?> dagen</code></td>
		</tr>
	  </tbody>
	</table>
	
		<div class="text-divider5"><span></span></div>

		<ul class="nav nav-tabs" id="myTab">
			<li class="active"><a data-toggle="tab" href="#user">User</a></li>
			<li class=""><a data-toggle="tab" href="#fok">FOK!</a></li>
		</ul>
		<div class="tab-content" id="myTabContent" style="width: 100%; height: 250px;">		
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
					[ '1', '40+', new Date(2011, 06, 22), new Date() ],
					[ '2', 'TAL', new Date(2011, 07, 14), new Date() ],
					[ '3', 'EK', new Date(2012, 03, 01), new Date(2012, 06, 27) ]]);

			
					
 				 chart.draw(dataTable);
				  
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
					[ '1', '40+', new Date(2011, 06, 22), new Date() ],
					[ '2', 'TAL', new Date(2011, 07, 14), new Date() ],
					[ '3', 'EK', new Date(2012, 03, 01), new Date(2012, 06, 27) ]]);

				 var options = {
					width: 940,
					height: 225
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
				['40+',  <?=$uKarina_i1?>],
				['TAL',  <?=$uKarina_i2?>],
				['EK',   <?=$uKarina_i3?>]
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 400px;"></div>
</div>
                          