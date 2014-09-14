<?php include("content/date.php"); ?>
<div class="span12 main-column">
	<h1><strong>Sjeen</strong> <small>7020</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><?=$ui_Sjeen?></div>
		</div>
        
		<div class="span6">
            <h4>28 oktober 2000</h4>
            <p class="experience"><strong><a href="http://forum.fok.nl/user/profile/7020" target="blank_">FOK!profiel</a></strong></p>
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
		  <td><strong><?=$WGR?></strong></td>
		  <td><a href="http://forum.fok.nl/topic/751733" target="_blank">09 sep 2005</a></td>
		  <td>heden</td>
		  <td><?=$uSjeen_i1;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$RP?></td>
		  <td><a href="http://forum.fok.nl/topic/995688" target="_blank">16 mar 2007</a></td>
		  <td>31 jul 2007</td>
		  <td><?=$uSjeen_i2;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$FEE?> <small>(2007)</small></td>
		  <td><a href="http://forum.fok.nl/topic/1091322" target="_blank">31 okt 2007</a></td>
		  <td><a href="http://forum.fok.nl/topic/1113117" target="_blank">06 jan 2008</a></td>
		  <td><?=$uSjeen_i3;?> dagen</td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><strong><?=$KEL?></strong></td>
		  <td><a href="http://forum.fok.nl/topic/1111886" target="_blank">03 jan 2008</a></td>
		  <td>heden</td>
		  <td><?=$uSjeen_i4;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$FEE?> <small>(2008)</small></td>
		  <td><a href="http://forum.fok.nl/topic/1214549" target="_blank">31 okt 2008</a></td>
		  <td>06 jan 2009</td>
		  <td><?=$uSjeen_i5;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$FEE?> <small>(2009)</small></td>
		  <td><a href="http://forum.fok.nl/topic/1360755" target="_blank">28 okt 2009</a></td>
		  <td><a href="http://forum.fok.nl/topic/1391230" target="_blank">06 jan 2010</a></td>
		  <td><?=$uSjeen_i6;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$FEE?> <small>(2010)</small></td>
		  <td>12 okt 2010</a></td>
		  <td><a href="http://forum.fok.nl/topic/1588603" target="_blank">09 jan 2011</a></td>
		  <td><?=$uSjeen_i7;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$FEE?> <small>(2011)</small></td>
		  <td><a href="http://forum.fok.nl/topic/1730825" target="_blank">30 okt 2011</a></td>
		  <td><a href="http://forum.fok.nl/topic/1761874" target="_blank">06 jan 2012</a></td>
		  <td><?=$uSjeen_i8;?> dagen</td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td><code><?=$uSjeen_total;?> dagen</code></td>
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
					[ '1', 'WGR', new Date(2005, 08, 09), new Date() ],
					[ '2', 'R&P', new Date(2007, 02, 16), new Date(2007, 06, 31) ],
					[ '3', 'FEE', new Date(2007, 09, 31), new Date(2007, 12, 06) ],
					[ '4', 'KEL', new Date(2007, 12, 03), new Date() ],
					[ '3', 'FEE', new Date(2008, 09, 31), new Date(2008, 12, 06) ],
					[ '3', 'FEE', new Date(2009, 09, 28), new Date(2009, 12, 06) ],
					[ '3', 'FEE', new Date(2010, 09, 12), new Date(2010, 12, 09) ],
					[ '3', 'FEE', new Date(2011, 09, 30), new Date(2011, 12, 06) ]]);

			
					
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
					[ ' ', 'Sjeen', new Date(2000, 09, 28), new Date() ],
					[ '1', 'WGR', new Date(2005, 08, 09), new Date() ],
					[ '2', 'R&P', new Date(2007, 02, 16), new Date(2007, 06, 31) ],
					[ '3', 'FEE', new Date(2007, 09, 31), new Date(2007, 12, 06) ],
					[ '4', 'KEL', new Date(2007, 12, 03), new Date() ],
					[ '3', 'FEE', new Date(2008, 09, 31), new Date(2008, 12, 06) ],
					[ '3', 'FEE', new Date(2009, 09, 28), new Date(2009, 12, 06) ],
					[ '3', 'FEE', new Date(2010, 09, 12), new Date(2010, 12, 09) ],
					[ '3', 'FEE', new Date(2011, 09, 30), new Date(2011, 12, 06) ]]);

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
				['WGR',  <?=$uSjeen_i1?>],
				['R&P',  <?=$uSjeen_i2?>],
				['FEE',  <?=$uSjeen_i3+$uSjeen_i5+$uSjeen_i6+$uSjeen_i7+$uSjeen_i8?>],
				['KEL',  <?=$uSjeen_i4?>]
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 500px;"></div>
</div>
                          