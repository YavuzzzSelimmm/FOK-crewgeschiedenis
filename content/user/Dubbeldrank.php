<?php include("content/date.php"); ?>
<div class="span12 main-column">
	<h1><strong>Dubbeldrank</strong> <small>21530</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><?=$ui_Dubbeldrank?></div>
		</div>
        
		<div class="span6">
            <h4>22 januari 2002</h4>
            <p class="experience"><strong><a href="http://forum.fok.nl/user/profile/21530" target="blank_">FOK!profiel</a></strong></p>
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
		<tr>
		  <td><?=++$t;?></td>
		  <td><?=$VA?></td>
		  <td><a href="http://forum.fok.nl/topic/1158018" target="_blank">26 mei 2008</a></td>
		  <td><a href="http://forum.fok.nl/topic/1329379" target="_blank">17 aug 2009</a></td>
		  <td><?=$uDubbeldrank_i1;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t;?></td>
		  <td><?=$VA?></td>
		  <td><a href="http://forum.fok.nl/topic/1373726" target="_blank">30 nov 2009</a></td>
		  <td><a href="http://forum.fok.nl/topic/1909330" target="_blank">21 dec 2012</a></td>
		  <td><?=$uDubbeldrank_i2;?> dagen</td>
		</tr>
		<tr class="success">
		  <td><?=++$t;?></td>
		  <td><strong><?=$DIG?></strong></td>
		  <td><a href="http://forum.fok.nl/topic/1909330" target="_blank">21 dec 2012</a></td>
		  <td>heden</td>
		  <td><?=$uDubbeldrank_i3;?> dagen</td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td><code><?=$uDubbeldrank_total;?> dagen</code></td>
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
		  <td>Nieuwsposter Sport</td>
		  <td>03 okt 2002</td>
		  <td>29 feb 2004</td>
		  <td><?=$uDubbeldrank_fi1;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t;?></td>
		  <td>Site Admin Sport</td>
		  <td>29 feb 2004</td>
		  <td><a href="http://forum.fok.nl/topic/749619" target="_blank">05 sep 2005</a></td>
		  <td><?=$uDubbeldrank_fi2;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t;?></td>
		  <td>Site Admin Sport</td>
		  <td><a href="http://forum.fok.nl/topic/931817" target="_blank">26 okt 2006</td>
		  <td>19 mei 2007</td>
		  <td><?=$uDubbeldrank_fi3;?> dagen</td>
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
					[ 'NSP', 'Nieuwsposter Sport', new Date(2002, 09, 03), new Date(2004, 01, 29) ],
					[ 'SA', 'SA Sport', new Date(2004, 01, 29), new Date(2005, 08, 05) ],
					[ 'SA', 'SA Sport', new Date(2006, 09, 26), new Date(2007, 04, 19) ],
					[ '1', 'V&A', new Date(2008, 04, 26), new Date(2009, 07, 17) ],
					[ '1', 'V&A', new Date(2009, 10, 30), new Date(2012, 11, 21) ],
					[ '2', 'DIG', new Date(2012, 11, 21), new Date() ]]);

	
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
					[ ' ', 'Dubbeldrank', new Date(2001, 12, 22), new Date() ],
					[ 'NSP', 'Nieuwsposter Sport', new Date(2002, 09, 03), new Date(2004, 01, 29) ],
					[ 'SA', 'SA Sport', new Date(2004, 01, 29), new Date(2005, 08, 05) ],
					[ 'SA', 'SA Sport', new Date(2006, 09, 26), new Date(2007, 04, 19) ],
					[ '1', 'V&A', new Date(2008, 04, 26), new Date(2009, 07, 17) ],
					[ '1', 'V&A', new Date(2009, 10, 30), new Date(2012, 11, 21) ],
					[ '2', 'DIG', new Date(2012, 11, 21), new Date() ]]);

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
				['Functie', 'Dagen'],['',0],['',0],
				['V&A',  <?=$uDubbeldrank_i1+$uDubbeldrank_i2?>],
				['DIG',  <?=$uDubbeldrank_i3?>]
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 400px;"></div>
	
</div>
                          