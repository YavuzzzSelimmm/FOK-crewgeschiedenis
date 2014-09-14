<?php include("content/date.php");?>
<div class="span12 main-column">
	<h1><strong>Snakey</strong> <small>58789</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><?=$ui_Snakey?></div>
		</div>
        
		<div class="span6">
            <h4>23 juni 2003</h4>
            <p class="experience"><strong><a href="http://forum.fok.nl/user/profile/58789" target="blank_">FOK!profiel</a></strong></p>
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
		  <td><?=$ONZ?></td>
		  <td><a href="http://forum.fok.nl/topic/630545" target="_blank">22 nov 2004</a></td>
		  <td><a href="http://forum.fok.nl/topic/637884" target="_blank">10 dec 2004</a></td>
		  <td><?=$uSnakey_i1;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$ONZ?></td>
		  <td><a href="http://forum.fok.nl/topic/756168" target="_blank">19 sep 2005</a></td>
		  <td><a href="http://forum.fok.nl/topic/1176119" target="_blank">14 jul 2008</a></td>
		  <td><?=$uSnakey_i2;?> dagen</td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><strong>Forum Admin</strong></td>
		  <td><a href="http://forum.fok.nl/topic/1176119" target="_blank">14 jul 2008</a></td>
		  <td>heden</td>
		  <td><?=$uSnakey_i3;?> dagen</td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><strong><?=$SPT?></strong></td>
		  <td><a href="http://forum.fok.nl/topic/1871497" target="_blank">17 sep 2012</a></td>
		  <td>heden</td>
		  <td><?=$uSnakey_i4;?> dagen</td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td><code><?=$uSnakey_total;?> dagen</code></td>
		</tr>
	  </tbody>
	</table>
	
		<div class="text-divider5"><span></span></div>

		<ul class="nav nav-tabs" id="myTab">
			<li class="active"><a data-toggle="tab" href="#user">User</a></li>
			<li class=""><a data-toggle="tab" href="#fok">FOK!</a></li>
		</ul>
		<div class="tab-content" id="myTabContent" style="width: 100%; height: 290px;">		
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
					[ '1', 'ONZ', new Date(2004, 10, 22), new Date(2004, 11, 10) ],
					[ '1', 'ONZ', new Date(2005, 08, 19), new Date(2008, 06, 14) ],
					[ 'FA', 'Forum Admin', new Date(2008, 06, 14), new Date() ],
					[ '4', 'SPT', new Date(2012, 08, 17), new Date() ]]);

			
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
					[ ' ', 'Snakey', new Date(2003, 05, 23), new Date() ],
					[ '1', 'ONZ', new Date(2004, 10, 22), new Date(2004, 11, 10) ],
					[ '1', 'ONZ', new Date(2005, 08, 19), new Date(2008, 06, 14) ],
					[ 'FA', 'Forum Admin', new Date(2008, 06, 14), new Date() ],
					[ '4', 'SPT', new Date(2012, 08, 17), new Date() ]]);
				 
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
				['ONZ',  <?=$uSnakey_i1+$uSnakey_i2?>],
				['FA',   <?=$uSnakey_i3?>],
				['SPT',  <?=$uSnakey_i4?>]
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 400px;"></div>
</div>
                          