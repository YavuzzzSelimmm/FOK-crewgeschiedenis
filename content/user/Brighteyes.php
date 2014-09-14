<?php include("content/date.php"); ?>
<div class="span12 main-column">
	<h1><strong>Brighteyes</strong> <small>4089</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><?=$ui_Brighteyes?></div>
		</div>
        
		<div class="span6">
            <h4>22 mei 2000</h4>
            <p class="experience"><strong><a href="http://forum.fok.nl/user/profile/4089" target="blank_">FOK!profiel</a></strong></p>
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
		  <td><?=$OUD?></td>
		  <td><a href="http://forum.fok.nl/topic/581299" target="_blank">30 jul 2004</a></td>
		  <td><a href="http://forum.fok.nl/topic/883652" target="_blank">12 jul 2006</a></td>
		  <td><?=$uBrighteyes_i1;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$GC?></td>
		  <td><a href="http://forum.fok.nl/topic/637293" target="_blank">08 dec 2004</a></td>
		  <td><a href="http://forum.fok.nl/topic/706439" target="_blank">26 mei 2005</a></td>
		  <td><?=$uBrighteyes_i2;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$KW?></td>
		  <td><a href="http://forum.fok.nl/topic/695643" target="_blank">01 mei 2005</a></td>
		  <td><a href="http://forum.fok.nl/topic/883652" target="_blank">12 jul 2006</a></td>
		  <td><?=$uBrighteyes_i3;?> dagen</td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><strong><?=$OUD?></strong></td>
		  <td>31 aug 2006</td>
		  <td>heden</td>
		  <td><?=$uBrighteyes_i4;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$LIF?></td>
		  <td><a href="http://forum.fok.nl/topic/907123" target="_blank">01 sep 2006</a></td>
		  <td><a href="http://forum.fok.nl/topic/969631" target="_blank">18 jan 2007</a></td>
		  <td><?=$uBrighteyes_i5;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$KW?></td>
		  <td><a href="http://forum.fok.nl/topic/930545" target="_blank">22 okt 2006</a></td>
		  <td><a href="http://forum.fok.nl/topic/1133246" target="_blank">07 mar 2008</a></td>
		  <td><?=$uBrighteyes_i6;?> dagen</td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td><code><?=$uBrighteyes_total;?> dagen</code></td>
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
					[ '1', 'OUD', new Date(2004, 06, 30), new Date(2006, 06, 12) ],
					[ '2',  'GC', new Date(2004, 11, 08), new Date(2005, 04, 26) ],
					[ '3', 'K&W', new Date(2005, 04, 01), new Date(2006, 06, 12) ],
					[ '1', 'OUD', new Date(2006, 07, 31), new Date() ],
					[ '5', 'LIF', new Date(2006, 08, 01), new Date(2006, 12, 18) ],
					[ '3', 'K&W', new Date(2006, 09, 22), new Date(2008, 02, 07) ]]);

			
					
 				 chart.draw(dataTable, {height:250});
				  
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
					[ ' ', 'Brighteyes', new Date(2000, 04, 22), new Date() ],
					[ '1', 'OUD', new Date(2004, 06, 30), new Date(2006, 06, 12) ],
					[ '2',  'GC', new Date(2004, 11, 08), new Date(2005, 04, 26) ],
					[ '3', 'K&W', new Date(2005, 04, 01), new Date(2006, 06, 12) ],
					[ '1', 'OUD', new Date(2006, 07, 31), new Date() ],
					[ '5', 'LIF', new Date(2006, 08, 01), new Date(2006, 12, 18) ],
					[ '3', 'K&W', new Date(2006, 09, 22), new Date(2008, 02, 07) ]]);

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
				['OUD',  <?=$uBrighteyes_i1+$uBrighteyes_i4?>],
				['GC',   <?=$uBrighteyes_i2?>],
				['K&W',  <?=$uBrighteyes_i3+$uBrighteyes_i6?>],
				['LIF',  <?=$uBrighteyes_i5?>]
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 500px;"></div>
</div>
                          