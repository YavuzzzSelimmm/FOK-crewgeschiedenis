<div class="span12 main-column">
	<h1><strong>Defensie</strong> <small>DEF / 136</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanForum photo">
			<div class="bordered-img"><img style="width: 50px; height: 50px;"  alt="" src="img/_DEF.png"></div>
		</div>
        
		<div class="span6">
            <h4><a href="http://forum.fok.nl/topic/1141067" target="blank_">31 mar 2008</a> - heden</h4>
			<p class="experience"><a href="http://forum.fok.nl/DEF" target="_blank">/DEF</a></p>
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
		  <td><a href="?user=Bob-B">Bob-B</a></td>
		  <td><a href="http://forum.fok.nl/topic/1141067" target="blank_">31 mar 2008</a></td>
		  <td><a href="http://forum.fok.nl/topic/1556983" target="blank_">08 nov 2010</a></td>
		  <td>
			<?php
				$start1 = new DateTime("2008-03-30");
				$end1 = new DateTime("2010-11-08");
				$interval1 = $start1->diff($end1);
				echo "" . $interval1->days . " dagen";
			?>
		  </td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><strong><a href="?user=Pumatje">Pumatje</a></strong></td>
		  <td><a href="http://forum.fok.nl/topic/1144145" target="blank_">10 apr 2008</a></td>
		  <td>heden</td>
		  <td>
			<?php
				$start2 = new DateTime("2008-04-09");
				$end2 = new DateTime();
				$interval2 = $start2->diff($end2);
				echo "" . $interval2->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=sp3c">sp3c</a></td>
		  <td><a href="http://forum.fok.nl/topic/1222059" target="blank_">20 nov 2008</a></td>
		  <td><a href="http://forum.fok.nl/topic/1556983" target="blank_">08 nov 2010</a></td>
		  <td>
			<?php
				$start3 = new DateTime("2008-11-19");
				$end3 = new DateTime("2010-11-08");
				$interval3 = $start3->diff($end3);
				echo "" . $interval3->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=Lotusss">Lotusss</a></td>
		  <td><a href="http://forum.fok.nl/topic/1556983" target="blank_">08 nov 2010</a></td>
		  <td><a href="http://forum.fok.nl/topic/1999536" target="blank_">23 jul 2013</a></td>
		  <td>
			<?php
				$start4 = new DateTime("2010-11-07");
				$end4 = new DateTime("2013-07-23");
				$interval4 = $start4->diff($end4);
				echo "" . $interval4->days . " dagen";
			?>
		  </td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><strong><a href="?user=Cobra4">Cobra4</a></strong></td>
		  <td><a href="http://forum.fok.nl/topic/1702251" target="blank_">26 aug 2011</a></td>
		  <td>heden</td>
		  <td>
			<?php
				$start5 = new DateTime("2011-08-25");
				$end5 = new DateTime();
				$interval5 = $start5->diff($end5);
				echo "" . $interval5->days . " dagen";
			?>
		  </td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><strong><a href="?user=jitzzzze">jitzzzze</a></strong></td>
		  <td><a href="http://forum.fok.nl/topic/1999538/" target="blank_">23 jul 2013</a></td>
		  <td>heden</td>
		  <td>
			<?php
				$start6 = new DateTime("2013-07-16");
				$end6 = new DateTime();
				$interval6 = $start6->diff($end6);
				echo "" . $interval6->days . " dagen";
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
				$start = new DateTime("2008-03-30");
				$end = new DateTime();
				$interval = $start->diff($end);
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
		<div class="tab-content" id="myTabContent" style="width: 100%; height: 415px;">
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
					[ ' ', 'DEF', new Date(2008, 02, 31), new Date() ],
					[ '1', 'Bob-B', new Date(2008, 02, 31), new Date(2010, 10, 08) ],
					[ '2', 'Pumatje', new Date(2008, 03, 10), new Date() ],
					[ '3', 'sp3c', new Date(2008, 10, 20), new Date(2010, 10, 08) ],
					[ '4', 'Lotusss', new Date(2010, 10, 08), new Date(2013, 06, 23) ],
					[ '5', 'Cobra4', new Date(2011, 07, 26), new Date() ],
					[ '6', 'jitzzzze', new Date(2013, 06, 23), new Date() ]]);

			
 				 chart.draw(dataTable, {height: 350});
				  
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
					[ ' ', 'DEF', new Date(2008, 02, 31), new Date() ],
					[ '1', 'Bob-B', new Date(2008, 02, 31), new Date(2010, 10, 08) ],
					[ '2', 'Pumatje', new Date(2008, 03, 10), new Date() ],
					[ '3', 'sp3c', new Date(2008, 10, 20), new Date(2010, 10, 08) ],
					[ '4', 'Lotusss', new Date(2010, 10, 08), new Date(2013, 06, 23) ],
					[ '5', 'Cobra4', new Date(2011, 07, 26), new Date() ],
					[ '6', 'jitzzzze', new Date(2013, 06, 23), new Date() ]]);

				   
				   var options = {
					width: 940,
					height: 390
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
				['Bob-B', <?=$interval1->days?>],
				['Pumatje', <?=$interval2->days?>],
				['sp3c', <?=$interval3->days?>],
				['Lotusss', <?=$interval4->days?>],
				['Cobra4', <?=$interval5->days?>],
				['jitzzzze', <?=$interval6->days?>],
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 400px;"></div>	
</div>
                          