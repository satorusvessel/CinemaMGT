<?php
 // PHP Google Charts
 include('connect.php');
 include('header2.php');
?>
<!DOCTYPE HTML>
<html>
<head>
 <meta charset="utf-8">
 <title>
 Create Google Charts - onlinecode 
 </title>
 <!-- js of google of chart --> 
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
 <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {

 var data_val = google.visualization.arrayToDataTable([
 ['Browser', 'Visits'],
 <?php 
 $select_query = "SELECT count(ID) AS count, movie_ID FROM reservation GROUP BY movie_ID";

 $query_result = mysqli_query($con,$select_query);
 while($row_val = mysqli_fetch_array($query_result)){

   

                            $mv = $row_val['movie_ID'];
							$movies = "SELECT title FROM `movie_table` WHERE ID = '$mv' ";
							$getmovie = $con->query($movies);
							$moviename=$getmovie->fetch_assoc();

                            
                        

 echo "['".$moviename['title']."',".$row_val['count']."],";
 }
 ?>
 ]);

 var options_val = {
 title: 'Customers per movie' 
 };

 var chart_val = new google.visualization.PieChart(document.getElementById('piechart'));

 chart_val.draw(data_val, options_val);
 }
 </script>
 <link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">
<link rel="stylesheet" href="divstylee.css">
<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body style="background-color:black">
 <h2 style="color:white">Pie Chart - Movie reservation report<in/h2>
 <div id="piechart" style="position:absolute;left:300px;width: 910px; height: 505px;"></div>

 <a type="button" class="btn btn-warning" href="adminhome.php"  style="position:absolute;left:650px;top:550px" >back to dashboard</a>
</body>
</html>