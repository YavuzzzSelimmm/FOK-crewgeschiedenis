<?php 

/*
Handles month/year increment calculations in a safe way,
avoiding the pitfall of 'fuzzy' month units.

Returns a DateTime object with incremented month values, and a date value == 1.
*/
function incrementDate($startDate, $monthIncrement = 0) {

    $startingTimeStamp = $startDate->getTimestamp();
    // Get the month value of the given date:
    $monthString = date('Y-m', $startingTimeStamp);
    // Create a date string corresponding to the 1st of the give month,
    // making it safe for monthly calculations:
    $safeDateString = "first day of $monthString";
    // Increment date by given month increments:
    $incrementedDateString = "$safeDateString $monthIncrement month";
    $newTimeStamp = strtotime($incrementedDateString);
    $newDate = DateTime::createFromFormat('U', $newTimeStamp);
    return $newDate;
}


$CurrentMonth  = new DateTime();
$MonthPlusOne  = incrementDate($CurrentMonth, +2);
$MonthPlusTwo  = incrementDate($CurrentMonth, +3);
$MonthPlusThree  = incrementDate($CurrentMonth, +4);
$MonthPlusFour  = incrementDate($CurrentMonth, +5);
$MonthPlusFive  = incrementDate($CurrentMonth, +6);
$MonthPlusSix  = incrementDate($CurrentMonth, +7);
$MonthPlusSeven  = incrementDate($CurrentMonth, +8);
$MonthPlusEight  = incrementDate($CurrentMonth, +9);
$MonthPlusNine  = incrementDate($CurrentMonth, +10);
$MonthPlusTen  = incrementDate($CurrentMonth, +11);
$MonthPlusEleven = incrementDate($CurrentMonth, +12);


?>


