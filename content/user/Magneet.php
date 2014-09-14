<?php include("content/date.php"); ?>
<div class="span12 main-column">
	<h1><strong>Magneet</strong> <small>33169</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><?=$ui_Magneet?></div>
		</div>
        
		<div class="span6">
            <h4>29 juli 2002</h4>
            <p class="experience"><strong><a href="http://forum.fok.nl/user/profile/33169" target="blank_">FOK!profiel</a></strong></p>
			<br />
		</div>
	</div>
	
	<div class="text-divider5"><span></span></div>
	<h2>Forum</h2>
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
		  <td><?=$VA?></td>
		  <td><a href="http://forum.fok.nl/topic/445537" target="_blank">17 dec 2003</a></td>
		  <td><a href="http://forum.fok.nl/topic/513961" target="_blank">22 mar 2004</a></td>
		  <td><?=$uMagneet_i1;?> dagen</td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td><code><?=$uMagneet_total;?> dagen</code></td>
		</tr>
	  </tbody>
	</table>
	
	<h2>FOK!</h2>
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
		  <td>Reviewer</td>
		  <td>28 mei 2005</td>
		  <td>06 dec 2006</td>
		  <td><?=$uMagneet_fi1;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td>Reviewer</td>
		  <td>30 okt 2009</td>
		  <td>16 mei 2011</td>
		  <td><?=$uMagneet_fi2;?> dagen</td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><strong>Manager Reviews</strong></td>
		  <td><a href="http://forum.fok.nl/topic/1653080">16 mei 2011</a></td>
		  <td>heden</td>
		  <td><?=$uMagneet_fi3;?> dagen</td>
		</tr>
	   </tbody>
	</table>
		<div class="text-divider5"><span></span></div>

		<ul class="nav nav-tabs" id="myTab">
			<li class="active"><a data-toggle="tab" href="#user">User</a></li>
			<li class=""><a data-toggle="tab" href="#fok">FOK!</a></li>
		</ul>
		<div class="tab-content" id="myTabContent" style="width: 100%; height: 285px;">		
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
					[ '1', 	 'V&A', 			new Date(2003, 11, 17), new Date(2004, 02, 22) ],
					[ 'RVW', 'Reviewer',		new Date(2005, 04, 28), new Date(2006, 11, 06) ],
					[ 'RVW', 'Reviewer', 		new Date(2009, 09, 30), new Date(2011, 04, 16) ],
					[ 'MRW', 'Manager Reviews', new Date(2011, 04, 16), new Date() ]]);

			
					
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
					[ ' ', 'Magneet', new Date(2002, 06, 29), new Date() ],
					[ '1', 	 'V&A', 			new Date(2003, 11, 17), new Date(2004, 02, 22) ],
					[ 'RVW', 'Reviewer',		new Date(2005, 04, 28), new Date(2006, 11, 06) ],
					[ 'RVW', 'Reviewer', 		new Date(2009, 09, 30), new Date(2011, 04, 16) ],
					[ 'MRW', 'Manager Reviews', new Date(2011, 04, 16), new Date() ]]);

				 var options = {
					width: 940,
					height: 260
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
				['V&A',  <?=$uMagneet_i1?>]
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 400px;"></div>
</div>
                          