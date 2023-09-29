<?php include ('adminheader.php');
 include ('connect.php'); ?>


<!DOCTYPE html> 
<head>
<link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">
</head>
<style>
	td img{
		width: 50px;
		height: 75px;
		margin:auto;
	}
</style>
<body style="background-color:black">
<?php
$result =mysqli_query($con,"SELECT * FROM reservation"); ?>
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
							<th class="text-center">USER</th>
							<th class="text-center">THEATRE</th>
							<th class="text-center">SCREEN</th>
							<th class="text-center">MOVIE</th>
							<th class="text-center">Seat No.</th>
							<th class="text-center">NAME</th>
							<th class="text-center">Reservation Date</th>
							<th class="text-center">PHONE NO.</th>
							<th class="text-center">STATUS </th>
                            <th class="text-center">Manage</th>
							
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 1;
						$movie = $con->query("SELECT * FROM reservation ");
						while($row=$movie->fetch_assoc()){
							$tr = $row['theatre_ID'];
							$theatre = "SELECT name FROM `theatre` WHERE ID = '$tr' ";
							$getheatre = $con->query($theatre);
							$tname=$getheatre->fetch_assoc();

							$st = $row['seat_ID'];
							$seat = "SELECT seat_type FROM `seat` WHERE ID = '$st' ";
							$getseat = $con->query($seat);
							$sname=$getseat->fetch_assoc();

							$mv = $row['movie_ID'];
							$movies = "SELECT title FROM `movie_table` WHERE ID = '$mv' ";
							$getmovie = $con->query($movies);
							$moviename=$getmovie->fetch_assoc();

							
							$mvr = $row['register_ID'];
							$moviesr = "SELECT email FROM `register` WHERE ID = '$mvr' ";
							$getm= $con->query($moviesr);
							$customername=$getm->fetch_assoc();

							$today=date('Y-m-d H:i:s');
       $expire=date('Y-m-d H:i:s', strtotime($row['show_date']. '+0 days'));
	   if ($today>=$expire){
		
       $con->query("update `reservation` set status='Expired' where ID='".$row['ID']."'");
  
      }

    else{ $con->query("update `reservation` set status='Ongoing'  where ID='".$row['ID']."'");
  
  }
						
						 ?>
						 <tr>
						 	<td><?php echo $i++ ?></td>
							 <td><?php echo $customername['email']?></td>
						 	<td><?php echo $tname['name'] ?></td>
							
							 <td><?php echo $sname['seat_type'] ?></td>
							  <td><?php echo $moviename['title'] ?></td>
							 <td><?php echo $row['seat_n_ID'] ?></td>
						 	<td><?php echo ucwords($row['namee']) ?></td>
							 <td> <?php echo $row['show_date'] ?> </td>
						 	<td> <?php echo $row['phone_no'] ?> </td>
							 <td><?php echo $row['status']; ?></td>
						 	
						 	
						 	<td>
						 		<center>
							
                        
                                <a class="btn btn-danger" href="deletecust.php?ID=<?php echo $row["ID"];?>"> Delete </a>  
								</center>
						 	</td>
						 </tr>
						<?php 
						} 
						
					
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<script>
	$('#new_movie').click(function(){
		uni_modal('New Movie','manage_movie.php');
	})
	$('.edit_movie').click(function(){
		uni_modal('Edit Movie','manage_movie.php?id='+$(this).attr('data-id'));
	})
	$('.delete_movie').click(function(){
		_conf('Are you sure to delete this data?','delete_movie' , [$(this).attr('data-id')])
	})

	function delete_movie($id=''){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_movie',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp ==1){
					alert_toast("Data successfully deleted",'success');
					setTimeout(function(){
						location.reload()
					},1500)
				}
			}
		})
	}
</script>
</body>
</html>