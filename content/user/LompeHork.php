<?php include("content/date.php"); ?>
<div class="span12 main-column">
	<h1><strong>LompeHork</strong> <small>280647</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><?=$ui_LompeHork;?></div>
		</div>
        
		<div class="span6">
            <h4>20 november 2009</h4>
            <p class="experience"><strong><a href="http://forum.fok.nl/user/profile/280647" target="blank_">FOK!profiel</a></strong></p>
			<br />
		</div>
	</div>
	
	<div class="text-divider5"><span></span></div>
	<?php $t=0; ?>
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
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$ROO;?></td>
		  <td><a href="http://forum.fok.nl/topic/1727680" target="_blank">23 okt 2011</a></td>
		  <td><a href="http://forum.fok.nl/topic/1759399" target="_blank">01 jan 2012</a></td>
		  <td><?=$uLompeHork_i1;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$DIG;?></td>
		  <td><a href="http://forum.fok.nl/topic/1752623" target="_blank">17 dec 2011</a></td>
		  <td><a href="http://forum.fok.nl/topic/1845935" target="_blank">18 jul 2012</a></td>
		  <td><?=$uLompeHork_i2;?> dagen</td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><strong><?=$ONZ;?></strong></td>
		  <td><a href="http://forum.fok.nl/topic/1845935" target="_blank">18 jul 2012</a></td>
		  <td>heden</td>
		  <td><?=$uLompeHork_i3;?> dagen</td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td><code><?=$uLompeHork_total;?> dagen</code></td>
		</tr>
	  </tbody>
	</table>
	
	<?php $t=0; ?>
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
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><strong>Designer</strong></td>
		  <td>26 jan 2012</td>
		  <td>heden</td>
		  <td><?=$uLompeHork_fi1;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td>Redactie FP</td>
		  <td>31 jul 2012</td>
		  <td>13 aug 2013</td>
		  <td><?=$uLompeHork_fi2;?> dagen</td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><strong>Eindredactie FP</strong></td>
		  <td><a href="http://forum.fok.nl/topic/2008054" target="_blank">13 aug 2013</a></td>
		  <td>heden</td>
		  <td><?=$uLompeHork_fi3;?> dagen</td>
		</tr>
	  </tbody>
	</table>
	
		<div class="text-divider5"><span></span></div>

		<ul class="nav nav-tabs" id="myTab">
			<li class="active"><a data-toggle="tab" href="#user">User</a></li>
			<li class=""><a data-toggle="tab" href="#fok">FOK!</a></li>
		</ul>
		<div class="tab-content" id="myTabContent" style="width: 100%; height: 405px;">		
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
					[ '1', 'ROO', new Date(2011, 09, 23), new Date(2011, 12, 01) ],
					[ '2', 'DIG', new Date(2011, 11, 17), new Date(2012, 06, 18) ],
					[ 'Des', 'Designer', new Date(2011, 12, 26), new Date() ],
					[ '3', 'ONZ', new Date(2012, 06, 18), new Date() ],
					[ 'RFP', 'Redactie FP', new Date(2012, 06, 31), new Date(2013, 07, 13) ],
					[ 'ERFP', 'Eindredactie FP', new Date(2013, 07, 13), new Date() ]]);
					
 				 chart.draw(dataTable, {height: 300});
				  
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
					[ ' ', 'LompeHork', new Date(2009, 10, 20), new Date() ],
					[ '1', 'ROO', new Date(2011, 09, 23), new Date(2011, 12, 01) ],
					[ '2', 'DIG', new Date(2011, 11, 17), new Date(2012, 06, 18) ],
					[ 'Des', 'Designer', new Date(2011, 12, 26), new Date() ],
					[ '3', 'ONZ', new Date(2012, 06, 18), new Date() ],
					[ 'RFP', 'Redactie FP', new Date(2012, 06, 31), new Date(2013, 07, 13) ],
					[ 'ERFP', 'Eindredactie FP', new Date(2013, 07, 13), new Date() ]]);

				 var options = {
					width: 940,
					height: 380
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
				['ROO',  <?=$uLompeHork_i1?>],
				['DIG',  <?=$uLompeHork_i2?>],['',0],
				['ONZ',  <?=$uLompeHork_i3?>]
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 400px;"></div>
</div>
                          