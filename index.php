<html>
<head>
  <!--Load the AJAX API-->
  <script type="text/javascript" src="jsapi"></script>
  <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
  <script type="text/javascript">

  // Load the Visualization API and the piechart,table package.
  google.load('visualization', '1', {'packages':['corechart','table','timeline']});

  function drawItems(num) {
    var jsonPieChartData = $.ajax({
      url: "getpiechartdata.php",
      data: "q="+num,
      dataType:"json",
      async: false
    }).responseText;

    var jsonTableData = $.ajax({
      url: "gettabledata.php",
      data: "q="+num,
      dataType:"json",
      async: false
    }).responseText;

	var jsonTimelineData = $.ajax({
      url: "gettimelinedata.php",
      data: "q="+num,
      dataType:"json",
      async: false
    }).responseText;

    // Create our data table out of JSON data loaded from server.
    var piechartdata = new google.visualization.DataTable(jsonPieChartData);
    var tabledata = new google.visualization.DataTable(jsonTableData);
    var timelinedata = new google.visualization.DataTable(jsonTimelineData);
	
    // Instantiate and draw our pie chart, passing in some options.
    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
    chart.draw(piechartdata, {
      width: 700,
      height: 350,
      chartArea: { left:"5%",top:"5%",width:"90%",height:"90%" }
    });

    // Instantiate and draw our table, passing in some options.
    var table = new google.visualization.Table(document.getElementById('table_div'));
    table.draw(tabledata, {
      width: 700,
      chartArea: { left:"5%",top:"5%",width:"90%",height:"90%" },
	  showRowNumber: true,
	  alternatingRowStyle: true
    });
	
	// Instantiate Timeline
	var chart = new google.visualization.Timeline(document.getElementById('timeline_div'));
	chart.draw(timelinedata, {
      width: 700,
      chartArea: { left:"5%",top:"5%",width:"90%",height:"90%" }
    });


  }

  </script>
</head>
<body>
  <form>
  <select name="users" onchange="drawItems(this.value)">
  <option value="">Gebruiker:</option>
  <?php
    include 'db.php';
    // Make a MySQL Connection
    $con = mysql_connect($dbserver, $dbuser, $dbpass) or die(mysql_error());
    mysql_select_db($dbname) or die(mysql_error());
    // Create a Query
    $sql_query = "SELECT PK_Gebruiker, Gebruikersnaam FROM Gebruiker ORDER BY Gebruikersnaam ASC";
    // Execute query
    $result = mysql_query($sql_query) or die(mysql_error());
    while ($row = mysql_fetch_array($result)){
    echo '<option value='. $row['PK_Gebruiker'] . '>'. $row['Gebruikersnaam'] . '</option>';
    }
    mysql_close($con);
  ?>
  </select>
  </form>
  <div id="table_div"></div>
  <br /><br /><br />
  <div id="chart_div"></div>
  <br /><br /><br />
  <div id="timeline_div"></div>
</body>
</html>