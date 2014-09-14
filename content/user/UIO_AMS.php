<?php include("content/date.php"); ?>
<div class="span12 main-column">
	<h1><strong>UIO_AMS</strong> <small>61302</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><?=$ui_UIO_AMS?></div>
		</div>
        
		<div class="span6">
            <h4>16 juli 2003</h4>
            <p class="experience"><strong><a href="http://forum.fok.nl/user/profile/61302" target="blank_">FOK!profiel</a></strong></p>
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
		  <td><strong><?=$TRV?></strong></td>
		  <td><a href="http://forum.fok.nl/topic/598445" target="_blank">09 sep 2004</a></td>
		  <td>heden</td>
		  <td><?=$uUIO_AMS_i1;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$LEF?></td>
		  <td><a href="http://forum.fok.nl/topic/936992" target="_blank">06 nov 2006</a></td>
		  <td><a href="http://forum.fok.nl/topic/1008792" target="_blank">11 apr 2007</a></td>
		  <td><?=$uUIO_AMS_i2;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$TDF?></td>
		  <td><a href="http://forum.fok.nl/topic/1037005" target="_blank">11 jun 2007</a></td>
		  <td><a href="http://forum.fok.nl/topic/1062256" target="_blank">10 aug 2007</a></td>
		  <td><?=$uUIO_AMS_i3;?> dagen</td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td><code><?=$uUIO_AMS_total;?> dagen</code></td>
		</tr>
	  </tbody>
	</table>
	
		<div class="text-divider5"><span></span></div>

		<ul class="nav nav-tabs" id="myTab">
			<li class="active"><a data-toggle="tab" href="#user">User</a></li>
			<li class=""><a data-toggle="tab" href="#fok">FOK!</a></li>
		</ul>
		<div class="tab-content" id="myTabContent" style="width: 100%; height: 300px;">		
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
					[ '1', 'TRV', new Date(2004, 08, 09), new Date() ],
					[ '2', 'LEF', new Date(2006, 10, 06), new Date(2007, 03, 11) ],
					[ '3', 'TDF', new Date(2007, 05, 11), new Date(2007, 07, 10) ]]);

			
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
					[ ' ', 'UIO_AMS', new Date(2003, 06, 16), new Date() ],
					[ '1', 'TRV', new Date(2004, 08, 09), new Date() ],
					[ '2', 'LEF', new Date(2006, 10, 06), new Date(2007, 03, 11) ],
					[ '3', 'TDF', new Date(2007, 05, 11), new Date(2007, 07, 10) ]]);
					
				 var options = {
					width: 940,
					height: 265
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
				['TRV',  <?=$uUIO_AMS_i1?>],
				['LEF',  <?=$uUIO_AMS_i2?>],
				['TDF',  <?=$uUIO_AMS_i3?>]
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 400px;"></div>
</div>
                          