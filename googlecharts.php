<?php
 // PHP Google Charts
 include ('connect.php');
 include('header2.php');
?>
<!DOCTYPE HTML>
<html>
<head>
 <meta charset="utf-8">
 <title>
REPORT
 </title>
 <!-- js of google of chart --> 
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
 <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {
 var data_val = google.visualization.arrayToDataTable([

 ['Date', 'Reservations'],
 <?php 
 $select_query = "SELECT count(ID) AS count, show_date FROM reservation GROUP BY show_date ORDER BY ID";

 $query_result = mysqli_query($con,$select_query);
 while($row_val = mysqli_fetch_array($query_result)){

 echo "['".$row_val['show_date']."',".$row_val['count']."],";
 }
 ?>
 
 ]);

 var options_val = {
 title: 'Date wise reservation counts'
 };
 var chart_val = new google.visualization.ColumnChart(document.getElementById("columnchart"));
 chart_val.draw(data_val, options_val);
 }
 </script>
</head>
<body style="background-color:black">
 <h1  style="color:white" >Column Chart - Reservation count date wise</h1>
 <div id="columnchart" style="position:absolute;left:300px;width: 910px; height: 510px;"></div>
 <a type="button" class="btn btn-warning" href="adminhome.php"  style="position:absolute;left:650px;top:640px" >back to dashboard</a>
</body>
</html>