<?php include("content/date.php"); ?>
<div class="span12 main-column">
	<h1><strong>Sack_Blabbath</strong> <small>84117</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><?=$ui_Sack_Blabbath?></div>
		</div>
        
		<div class="span6">
            <h4>6 februari 2004</h4>
            <p class="experience"><strong><a href="http://forum.fok.nl/user/profile/84117" target="blank_">FOK!profiel</a></strong></p>
			<br />
		</div>
	</div>
	
	<div class="text-divider5"><span></span></div>
	<?php $t=0;?>
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
		  <td><?=$MUZ?></td>
		  <td><a href="http://forum.fok.nl/topic/1158770" target="_blank">28 mei 2008</a></td>
		  <td><a href="http://forum.fok.nl/topic/1446824" target="_blank">23 apr 2010</a></td>
		  <td><?=$uSack_Blabbath_i1;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t;?></td>
		  <td><?=$LWL?> <small>(2009)</small></td>
		  <td><a href="http://forum.fok.nl/topic/1298786" target="_blank">02 jun 2009</a></td>
		  <td><a href="http://forum.fok.nl/topic/1340644" target="_blank">14 sep 2009</a></td>
		  <td><?=$uSack_Blabbath_i2;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t;?></td>
		  <td><?=$LWL?> <small>(2010)</small></td>
		  <td><a href="http://forum.fok.nl/topic/1471767" target="_blank">07 jul 2010</a></td>
		  <td><a href="http://forum.fok.nl/topic/1526694" target="_blank">10 sep 2010</a></td>
		  <td><?=$uSack_Blabbath_i3;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t;?></td>
		  <td><?=$FMM?></td>
		  <td><a href="http://forum.fok.nl/topic/1531884" target="_blank">20 sep 2010</a></td>
		  <td><a href="http://forum.fok.nl/topic/1587983" target="_blank">08 jan 2011</a></td>
		  <td><?=$uSack_Blabbath_i4;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t;?></td>
		  <td><?=$LWL?> <small>(2011)</small></td>
		  <td>14 jun 2011</td>
		  <td><a href="http://forum.fok.nl/topic/1718746" target="_blank">04 okt 2011</a></td>
		  <td><?=$uSack_Blabbath_i5;?> dagen</td>
		</tr>
		<tr class="success">
		  <td><?=++$t;?></td>
		  <td><strong><?=$MUZ?></strong></td>
		  <td><a href="http://forum.fok.nl/topic/1754006" target="_blank">20 dec 2011</a></td>
		  <td>heden</td>
		  <td><?=$uSack_Blabbath_i6;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t;?></td>
		  <td><?=$LWL?> <small>(2012)</small></td>
		  <td><a href="http://forum.fok.nl/topic/1832740" target="_blank">19 jun 2012</a></td>
		  <td><a href="http://forum.fok.nl/topic/1862783" target="_blank">27 aug 2012</a></td>
		  <td><?=$uSack_Blabbath_i7;?> dagen</td>
		</tr>
		<tr class="success">
		  <td><?=++$t;?></td>
		  <td><strong><?=$LWL?> <small>(2013)</small></strong></td>
		  <td><a href="http://forum.fok.nl/topic/1994244" target="_blank">09 jul 2013</a></td>
		  <td>heden</td>
		  <td><?=$uSack_Blabbath_i8;?> dagen</td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td><code><?=$uSack_Blabbath_total;?> dagen</code></td>
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
					[ '1', 'MUZ', new Date(2008, 04, 28), new Date(2010, 03, 23) ],
					[ '2', 'LWL', new Date(2009, 05, 02), new Date(2009, 08, 14) ],
					[ '2', 'LWL', new Date(2010, 06, 07), new Date(2010, 08, 10) ],
					[ '4', 'FMM', new Date(2010, 08, 20), new Date(2010, 12, 08) ],
					[ '2', 'LWL', new Date(2011, 05, 14), new Date(2011, 09, 04) ],
					[ '1', 'MUZ', new Date(2011, 11, 20), new Date() ],
					[ '2', 'LWL', new Date(2012, 05, 19), new Date(2012, 07, 27) ],
					[ '2', 'LWL', new Date(2013, 06, 09), new Date() ]]);

			
					
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
					[ ' ', 'Sack_Blabbath', new Date(2004, 01, 06), new Date() ],
					[ '1', 'MUZ', new Date(2008, 04, 28), new Date(2010, 03, 23) ],
					[ '2', 'LWL', new Date(2009, 05, 02), new Date(2009, 08, 14) ],
					[ '2', 'LWL', new Date(2010, 06, 07), new Date(2010, 08, 10) ],
					[ '4', 'FMM', new Date(2010, 08, 20), new Date(2010, 12, 08) ],
					[ '2', 'LWL', new Date(2011, 05, 14), new Date(2011, 09, 04) ],
					[ '1', 'MUZ', new Date(2011, 11, 20), new Date() ],
					[ '2', 'LWL', new Date(2012, 05, 19), new Date(2012, 07, 27) ],
					[ '2', 'LWL', new Date(2013, 06, 09), new Date() ]]);

					
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
				['MUZ',  <?=$uSack_Blabbath_i1+$uSack_Blabbath_i6?>],
				['LWL',  <?=$uSack_Blabbath_i2+
							$uSack_Blabbath_i3+
							$uSack_Blabbath_i5+
							$uSack_Blabbath_i7+
							$uSack_Blabbath_i8?>],
				['FMM',  <?=$uSack_Blabbath_i4?>]
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 400px;"></div>
</div>
                          