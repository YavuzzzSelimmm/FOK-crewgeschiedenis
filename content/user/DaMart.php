<?php include("content/date.php"); ?>
<div class="span12 main-column">
	<h1><strong>DaMart</strong> <small>42184</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><?=$ui_DaMart?></div>
		</div>
        
		<div class="span6">
            <h4>12 dec 2002</h4>
            <p class="experience"><strong><a href="http://forum.fok.nl/user/profile/42184" target="blank_">FOK!profiel</a></strong></p>
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
		  <td><strong><?=$TTK?></strong></td>
		  <td><a href="http://forum.fok.nl/topic/1073983" target="blank_">11 sep 2007</a></td>
		  <td>heden</td>
		  <td><?=$uDaMart_i1;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t;?></td>
		  <td><?=$KSW?> <small>(2007)</small></td>
		  <td>14 nov 2007</td>
		  <td><a href="http://forum.fok.nl/topic/1109848" target="blank_">26 jan 2008</a></td>
		  <td><?=$uDaMart_i2;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t;?></td>
		  <td><?=$NWB?></td>
		  <td><a href="http://forum.fok.nl/topic/1128279" target="blank_">21 feb 2008</a></td>
		  <td>14 mei 2008</td>
		  <td><?=$uDaMart_i3;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t;?></td>
		  <td><?=$KSW?> <small>(2008)</small></td>
		  <td><a href="http://forum.fok.nl/topic/1222368" target="blank_">21 nov 2008</a></td>
		  <td><a href="http://forum.fok.nl/topic/1242778" target="blank_">15 jan 2009</a></td>
		  <td><?=$uDaMart_i4;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t;?></td>
		  <td><?=$KSW?> <small>(2009)</small></td>
		  <td><a href="http://forum.fok.nl/topic/1376974" target="blank_">07 dec 2009</a></td>
		  <td><a href="http://forum.fok.nl/topic/1376963" target="blank_">31 jan 2010</a></td>
		  <td><?=$uDaMart_i5;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t;?></td>
		  <td><?=$KSW?> <small>(2010)</small></td>
		  <td><a href="http://forum.fok.nl/topic/1571432" target="blank_">07 dec 2010</a></td>
		  <td>06 jan 2011</td>
		  <td><?=$uDaMart_i6;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t;?></td>
		  <td><?=$KSW?> <small>(2011)</small></td>
		  <td><a href="http://forum.fok.nl/topic/1747969" target="blank_">06 dec 2011</a></td>
		  <td><a href="http://forum.fok.nl/topic/1761894" target="blank_">06 jan 2012</a></td>
		  <td><?=$uDaMart_i7;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t;?></td>
		  <td><?=$KSW?> <small>(2012)</small></td>
		  <td>06 dec 2012</td>
		  <td><a href="http://forum.fok.nl/topic/1916825" target="blank_">07 jan 2013</a></td>
		  <td><?=$uDaMart_i8;?> dagen</td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td><code><?=$uDaMart_total;?> dagen</code></td>
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
		  <td><?=++$t;?></td>
		  <td><strong>PR</strong></td>
		  <td><a href="http://forum.fok.nl/topic/1510670" target="_blank">11 aug 2010</a></td>
		  <td>heden</td>
		  <td><?=$uDaMart_fi1;?> dagen</td>
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
					[ '1', 'TTK', new Date(2007, 08, 11), new Date() ],
					[ '2', 'KSW', new Date(2007, 10, 14), new Date(2007, 12, 26) ],
					[ '3', 'NWB', new Date(2008, 01, 21), new Date(2008, 04, 14) ],
					[ '2', 'KSW', new Date(2008, 10, 21), new Date(2008, 12, 15) ],
					[ '2', 'KSW', new Date(2009, 11, 07), new Date(2009, 12, 31) ],
					[ '2', 'KSW', new Date(2010, 11, 07), new Date(2010, 12, 06) ],
					[ '2', 'KSW', new Date(2011, 11, 06), new Date(2011, 12, 06) ],
					[ '2', 'KSW', new Date(2012, 11, 06), new Date(2012, 12, 07) ],
					[ 'PR', 'PR', new Date(2010, 07, 11), new Date()]]);

					var options = {
						height: 250
					};

 				 chart.draw(dataTable, options);
				  
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
					[ ' ', 'DaMart', new Date(2002, 11, 12), new Date() ],
					[ '1', 'TTK', new Date(2007, 08, 11), new Date() ],
					[ '2', 'KSW', new Date(2007, 10, 14), new Date(2007, 12, 26) ],
					[ '3', 'NWB', new Date(2008, 01, 21), new Date(2008, 04, 14) ],
					[ '2', 'KSW', new Date(2008, 10, 21), new Date(2008, 12, 15) ],
					[ '2', 'KSW', new Date(2009, 11, 07), new Date(2009, 12, 31) ],
					[ '2', 'KSW', new Date(2010, 11, 07), new Date(2010, 12, 06) ],
					[ '2', 'KSW', new Date(2011, 11, 06), new Date(2011, 12, 06) ],
					[ '2', 'KSW', new Date(2012, 11, 06), new Date(2012, 12, 07) ],
					[ 'PR', 'PR', new Date(2010, 07, 11), new Date()]]);

					var options = {
						width: 940,
						height: 300
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
				['TTK',  <?=$uDaMart_i1?>],
				['KSW',  <?=$uDaMart_i2+
							$uDaMart_i4+
							$uDaMart_i5+
							$uDaMart_i6+
							$uDaMart_i7+
							$uDaMart_i8?>],
				['NWB',  <?=$uDaMart_i3?>]
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 400px;"></div>
</div>
                          