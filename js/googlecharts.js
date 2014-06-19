// Load the Visualization API and the piechart,table package.
google.load('visualization', '1', {'packages': ['corechart', 'table', 'timeline']});

function drawItems(num) {
	var jsonPieChartData = $.ajax({
		url: "content/getchartdata/user-piechart.php",
		data: "q=" + num,
		dataType: "json",
		async: false
	}).responseText;

	var jsonTableData = $.ajax({
		url: "content/getchartdata/user-table.php",
		data: "q=" + num,
		dataType: "json",
		async: false
	}).responseText;

	var jsonTimelineData;
	$.ajax({
		url: "content/getchartdata/user-timeline.php",
		dataType: "JSON",
		async: false,
		data: {
			user: num
		},
		success: function(callback) {
			jsonTimelineData = callback;
		}
	});
	
	// Create our data table out of JSON data loaded from server.
	var piechartdata = new google.visualization.DataTable(jsonPieChartData);
	var tabledata = new google.visualization.DataTable(jsonTableData);

	// Instantiate and draw our pie chart, passing in some options.
	var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
	chart.draw(piechartdata, {
		width: 700,
		height: 350,
		chartArea: { left: "5%",  top: "5%", width: "90%", height: "90%" }
	});

	// Instantiate and draw our table, passing in some options.
	var table = new google.visualization.Table(document.getElementById('table_div'));
	table.draw(tabledata, {
		width: 700,
		chartArea: { left: "5%", top: "5%", width: "90%", height: "90%" },
		showRowNumber: true,
		alternatingRowStyle: true
	});

	// Instantiate Timeline
	var container = document.getElementById('timeline_div');
	var chart = new google.visualization.Timeline(container);
	var dataTable = new google.visualization.DataTable();
	dataTable.addColumn({ type: 'string', id: 'Rol' });
	dataTable.addColumn({ type: 'number', id: 'Start' });
	dataTable.addColumn({ type: 'number', id: 'End' });
	dataTable.addRows(jsonTimelineData);
	chart.draw(dataTable,{width: 700});
}