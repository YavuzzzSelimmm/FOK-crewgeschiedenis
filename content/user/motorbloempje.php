<?php include("content/date.php"); ?>
<div class="span12 main-column">
	<h1><strong>motorbloempje</strong> <small>162870</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><?=$ui_motorbloempje?></div>
		</div>
        
		<div class="span6">
            <h4>3 december 2006</h4>
            <p class="experience"><strong><a href="http://forum.fok.nl/user/profile/162870" target="blank_">FOK!profiel</a></strong></p>
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
		  <td><strong><?=$SES?></strong></td>
		  <td><a href="http://forum.fok.nl/topic/1362982" target="_blank">02 nov 2009</a></td>
		  <td>heden</td>
		  <td><?=$umotorbloempje_i1;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$EXA?></td>
		  <td><a href="http://forum.fok.nl/topic/1432560" target="_blank">27 mar 2010</a></td>
		  <td><a href="http://forum.fok.nl/topic/1494658" target="_blank">13 jul 2010</a></td>
		  <td><?=$umotorbloempje_i2;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$EXA?></td>
		  <td><a href="http://forum.fok.nl/topic/1628854" target="_blank">28 mar 2011</a></td>
		  <td><a href="http://forum.fok.nl/topic/1684683" target="_blank">18 jul 2011</a></td>
		  <td><?=$umotorbloempje_i3;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$EXA?></td>
		  <td><a href="http://forum.fok.nl/topic/1794736" target="_blank">26 mar 2012</a></td>
		  <td><a href="http://forum.fok.nl/topic/1842255" target="_blank">10 jul 2012</a></td>
		  <td><?=$umotorbloempje_i4;?> dagen</td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><strong><?=$RP?></strong></td>
		  <td><a href="http://forum.fok.nl/topic/1852311" target="_blank">02 aug 2012</a></td>
		  <td>heden	</td>
		  <td><?=$umotorbloempje_i5;?> dagen</td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td><code><?=$umotorbloempje_total;?> dagen</code></td>
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
					[ '1', 'SES', new Date(2009, 10, 02), new Date() ],
					[ '2', 'EXA', new Date(2010, 02, 27), new Date(2010, 06, 13) ],
					[ '2', 'EXA', new Date(2011, 02, 28), new Date(2011, 06, 18) ],
					[ '2', 'EXA', new Date(2012, 02, 26), new Date(2012, 06, 10) ],
					[ '5', 'R&P', new Date(2012, 07, 02), new Date() ]]);
					
 				 chart.draw(dataTable, {height: 200});
				  
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
					[ ' ', 'motorbloempje', new Date(2006, 11, 03), new Date() ],
					[ '1', 'SES', new Date(2009, 10, 02), new Date() ],
					[ '2', 'EXA', new Date(2010, 02, 27), new Date(2010, 06, 13) ],
					[ '2', 'EXA', new Date(2011, 02, 28), new Date(2011, 06, 18) ],
					[ '2', 'EXA', new Date(2012, 02, 26), new Date(2012, 06, 10) ],
					[ '5', 'R&P', new Date(2012, 07, 02), new Date() ]]);
					
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
				['SES',  <?=$umotorbloempje_i1?>],
				['EXA',  <?=$umotorbloempje_i2+$umotorbloempje_i3+$umotorbloempje_i4?>],
				['R&P',  <?=$umotorbloempje_i5?>]
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 400px;"></div>
</div>
                          