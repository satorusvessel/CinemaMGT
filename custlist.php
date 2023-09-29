<?php include ('adminheader.php') ?>
<!DOCTYPE html> 
<head>
<link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">
</head>
<style>
	td img{
		background-color:black;
		width: 100px;
		height: 75px;
		margin:auto;
	}
</style>
<body style="background-color:black">
<?php include ('connect.php');
$result =mysqli_query($con,"SELECT * FROM register"); ?>
<div class="container-fluid" >
	
	<div class="row"  >
		<div class="card col-md-12 mt-3" style="background-color:black">
			<div class="card-body" style="background-color:black">
				<table class="table table-bordered"  style="background-color:#0865bd">
					<thead>
						<tr>
							<th class="text-center">No.</th>
							<th class="text-center">ACCOUNT</th>
							<th class="text-center">BALANCE</th>
                            <th class="text-center">MANAGE</th>
						
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 1;
						$movie = $con->query("SELECT * FROM register ");
						while($row=$movie->fetch_assoc()){
						 ?>
						 <tr>
						 	<td><?php echo $i++ ?></td>
						 	
						 	<td><?php echo ucwords($row['email']) ?></td>
						 	<td> <?php echo $row['balance'] ?> </td>
							
						 	
						 	
						 	<td>
						 		<center>
								<a class="btn btn-warning" href="deposit.php?ID=<?php echo $row["ID"];?>"> DEPOSITT </a>
                        
                                
								</center>
						 	</td>
						 </tr>
						<?php } ?>
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