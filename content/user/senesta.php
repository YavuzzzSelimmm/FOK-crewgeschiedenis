<?php include("content/date.php"); ?>
<div class="span12 main-column">
	<h1><strong>senesta</strong> <small>121347</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><?=$ui_senesta?></div>
		</div>
        
		<div class="span6">
            <h4>22 mei 2005</h4>
            <p class="experience"><strong><a href="http://forum.fok.nl/user/profile/121347" target="blank_">FOK!profiel</a></strong></p>
			<br />
		</div>
	</div>
	
	<div class="text-divider5"><span></span></div>
	<?php $t=0;?>
	<h2>Forum</h2>
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
		  <td><?=++$t;?></td>
		  <td><strong><?=$FF?></strong></td>
		  <td><a href="http://forum.fok.nl/topic/957741" target="_blank">22 dec 2006</a></td>
		  <td>heden</td>
		  <td><?=$usenesta_i1;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t;?></td>
		  <td><?=$TRU?></td>
		  <td><a href="http://forum.fok.nl/topic/1066686" target="_blank">22 aug 2007</a></td>
		  <td><a href="http://forum.fok.nl/topic/1166789" target="_blank">19 jun 2008</a></td>
		  <td><?=$usenesta_i2;?> dagen</td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td><code><?=$usenesta_total;?> dagen</code></td>
		</tr>
	  </tbody>
	</table>
	
	<?php $t=0;?>
	<h2>FOK!</h2>
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
		  <td><?=++$t;?></td>
		  <td>PR</td>
		  <td>20 mar 2008</td>
		  <td>11 sep 2008</td>
		  <td><?=$usenesta_fi1;?> dagen</td>
		</tr>
		<tr class="success">
		  <td><?=++$t;?></td>
		  <td><strong>Manager PR</strong></td>
		  <td>11 sep 2008</td>
		  <td>heden</td>
		  <td><?=$usenesta_fi2;?> dagen</td>
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
					[ '1', 'F&F', new Date(2006, 11, 22), new Date() ],
					[ '2', 'TRU', new Date(2007, 07, 22), new Date(2008, 05, 19) ],
					[ 'PR', 'PR', new Date(2008, 02, 20), new Date(2008, 08, 11) ],
					[ 'MPR', 'Manager PR', new Date(2008, 08, 11), new Date() ]]);

				 var options = {
					height: 300
				 };
					
 				 chart.draw(dataTable, options);
				  
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
					[ ' ', 'senesta', new Date(2005, 04, 22), new Date() ],
					[ '1', 'F&F', new Date(2006, 11, 22), new Date() ],
					[ '2', 'TRU', new Date(2007, 07, 22), new Date(2008, 05, 19) ],
					[ 'PR', 'PR', new Date(2008, 02, 20), new Date(2008, 08, 11) ],
					[ 'MPR', 'Manager PR', new Date(2008, 08, 11), new Date() ]]);

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
				['F&F',  <?=$usenesta_i1?>],
				['TRU',  <?=$usenesta_i2?>]
			]);


			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 400px;"></div>
	
</div>
                          