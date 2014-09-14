<div class="span12 main-column">
	<h1><strong>Film, tv & radio</strong> <small>TV / 7</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><img alt="" src="img/_TV.png"></div>
		</div>
        
		<div class="span6">
            <h4><a href="http://forum.fok.nl/topic/1718900" target="blank_">21 jul 2000</a> - heden</h4>
			<p class="experience"><a href="http://forum.fok.nl/TV" target="_blank">/TV</a></p>
			<br />
		</div>
	</div>
	
	<div class="text-divider5"><span></span></div>
	
	<?php $t=0; ?>
	<table class="table table-striped">
	  <thead>
		<tr>
		  <th>#</th>
		  <th>Mod</th>
		  <th>Startdatum</th>
		  <th>Einddatum</th>
		  <th>Duur</th>
		</tr>
	  </thead>
	  <tbody>
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=Verbal">Verbal</a></td>
		  <td><a href="http://forum.fok.nl/topic/15088" target="blank_">21 jul 2000</a></td>
		  <td><a href="http://forum.fok.nl/topic/165826" target="blank_">21 jun 2002</a></td>
		  <td>
			<?php
				$start1 = new DateTime("2000-07-20");
				$end1 = new DateTime("2002-06-21");
				$interval1 = $start1->diff($end1);
				echo "" . $interval1->days . " dagen";
			?>
		  </td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><a href="?user=Mike">Mike</a></td>
		  <td><a href="http://forum.fok.nl/topic/165826" target="blank_">21 jun 2002</a></td>
		  <td>heden</td>
		  <td>
			<?php
				$start2 = new DateTime("2002-06-20");
				$end2  = new DateTime();
				$interval2 = $start2->diff($end2);
				echo "" . $interval2->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=BlaatschaaP">BlaatschaaP</a></td>
		  <td><a href="http://forum.fok.nl/topic/307905" target="blank_">24 apr 2003</a></td>
		  <td><a href="http://forum.fok.nl/topic/387488" target="blank_">16 sep 2003</a></td>
		  <td>
			<?php
				$start3 = new DateTime("2003-04-23");
				$end3 = new DateTime("2003-09-16");
				$interval3 = $start3->diff($end3);
				echo "" . $interval3->days . " dagen";
			?>
		  </td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><a href="?user=Gorro">Gorro</a></td>
		  <td><a href="http://forum.fok.nl/topic/387488" target="blank_">16 sep 2003</a></td>
		  <td>heden</td>
		  <td>
			<?php
				$start4 = new DateTime("2003-09-15");
				$end4 = new DateTime();
				$interval4 = $start4->diff($end4);
				echo "" . $interval4->days . " dagen";
			?>
		  </td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><a href="?user=SaintOfKillers">SaintOfKillers</a></td>
		  <td><a href="http://forum.fok.nl/topic/747415" target="blank_">31 aug 2005</a></td>
		  <td>heden</td>
		  <td>
			<?php
				$start5 = new DateTime("2005-08-30");
				$end5 = new DateTime();
				$interval5 = $start5->diff($end5);
				echo "" . $interval5->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td><code>
			<?php
				$start = new DateTime("2000-07-20");
				$end = new DateTime();
				$interval =  $start->diff($end);
				echo "" . $interval->days . " dagen";
			?>
			</code>
		  </td>
		</tr>
	  </tbody>
	</table>
	
		<div class="text-divider5"><span></span></div>

		<ul class="nav nav-tabs" id="myTab">
			<li class="active"><a data-toggle="tab" href="#mods">Mods</a></li>
			<li class=""><a data-toggle="tab" href="#fok">FOK!</a></li>
		</ul>
		<div class="tab-content" id="myTabContent" style="width: 100%; height: 365px;">
			<div id="mods" class="tab-pane fade active in">
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
					[ ' ', 'TV', new Date(2000, 06, 21), new Date() ],
					[ '1', 'Verbal', new Date(2000, 06, 21), new Date(2002, 05, 21) ],
					[ '2', 'Mike', new Date(2002, 05, 21), new Date() ],
					[ '3', 'BlaatschaaP', new Date(2003, 03, 24), new Date(2003, 08, 16) ],
					[ '4', 'Gorro', new Date(2003, 08, 16), new Date() ],
					[ '5', 'SaintOfKillers', new Date(2005, 07, 31), new Date() ]]);

				   var options = {	
					height: 300
 				   };
			
 				 chart.draw(dataTable, options);
				  
				}
				</script>

				<div id="u"></div>
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
					[ ' ', 'TV', new Date(2000, 06, 21), new Date() ],
					[ '1', 'Verbal', new Date(2000, 06, 21), new Date(2002, 05, 21) ],
					[ '2', 'Mike', new Date(2002, 05, 21), new Date() ],
					[ '3', 'BlaatschaaP', new Date(2003, 03, 24), new Date(2003, 08, 16) ],
					[ '4', 'Gorro', new Date(2003, 08, 16), new Date() ],
					[ '5', 'SaintOfKillers', new Date(2005, 07, 31), new Date() ]]);

				var options = {
					width: 940,
					height: 340
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
				['Mod', 'Dagen'], ['',0],
				['Verbal', <?=$interval1->days?>],
				['Mike', <?=$interval2->days?>],
				['BlaatschaaP', <?=$interval3->days?>],
				['Gorro', <?=$interval4->days?>],
				['SaintOfKillers', <?=$interval5->days?>]
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 400px;"></div>	
</div>
                          