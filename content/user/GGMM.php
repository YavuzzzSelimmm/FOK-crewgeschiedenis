<?php include("content/date.php"); ?>
<div class="span12 main-column">
	<h1><strong>GGMM</strong> <small>35723</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><?=$ui_GGMM?></div>
		</div>
        
		<div class="span6">
            <h4>6 september 2002</h4>
            <p class="experience"><strong><a href="http://forum.fok.nl/user/profile/35723" target="blank_">FOK!profiel</a></strong></p>
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
		  <td><?=$IND?></td>
		  <td><a href="http://forum.fok.nl/topic/1640005" target="_blank">19 apr 2011</a></td>
		  <td><a href="http://forum.fok.nl/topic/1677533" target="_blank">03 jul 2011</a></td>
		  <td><?=$uGGMM_i1;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$KLB?></td>
		  <td><a href="http://forum.fok.nl/topic/1670796" target="_blank">20 jun 2011</a></td>
		  <td><a href="http://forum.fok.nl/topic/1850316" target="_blank">29 jul 2012</a></td>
		  <td><?=$uGGMM_i2;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$ZOM?></td>
		  <td><a href="http://forum.fok.nl/topic/1681414" target="_blank">11 jul 2011</a></td>
		  <td><a href="http://forum.fok.nl/topic/1696953" target="_blank">14 aug 2011</a></td>
		  <td><?=$uGGMM_i3;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$VBL?></td>
		  <td><a href="http://forum.fok.nl/topic/1734948" target="_blank">07 nov 2011</a></td>
		  <td><a href="http://forum.fok.nl/topic/1976766" target="_blank">26 mei 2013</a></td>
		  <td><?=$uGGMM_i4;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$EK?> <small>(2012)</small></td>
		  <td><a href="http://forum.fok.nl/topic/1797643" target="_blank">01 apr 2012</a></td>
		  <td><a href="http://forum.fok.nl/topic/1849426" target="_blank">27 jul 2012</a></td>
		  <td><?=$uGGMM_i5;?> dagen</td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><strong><?=$VBL?></strong></td>
		  <td><a href="http://forum.fok.nl/topic/2004389" target="_blank">04 aug 2013</a></td>
		  <td>heden</td>
		  <td><?=$uGGMM_i6;?> dagen</td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td><code><?=$uGGMM_total;?> dagen</code></td>
		</tr>
	  </tbody>
	</table>
	
		<div class="text-divider5"><span></span></div>

		<ul class="nav nav-tabs" id="myTab">
			<li class="active"><a data-toggle="tab" href="#user">User</a></li>
			<li class=""><a data-toggle="tab" href="#fok">FOK!</a></li>
		</ul>
		<div class="tab-content" id="myTabContent" style="width: 100%; height: 375px;">		
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
					[ '1', 'IND', new Date(2011, 03, 19), new Date(2011, 06, 03) ],
					[ '2', 'KLB', new Date(2011, 05, 20), new Date(2012, 06, 29) ],
					[ '3', 'ZOM', new Date(2011, 06, 11), new Date(2011, 07, 14) ],
					[ '4', 'VBL', new Date(2011, 10, 07), new Date(2013, 04, 26) ],
					[ '5', 'EK',  new Date(2012, 03, 01), new Date(2012, 06, 27) ],
					[ '4', 'VBL', new Date(2013, 07, 04), new Date() ]]);

			
					
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
					[ ' ', 'GGMM', new Date(2002, 08, 06), new Date() ],
					[ '1', 'IND', new Date(2011, 03, 19), new Date(2011, 06, 03) ],
					[ '2', 'KLB', new Date(2011, 05, 20), new Date(2012, 06, 29) ],
					[ '3', 'ZOM', new Date(2011, 06, 11), new Date(2011, 07, 14) ],
					[ '4', 'VBL', new Date(2011, 10, 07), new Date(2013, 04, 26) ],
					[ '5', 'EK',  new Date(2012, 03, 01), new Date(2012, 06, 27) ],
					[ '4', 'VBL', new Date(2013, 07, 04), new Date() ]]);

				 var options = {
					width: 940,
					height: 350
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
				['IND',  <?=$uGGMM_i1?>],
				['KLB',  <?=$uGGMM_i2?>],
				['ZOM',  <?=$uGGMM_i3?>],
				['VBL',  <?=$uGGMM_i4+$uGGMM_i6?>],
				['EK',  <?=$uGGMM_i5?>]
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 500px;"></div>
</div>
                          