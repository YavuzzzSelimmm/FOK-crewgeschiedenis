<?php include("content/date.php"); ?>
<div class="span12 main-column">
	<h1><strong>static</strong> <small>15080</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><?=$ui_static?></div>
		</div>
        
		<div class="span6">
            <h4>22 aug 2001</h4>
            <p class="experience"><strong><a href="http://forum.fok.nl/user/profile/15080" target="blank_">FOK!profiel</a></strong></p>
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
		  <td><?=++$t;?></td>
		  <td><?=$SHO?></td>
		  <td><a href="http://forum.fok.nl/topic/381955" target="_blank">07 sep 2003</a></td>
		  <td><a href="http://forum.fok.nl/topic/689529" target="_blank">15 apr 2005</a></td>
		  <td><?=$ustatic_i1;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t;?></td>
		  <td><?=$SHO?></td>
		  <td><a href="http://forum.fok.nl/topic/693180" target="_blank">24 apr 2005</a></td>
		  <td><a href="http://forum.fok.nl/topic/722977" target="_blank">04 jul 2005</a></td>
		  <td><?=$ustatic_i2;?> dagen</td>
		</tr>
		<tr class="success">
		  <td><?=++$t;?></td>
		  <td><strong><?=$SHO?></strong></td>
		  <td><a href="http://forum.fok.nl/topic/899750" target="_blank">16 aug 2006</a></td>
		  <td>heden</td>
		  <td><?=$ustatic_i3;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t;?></td>
		  <td><?=$KAA?></td>
		  <td><a href="http://forum.fok.nl/topic/1152979" target="_blank">09 mei 2008</a></td>
		  <td><a href="http://forum.fok.nl/topic/1911042" target="_blank">25 dec 2012</a></td>
		  <td><?=$ustatic_i4;?> dagen</td>
		</tr>
		<tr class="success">
		  <td><?=++$t;?></td>
		  <td><strong><?=$KAA?></strong></td>
		  <td><a href="http://forum.fok.nl/topic/1981112" target="_blank">06 jun 2013</a></td>
		  <td>heden</td>
		  <td><?=$ustatic_i5;?> dagen</td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td><code><?=$ustatic_total;?> dagen</code></td>
		</tr>
	  </tbody>
	</table>
	
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
		  <td>Redactie FP</td>
		  <td>04 jan 2005</td>
		  <td>12 apr 2005</td>
		  <td><?=$ustatic_fi1;?> dagen</td>
		</tr>
		<tr class="success">
		  <td><?=++$t;?></td>
		  <td><strong>Redactie FP</strong></td>
		  <td>16 sep 2008</td>
		  <td>heden</td>
		  <td><?=$ustatic_fi2;?> dagen</td>
		</tr>
	  </tbody>
	</table>
	
	
		<div class="text-divider5"><span></span></div>

		<ul class="nav nav-tabs" id="myTab">
			<li class="active"><a data-toggle="tab" href="#user">User</a></li>
			<li class=""><a data-toggle="tab" href="#fok">FOK!</a></li>
		</ul>
		<div class="tab-content" id="myTabContent" style="width: 100%; height: 240px;">		
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
					[ '1', 'SHO', new Date(2003, 08, 07), new Date(2005, 03, 15) ],
					[ '1', 'SHO', new Date(2005, 03, 24), new Date(2005, 06, 25) ],
					[ '1', 'SHO', new Date(2006, 07, 16), new Date() ],
					[ '4', 'KAA', new Date(2008, 06, 09), new Date(2012, 11, 25)],
					[ '4', 'KAA', new Date(2013, 05, 06), new Date()]]);
					
 				 chart.draw(dataTable);
				  
				}
				</script>

				<div id="u" style="width: 100%;"></div>
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
					[ ' ', 'static', new Date(2001, 07, 22), new Date() ],
					[ '1', 'SHO', new Date(2003, 08, 07), new Date(2005, 03, 15) ],
					[ '1', 'SHO', new Date(2005, 03, 24), new Date(2005, 06, 25) ],
					[ '1', 'SHO', new Date(2006, 07, 16), new Date() ],
					[ '4', 'KAA', new Date(2008, 06, 09), new Date(2012, 11, 25)],
					[ '4', 'KAA', new Date(2013, 05, 06), new Date()]]);


					var options = {
						width: 940,
						height: 215
					};

					  chart.draw(dataTable, options);
					}
				</script>

				<div id="f" style="width: 100%;"></div>
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
				['SHO',  <?=$ustatic_i1+$ustatic_i2+$ustatic_i3?>],
				['KAA',  <?=$ustatic_i4+$ustatic_i5?>]
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 400px;"></div>
</div>