<?php 
 
include ('connect.php'); 

session_start();
error_reporting(E_ERROR | E_PARSE );


/*$moviesr = "SELECT email FROM `register` WHERE email = '". $_SESSION['email']."' ";
$getm= $con->query($moviesr);
$customername=$getm->fetch_assoc(); */

$bk=mysqli_query($con,"select * from reservation where register_ID='".$_SESSION['userid']."'");
				if(mysqli_num_rows($bk)){
					?>
                    <html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">
<link rel="stylesheet" href="divstylee.css">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  

 </head>
<title> group of cards</title>
<body style="overflow-x:none; background-color:black" >
<?php include ('header2.php'); ?>

<div> <br> <h1 style="color:white"> BOOKING HISTORY </h1></div>
<div class="container-fluid"  >
	<div class="row" style="background-color:black" >
		<div class="col-md-12" >
			
		</div>
	</div>
	<div class="row" >
		<div class="card col-md-12 mt-3" style="background-color:black">
			<div class="card-body" >
				<table class="table table-bordered"  style="background-color:#0865bd">
					<thead>
						
						<tr>
							<th class="text-center">No.</th>
							<th class="text-center">MOVIE</th>
							<th class="text-center">SEAT TYPE</th>
							<th class="text-center">SEAT NO.</th>
							<th class="text-center">SHOW DATE</th>
							<th class="text-center">TICEKT NUMBER</th>
                            <th class="text-center">STATUS</th>
						
					
							
                            </tr>
					</thead>
					<tbody>
						<?php
                        $i = 1;
						while($bkg=mysqli_fetch_array($bk))
						{
							/*$m=mysqli_query($con,"select * from tbl_movie where movie_id=(select movie_id from tbl_shows where s_id='".$bkg['show_id']."')");
							$mov=mysqli_fetch_array($m); */
							$s=mysqli_query($con,"select * from seat where ID='".$bkg['seat_ID']."'");
							$srn=mysqli_fetch_array($s);
                           
                            $tt=mysqli_query($con,"select * from movie_table where ID='".$bkg['movie_ID']."'");
							$thr=mysqli_fetch_array($tt);

                            $seatn=mysqli_query($con,"select * from seat_n where ID='".$bkg['seat_n_ID']."'");
							$sn=mysqli_fetch_array($seatn);

                            $sdate=mysqli_query($con,"select * from reservation where movie_ID='".$bkg['title']."'");
							$sd=mysqli_fetch_array($sdate);

                            $today=date('Y-m-d H:i:s');
                            $expire=date('Y-m-d H:i:s', strtotime($bkg['show_date']. '+1 days'));
                         ?>
                        <tr> 
                               <td><?php echo $i++ ?></td>
                               <td>
									<?php echo $thr['title'];?>
								</td>
								<td>
									<?php echo $srn['seat_type'];?>
								</td>
								
                                <td>
									<?php echo $sn['seat_number'];?>
								</td>
                                <td>
									<?php echo $bkg['show_date'];?>
									
								</td>
								<td>#ASATT<?php echo $bkg['ID'];?>
								</td>
                                <td>
									<?php  if ($today>=$expire) 
									{
										?>
										<i class="glyphicon glyphicon-ok" style="color:black;font-weight:bold"> Due date passed</i>
										<?php
									}
									else
									{?>
									
                                    <a class="btn btn-danger" href="newrefund.php?ID=<?php echo $bkg['ID'];?>"> REFUND </a> <h10 style="color:black;font-weight:bold">(20% penality) </h10>
									<?php
									}
									?>
								</td>
							</tr>
							<?php
						}
						?></tbody>
					</table>
					<?php
				}
?>
</body>
</html>