<div id="content" class="content">
	<!-- begin page-header -->
	<h1 class="page-header">Jubileums</h1>
	<!-- end page-header -->
	
	<!-- begin row -->
	<div class="row">
		<!-- begin col-6 -->
		<div class="col-md-12">
			<div class="panel-group" id="accordion">			
			<?php 
				try {
					require('config.php'); 
					
					$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]
									,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET lc_time_names = 'nl_NL'"));  
					$sql=	"select
								  User.ID UserID
								, Data.User UserName
								, Data.Subsite
								, Data.Unit
								, DATE_FORMAT(Data.StartDate, '%d %b %Y') Startdate
								, DAY(Data.Startdate) StartDay
								, MONTH(Data.Startdate) Month
								, CASE
									-- SM bigger/equal to CM
									WHEN MONTH(Data.Startdate) >= MONTH(curdate())
										THEN MONTH(Data.Startdate) - MONTH(curdate())
									-- SM smaller to CM
									WHEN MONTH(Data.Startdate) < MONTH(curdate())
										THEN (MONTH(Data.Startdate) - MONTH(curdate())) + 12
								  END MonthOffset
								, CASE 
									WHEN MONTH(Data.Startdate) < MONTH(curdate())
										THEN YEAR(curdate())+1 - YEAR(Data.Startdate)
									WHEN MONTH(Data.Startdate) >= MONTH(curdate())
										THEN YEAR(curdate()) - YEAR(Data.Startdate)
								END NrOfYears
							from Data
							left join User
								on Data.User = User.UserName
							where Enddate = '0000-00-00'
								and YEAR(curdate()) - YEAR(Data.Startdate) > 0
							order by StartDay
							"; 
								
					$stmtCurrentMonth=$con->prepare($sql);
					$stmtCurrentMonth->execute(); 
									
					$stmtMonthPlusOne=$con->prepare($sql);
					$stmtMonthPlusOne->execute();  
									
					$stmtMonthPlusTwo=$con->prepare($sql);
					$stmtMonthPlusTwo->execute();  
									
					$stmtMonthPlusThree=$con->prepare($sql);
					$stmtMonthPlusThree->execute();  
									
					$stmtMonthPlusFour=$con->prepare($sql);
					$stmtMonthPlusFour->execute();  
									
					$stmtMonthPlusFive=$con->prepare($sql);
					$stmtMonthPlusFive->execute();  
									
					$stmtMonthPlusSix=$con->prepare($sql);
					$stmtMonthPlusSix->execute();  
									
					$stmtMonthPlusSeven=$con->prepare($sql);
					$stmtMonthPlusSeven->execute();  
									
					$stmtMonthPlusEight=$con->prepare($sql);
					$stmtMonthPlusEight->execute();  
									
					$stmtMonthPlusNine=$con->prepare($sql);
					$stmtMonthPlusNine->execute();  
									
					$stmtMonthPlusTen=$con->prepare($sql);
					$stmtMonthPlusTen->execute();  
									
					$stmtMonthPlusEleven=$con->prepare($sql);
					$stmtMonthPlusEleven->execute(); 
				
				echo '<div class="panel panel-inverse overflow-hidden">';
				echo '	<div class="panel-heading">';
				echo '		<h3 class="panel-title">';
				echo '			<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#month1">';
				echo '				<i class="fa fa-plus-circle pull-right"></i>';
				echo 				$CurrentMonth->format('F Y');
				echo '			</a>';
				echo '		</h3>';
				echo '	</div>';
				echo '	<div id="month1" class="panel-collapse collapse">';
				echo '		<div class="panel-body">';
				echo '			<div class="table-responsive">';
				echo '			<table class="table">';
				echo '				<thead>';
				echo '					<tr>';
				echo '						<th>Datum</th>';
				echo '						<th>User</th>';
				echo '						<th>Subsite</th>';
				echo '						<th>Functie</th>';
				echo '						<th>Jubileum</th>';
				echo '					</tr>';
				echo '				</thead>';
				echo '				<tbody>';	
					while($rowCurrentMonth = $stmtCurrentMonth->fetch(PDO::FETCH_ASSOC)) { 
						if ($rowCurrentMonth['MonthOffset'] == 0) {
							echo '<tr>';
							echo '<td>' . $rowCurrentMonth['Startdate'] . '</td>';
							echo '<td><a href="/user/'. $rowCurrentMonth['UserID'] .'">' . $rowCurrentMonth['UserName'] . '</a></td>';
							echo '<td>' . $rowCurrentMonth['Subsite'] . '</td>';
							echo '<td>' . $rowCurrentMonth['Unit'] . '</td>';
							echo '<td>' . $rowCurrentMonth['NrOfYears'] . ' jaar </td>';
							echo '</tr>';
						}
					}
				echo '				</tbody>';
				echo '			</table>';
				echo '		</div>';
				echo '		</div>';
				echo '	</div>';
				echo '</div>';
				
				
				echo '<div class="panel panel-inverse overflow-hidden">';
				echo '	<div class="panel-heading">';
				echo '		<h3 class="panel-title">';
				echo '			<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#month2">';
				echo '				<i class="fa fa-plus-circle pull-right"></i>';
				echo 				$MonthPlusOne->format('F Y');
				echo '			</a>';
				echo '		</h3>';
				echo '	</div>';
				echo '	<div id="month2" class="panel-collapse collapse">';
				echo '		<div class="panel-body">';
				echo '			<div class="table-responsive">';
				echo '			<table class="table">';
				echo '				<thead>';
				echo '					<tr>';
				echo '						<th>Datum</th>';
				echo '						<th>User</th>';
				echo '						<th>Subsite</th>';
				echo '						<th>Functie</th>';
				echo '						<th>Jubileum</th>';
				echo '					</tr>';
				echo '				</thead>';
				echo '				<tbody>';	
					while($rowMonthPlusOne = $stmtMonthPlusOne->fetch(PDO::FETCH_ASSOC)) { 
						if ($rowMonthPlusOne['MonthOffset'] == 1) {
							echo '<tr>';
							echo '<td>' . $rowMonthPlusOne['Startdate'] . '</td>';
							echo '<td><a href="/user/'. $rowMonthPlusOne['UserID'] .'">' . $rowMonthPlusOne['UserName'] . '</a></td>';
							echo '<td>' . $rowMonthPlusOne['Subsite'] . '</td>';
							echo '<td>' . $rowMonthPlusOne['Unit'] . '</td>';
							echo '<td>' . $rowMonthPlusOne['NrOfYears'] . ' jaar </td>';
							echo '</tr>';
						}
					}
				echo '				</tbody>';
				echo '			</table>';
				echo '		</div>';
				echo '		</div>';
				echo '	</div>';
				echo '</div>';
				
				
				echo '<div class="panel panel-inverse overflow-hidden">';
				echo '	<div class="panel-heading">';
				echo '		<h3 class="panel-title">';
				echo '			<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#month3">';
				echo '				<i class="fa fa-plus-circle pull-right"></i>';
				echo 				$MonthPlusTwo->format('F Y');
				echo '			</a>';
				echo '		</h3>';
				echo '	</div>';
				echo '	<div id="month3" class="panel-collapse collapse">';
				echo '		<div class="panel-body">';
				echo '			<div class="table-responsive">';
				echo '			<table class="table">';
				echo '				<thead>';
				echo '					<tr>';
				echo '						<th>Datum</th>';
				echo '						<th>User</th>';
				echo '						<th>Subsite</th>';
				echo '						<th>Functie</th>';
				echo '						<th>Jubileum</th>';
				echo '					</tr>';
				echo '				</thead>';
				echo '				<tbody>';	
					while($rowMonthPlusTwo = $stmtMonthPlusTwo->fetch(PDO::FETCH_ASSOC)) { 
						if ($rowMonthPlusTwo['MonthOffset'] == 2) {
							echo '<tr>';
							echo '<td>' . $rowMonthPlusTwo['Startdate'] . '</td>';
							echo '<td><a href="/user/'. $rowMonthPlusTwo['UserID'] .'">' . $rowMonthPlusTwo['UserName'] . '</a></td>';
							echo '<td>' . $rowMonthPlusTwo['Subsite'] . '</td>';
							echo '<td>' . $rowMonthPlusTwo['Unit'] . '</td>';
							echo '<td>' . $rowMonthPlusTwo['NrOfYears'] . ' jaar </td>';
							echo '</tr>';
						}
					}
				echo '				</tbody>';
				echo '			</table>';
				echo '		</div>';
				echo '		</div>';
				echo '	</div>';
				echo '</div>';
				
				
				echo '<div class="panel panel-inverse overflow-hidden">';
				echo '	<div class="panel-heading">';
				echo '		<h3 class="panel-title">';
				echo '			<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#month4">';
				echo '				<i class="fa fa-plus-circle pull-right"></i>';
				echo 				$MonthPlusThree->format('F Y');
				echo '			</a>';
				echo '		</h3>';
				echo '	</div>';
				echo '	<div id="month4" class="panel-collapse collapse">';
				echo '		<div class="panel-body">';
				echo '			<div class="table-responsive">';
				echo '			<table class="table">';
				echo '				<thead>';
				echo '					<tr>';
				echo '						<th>Datum</th>';
				echo '						<th>User</th>';
				echo '						<th>Subsite</th>';
				echo '						<th>Functie</th>';
				echo '						<th>Jubileum</th>';
				echo '					</tr>';
				echo '				</thead>';
				echo '				<tbody>';	
					while($rowMonthPlusThree = $stmtMonthPlusThree->fetch(PDO::FETCH_ASSOC)) { 
						if ($rowMonthPlusThree['MonthOffset'] == 3) {
							echo '<tr>';
							echo '<td>' . $rowMonthPlusThree['Startdate'] . '</td>';
							echo '<td><a href="/user/'. $rowMonthPlusThree['UserID'] .'">' . $rowMonthPlusThree['UserName'] . '</a></td>';
							echo '<td>' . $rowMonthPlusThree['Subsite'] . '</td>';
							echo '<td>' . $rowMonthPlusThree['Unit'] . '</td>';
							echo '<td>' . $rowMonthPlusThree['NrOfYears'] . ' jaar </td>';
							echo '</tr>';
						}
					}
				echo '				</tbody>';
				echo '			</table>';
				echo '		</div>';
				echo '		</div>';
				echo '	</div>';
				echo '</div>';
				
				
				echo '<div class="panel panel-inverse overflow-hidden">';
				echo '	<div class="panel-heading">';
				echo '		<h3 class="panel-title">';
				echo '			<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#month5">';
				echo '				<i class="fa fa-plus-circle pull-right"></i>';
				echo 				$MonthPlusFour->format('F Y');
				echo '			</a>';
				echo '		</h3>';
				echo '	</div>';
				echo '	<div id="month5" class="panel-collapse collapse">';
				echo '		<div class="panel-body">';
				echo '			<div class="table-responsive">';
				echo '			<table class="table">';
				echo '				<thead>';
				echo '					<tr>';
				echo '						<th>Datum</th>';
				echo '						<th>User</th>';
				echo '						<th>Subsite</th>';
				echo '						<th>Functie</th>';
				echo '						<th>Jubileum</th>';
				echo '					</tr>';
				echo '				</thead>';
				echo '				<tbody>';	
					while($rowMonthPlusFour = $stmtMonthPlusFour->fetch(PDO::FETCH_ASSOC)) { 
						if ($rowMonthPlusFour['MonthOffset'] == 4) {
							echo '<tr>';
							echo '<td>' . $rowMonthPlusFour['Startdate'] . '</td>';
							echo '<td><a href="/user/'. $rowMonthPlusFour['UserID'] .'">' . $rowMonthPlusFour['UserName'] . '</a></td>';
							echo '<td>' . $rowMonthPlusFour['Subsite'] . '</td>';
							echo '<td>' . $rowMonthPlusFour['Unit'] . '</td>';
							echo '<td>' . $rowMonthPlusFour['NrOfYears'] . ' jaar </td>';
							echo '</tr>';
						}
					}
				echo '				</tbody>';
				echo '			</table>';
				echo '		</div>';
				echo '		</div>';
				echo '	</div>';
				echo '</div>';
				
				
				echo '<div class="panel panel-inverse overflow-hidden">';
				echo '	<div class="panel-heading">';
				echo '		<h3 class="panel-title">';
				echo '			<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#month6">';
				echo '				<i class="fa fa-plus-circle pull-right"></i>';
				echo 				$MonthPlusFive->format('F Y');
				echo '			</a>';
				echo '		</h3>';
				echo '	</div>';
				echo '	<div id="month6" class="panel-collapse collapse">';
				echo '		<div class="panel-body">';
				echo '			<div class="table-responsive">';
				echo '			<table class="table">';
				echo '				<thead>';
				echo '					<tr>';
				echo '						<th>Datum</th>';
				echo '						<th>User</th>';
				echo '						<th>Subsite</th>';
				echo '						<th>Functie</th>';
				echo '						<th>Jubileum</th>';
				echo '					</tr>';
				echo '				</thead>';
				echo '				<tbody>';	
					while($rowMonthPlusFive = $stmtMonthPlusFive->fetch(PDO::FETCH_ASSOC)) { 
						if ($rowMonthPlusFive['MonthOffset'] == 5) {
							echo '<tr>';
							echo '<td>' . $rowMonthPlusFive['Startdate'] . '</td>';
							echo '<td><a href="/user/'. $rowMonthPlusFive['UserID'] .'">' . $rowMonthPlusFive['UserName'] . '</a></td>';
							echo '<td>' . $rowMonthPlusFive['Subsite'] . '</td>';
							echo '<td>' . $rowMonthPlusFive['Unit'] . '</td>';
							echo '<td>' . $rowMonthPlusFive['NrOfYears'] . ' jaar </td>';
							echo '</tr>';
						}
					}
				echo '				</tbody>';
				echo '			</table>';
				echo '		</div>';
				echo '		</div>';
				echo '	</div>';
				echo '</div>';				
				
				
				echo '<div class="panel panel-inverse overflow-hidden">';
				echo '	<div class="panel-heading">';
				echo '		<h3 class="panel-title">';
				echo '			<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#month7">';
				echo '				<i class="fa fa-plus-circle pull-right"></i>';
				echo 				$MonthPlusSix->format('F Y');
				echo '			</a>';
				echo '		</h3>';
				echo '	</div>';
				echo '	<div id="month7" class="panel-collapse collapse">';
				echo '		<div class="panel-body">';
				echo '			<div class="table-responsive">';
				echo '			<table class="table">';
				echo '				<thead>';
				echo '					<tr>';
				echo '						<th>Datum</th>';
				echo '						<th>User</th>';
				echo '						<th>Subsite</th>';
				echo '						<th>Functie</th>';
				echo '						<th>Jubileum</th>';
				echo '					</tr>';
				echo '				</thead>';
				echo '				<tbody>';	
					while($rowMonthPlusSix = $stmtMonthPlusSix->fetch(PDO::FETCH_ASSOC)) { 
						if ($rowMonthPlusSix['MonthOffset'] == 6) {
							echo '<tr>';
							echo '<td>' . $rowMonthPlusSix['Startdate'] . '</td>';
							echo '<td><a href="/user/'. $rowMonthPlusSix['UserID'] .'">' . $rowMonthPlusSix['UserName'] . '</a></td>';
							echo '<td>' . $rowMonthPlusSix['Subsite'] . '</td>';
							echo '<td>' . $rowMonthPlusSix['Unit'] . '</td>';
							echo '<td>' . $rowMonthPlusSix['NrOfYears'] . ' jaar </td>';
							echo '</tr>';
						}
					}
				echo '				</tbody>';
				echo '			</table>';
				echo '		</div>';
				echo '		</div>';
				echo '	</div>';
				echo '</div>';				
				
				
				echo '<div class="panel panel-inverse overflow-hidden">';
				echo '	<div class="panel-heading">';
				echo '		<h3 class="panel-title">';
				echo '			<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#month8">';
				echo '				<i class="fa fa-plus-circle pull-right"></i>';
				echo 				$MonthPlusSeven->format('F Y');
				echo '			</a>';
				echo '		</h3>';
				echo '	</div>';
				echo '	<div id="month8" class="panel-collapse collapse">';
				echo '		<div class="panel-body">';
				echo '			<div class="table-responsive">';
				echo '			<table class="table">';
				echo '				<thead>';
				echo '					<tr>';
				echo '						<th>Datum</th>';
				echo '						<th>User</th>';
				echo '						<th>Subsite</th>';
				echo '						<th>Functie</th>';
				echo '						<th>Jubileum</th>';
				echo '					</tr>';
				echo '				</thead>';
				echo '				<tbody>';	
					while($rowMonthPlusSeven = $stmtMonthPlusSeven->fetch(PDO::FETCH_ASSOC)) { 
						if ($rowMonthPlusSeven['MonthOffset'] == 7) {
							echo '<tr>';
							echo '<td>' . $rowMonthPlusSeven['Startdate'] . '</td>';
							echo '<td><a href="/user/'. $rowMonthPlusSeven['UserID'] .'">' . $rowMonthPlusSeven['UserName'] . '</a></td>';
							echo '<td>' . $rowMonthPlusSeven['Subsite'] . '</td>';
							echo '<td>' . $rowMonthPlusSeven['Unit'] . '</td>';
							echo '<td>' . $rowMonthPlusSeven['NrOfYears'] . ' jaar </td>';
							echo '</tr>';
						}
					}
				echo '				</tbody>';
				echo '			</table>';
				echo '		</div>';
				echo '		</div>';
				echo '	</div>';
				echo '</div>';												
				
				
				echo '<div class="panel panel-inverse overflow-hidden">';
				echo '	<div class="panel-heading">';
				echo '		<h3 class="panel-title">';
				echo '			<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#month9">';
				echo '				<i class="fa fa-plus-circle pull-right"></i>';
				echo 				$MonthPlusEight->format('F Y');
				echo '			</a>';
				echo '		</h3>';
				echo '	</div>';
				echo '	<div id="month9" class="panel-collapse collapse">';
				echo '		<div class="panel-body">';
				echo '			<div class="table-responsive">';
				echo '			<table class="table">';
				echo '				<thead>';
				echo '					<tr>';
				echo '						<th>Datum</th>';
				echo '						<th>User</th>';
				echo '						<th>Subsite</th>';
				echo '						<th>Functie</th>';
				echo '						<th>Jubileum</th>';
				echo '					</tr>';
				echo '				</thead>';
				echo '				<tbody>';	
					while($rowMonthPlusEight = $stmtMonthPlusEight->fetch(PDO::FETCH_ASSOC)) { 
						if ($rowMonthPlusEight['MonthOffset'] == 8) {
							echo '<tr>';
							echo '<td>' . $rowMonthPlusEight['Startdate'] . '</td>';
							echo '<td><a href="/user/'. $rowMonthPlusEight['UserID'] .'">' . $rowMonthPlusEight['UserName'] . '</a></td>';
							echo '<td>' . $rowMonthPlusEight['Subsite'] . '</td>';
							echo '<td>' . $rowMonthPlusEight['Unit'] . '</td>';
							echo '<td>' . $rowMonthPlusEight['NrOfYears'] . ' jaar </td>';
							echo '</tr>';
						}
					}
				echo '				</tbody>';
				echo '			</table>';
				echo '		</div>';
				echo '		</div>';
				echo '	</div>';
				echo '</div>';				
				
				
				echo '<div class="panel panel-inverse overflow-hidden">';
				echo '	<div class="panel-heading">';
				echo '		<h3 class="panel-title">';
				echo '			<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#month10">';
				echo '				<i class="fa fa-plus-circle pull-right"></i>';
				echo 				$MonthPlusNine->format('F Y');
				echo '			</a>';
				echo '		</h3>';
				echo '	</div>';
				echo '	<div id="month10" class="panel-collapse collapse">';
				echo '		<div class="panel-body">';
				echo '			<div class="table-responsive">';
				echo '			<table class="table">';
				echo '				<thead>';
				echo '					<tr>';
				echo '						<th>Datum</th>';
				echo '						<th>User</th>';
				echo '						<th>Subsite</th>';
				echo '						<th>Functie</th>';
				echo '						<th>Jubileum</th>';
				echo '					</tr>';
				echo '				</thead>';
				echo '				<tbody>';	
					while($rowMonthPlusNine = $stmtMonthPlusNine->fetch(PDO::FETCH_ASSOC)) { 
						if ($rowMonthPlusNine['MonthOffset'] == 9) {
							echo '<tr>';
							echo '<td>' . $rowMonthPlusNine['Startdate'] . '</td>';
							echo '<td><a href="/user/'. $rowMonthPlusNine['UserID'] .'">' . $rowMonthPlusNine['UserName'] . '</a></td>';
							echo '<td>' . $rowMonthPlusNine['Subsite'] . '</td>';
							echo '<td>' . $rowMonthPlusNine['Unit'] . '</td>';
							echo '<td>' . $rowMonthPlusNine['NrOfYears'] . ' jaar </td>';
							echo '</tr>';
						}
					}
				echo '				</tbody>';
				echo '			</table>';
				echo '		</div>';
				echo '		</div>';
				echo '	</div>';
				echo '</div>';				
				
				
				echo '<div class="panel panel-inverse overflow-hidden">';
				echo '	<div class="panel-heading">';
				echo '		<h3 class="panel-title">';
				echo '			<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#month11">';
				echo '				<i class="fa fa-plus-circle pull-right"></i>';
				echo 				$MonthPlusTen->format('F Y');
				echo '			</a>';
				echo '		</h3>';
				echo '	</div>';
				echo '	<div id="month11" class="panel-collapse collapse">';
				echo '		<div class="panel-body">';
				echo '			<div class="table-responsive">';
				echo '			<table class="table">';
				echo '				<thead>';
				echo '					<tr>';
				echo '						<th>Datum</th>';
				echo '						<th>User</th>';
				echo '						<th>Subsite</th>';
				echo '						<th>Functie</th>';
				echo '						<th>Jubileum</th>';
				echo '					</tr>';
				echo '				</thead>';
				echo '				<tbody>';	
					while($rowMonthPlusTen = $stmtMonthPlusTen->fetch(PDO::FETCH_ASSOC)) { 
						if ($rowMonthPlusTen['MonthOffset'] == 10) {
							echo '<tr>';
							echo '<td>' . $rowMonthPlusTen['Startdate'] . '</td>';
							echo '<td><a href="/user/'. $rowMonthPlusTen['UserID'] .'">' . $rowMonthPlusTen['UserName'] . '</a></td>';
							echo '<td>' . $rowMonthPlusTen['Subsite'] . '</td>';
							echo '<td>' . $rowMonthPlusTen['Unit'] . '</td>';
							echo '<td>' . $rowMonthPlusTen['NrOfYears'] . ' jaar </td>';
							echo '</tr>';
						}
					}
				echo '				</tbody>';
				echo '			</table>';
				echo '		</div>';
				echo '		</div>';
				echo '	</div>';
				echo '</div>';				
				
				
				echo '<div class="panel panel-inverse overflow-hidden">';
				echo '	<div class="panel-heading">';
				echo '		<h3 class="panel-title">';
				echo '			<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#month12">';
				echo '				<i class="fa fa-plus-circle pull-right"></i>';
				echo 				$MonthPlusEleven->format('F Y');
				echo '			</a>';
				echo '		</h3>';
				echo '	</div>';
				echo '	<div id="month12" class="panel-collapse collapse">';
				echo '		<div class="panel-body">';
				echo '			<div class="table-responsive">';
				echo '			<table class="table">';
				echo '				<thead>';
				echo '					<tr>';
				echo '						<th>Datum</th>';
				echo '						<th>User</th>';
				echo '						<th>Subsite</th>';
				echo '						<th>Functie</th>';
				echo '						<th>Jubileum</th>';
				echo '					</tr>';
				echo '				</thead>';
				echo '				<tbody>';	
					while($rowMonthPlusEleven = $stmtMonthPlusEleven->fetch(PDO::FETCH_ASSOC)) { 
						if ($rowMonthPlusEleven['MonthOffset'] == 11) {
							echo '<tr>';
							echo '<td>' . $rowMonthPlusEleven['Startdate'] . '</td>';
							echo '<td><a href="/user/'. $rowMonthPlusEleven['UserID'] .'">' . $rowMonthPlusEleven['UserName'] . '</a></td>';
							echo '<td>' . $rowMonthPlusEleven['Subsite'] . '</td>';
							echo '<td>' . $rowMonthPlusEleven['Unit'] . '</td>';
							echo '<td>' . $rowMonthPlusEleven['NrOfYears'] . ' jaar </td>';
							echo '</tr>';
						}
					}
				echo '				</tbody>';
				echo '			</table>';
				echo '		</div>';
				echo '		</div>';
				echo '	</div>';
				echo '</div>';				
																								
				} 
				
				// Error handeling
				catch(PDOException $e) {
					echo '<pre>';
					echo 'Regel: '.$e->getLine(). '<br />';
					echo 'Bestand: '.$e->getFile(). '<br />'; 
					echo 'Foutmelding: '.$e->getMessage();
					echo '</pre>'; 
				}				
				?>
			</div>
		</div>
		<!-- end col-6 -->
	</div>
	<!-- end row -->
</div>