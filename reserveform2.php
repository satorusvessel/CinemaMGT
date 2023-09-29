 
 <?php
 include 'connect.php';

session_start();
error_reporting(E_ERROR | E_PARSE );


 $result =mysqli_query($con,"SELECT * FROM movie_table WHERE ID='" . $_GET['ID'] ."'");
 $row= mysqli_fetch_array($result);
 
 
     ?>




<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	 <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">
<link rel="stylesheet" href="divstylee.css">
<link rel="stylesheet" href="hover22.css">
 </head>
 <body style="background-color:black">

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
    <img src="assets/img/showcases/showcase-2/pngwing.com2.png"style="width:6%;height:auto"/>
        <a href="#" class="navbar-brand">DANY CINEMA</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="newhome.php" class="nav-item nav-link active">Home</a>
         
                
            </div>
            <div class="navbar-nav ms-auto"> 
                             	
                
            </div>
       
        </div>
        
    </div>

    
 
  <?php if($_SESSION["email"]){
   
    ?>
 
<p style="color:white"><?php echo $_SESSION["email"]; ?></p><div class="spinner-grow text-success"> </div>.<a class="btn btn-primary me-md-2" href="logout.php"  tite="logout"> LOGOUT </a>
<?php
   } else echo" "  ?>
  
   


</nav>
 
 <header class="masthead">
 	<div class="container pt-5">
 		<div class="col-lg-12">
 			<div class="row">
 				<div class="col-md-4">
				
				 <img src="upload/seatplan.jpg" class="reserve-img" style="width: 355px;"> 
				<!-- <?php  //echo '<img src=upload/'.$row['imagee'].' class="reserve-img" > '; ?> -->
				 

 				</div>
 				<div class="col-md-8">
 					<div class="card bg-primary">
 						<div class="card-body text-white">
 							<h3><b><?php echo $row['title']??''; ?></b></h3>
 							<hr>
 							<p class=""><small><b>Description: </b><i><?php echo $row['descriptionn'] ?></i></small></p>
 							<p class=""><small><b>Duration: </b><i><?php echo $row['length_'] ?></i></small></p>
							 <p class=""><large><b>show time: </b><i><?php echo $row['show_time'] ?> AM</i></large></p>
 						</div>
 					</div>
 					<div class="card bg-light mt-2">
 						<div class="card-body">
 							<h4>Reserve your seat Here</h4>
 							<form action="reserve3.php" method="POST" enctype="multipart/form-data">
							 <input type="hidden" name="movie_ID" value="<?php echo $_GET['ID'] ?>">
							 
					
  <table>
	  
   <?php 
   $schedule = "SELECT * FROM theatre"; 
   $schedule_run = mysqli_query($con,$schedule);
  if(mysqli_num_rows($schedule_run)>0)
  {
?>


    <td><select name="theatre_ID"  class="form-control" required>
		<option value=""> choose your cinema hall </option>
		<?php
       foreach( $schedule_run as $row)
           {

		?>
		<option value=" <?php echo $row['ID']; ?>"> <?php echo $row['name']; ?> </option>
		<?php 
           }
		?>
</select>
	</td>
		
	 
	 <?php
  } 
  else
  {
	echo "<script> alert('no data avaliable !!');
	window.location.href='div.php';
	</script>";  
	exit() ; 
  }
 
   
   ?>

<?php 
   $schedul = "SELECT * FROM seat"; 
   $schedul_run = mysqli_query($con,$schedul);
  if(mysqli_num_rows($schedul_run)>0)
  {
?>


    <td><select name="seat_ID"  class="form-control" required>
		<option value=""> choose screen </option>
		<?php
       foreach( $schedul_run as $row)
           {

		?>
		<option value=" <?php echo $row['ID']; ?>"> <?php echo $row['seat_type']; ?> </option>
		<?php 
           }
		?>
</select>
	</td>
		
	 
	 <?php
  } 
  else
  {
	  echo "no data available";
  }
 
   
   ?>




<?php 
   $schedul = "SELECT * FROM seat_n"; 
   $schedul_run = mysqli_query($con,$schedul);
  if(mysqli_num_rows($schedul_run)>0)
  {
?>


    <td><select name="seat_n_ID"  class="form-control" required>
		<option value="">   choose seat number </option>
		<?php
       foreach( $schedul_run as $row)
           {

		?>
		<option value=" <?php echo $row['ID']; ?>"> <?php echo $row['seat_number']; ?> </option>
		<?php 
           }
		?>
</select>
	</td>
		
	 
	 <?php
  } 
  else
  {
	  echo "no data available";
  }
 
   
   ?>



   <tr >
    
    <td><input class="form-control" type="text" name="namee" placeholder="enter name" required></td>
   </tr>
   <tr>
  
    <td><input class="form-control" type="text" name="phone_no" placeholder="enter phone number" required></td>
	<tr>

    <td><input id="date_picker" class="form-control" type="date" name="show_date" required></td>
   </tr>
   <input type="hidden" name="" value="<?php echo $_SESSION['ID'];?>">
   
   </tr>

   
   <tr>
    <td><input type="submit" value="Reserve" name="submit"></td>

	
   </tr>
  </table>
 </form>

 						</div>
						 
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
</header>
                                            
                                        


<script language="javascript">
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        $('#date_picker').attr('min',today);


   src="bootstrap-5.1.3-dist\js\bootstrap.min.js">
	$('[name="ts_id"]').change(function(){
		$.ajax({
			url:'manage_reserve.php?id='+$(this).val()+'&mid=<?php echo $_GET['id'] ?>',
			success:function(resp){
				$('#display-other').html(resp)
			}
		})
	})
	$(document).ready(function(){
		$('#save-reserve').submit(function(){
			$('#save-reserve button').attr('disabled',true).html("Saving...")
			$.ajax({
				url:'admin/ajax.php?action=save_reserve',
				method:'POST',
				data:$(this).serialize(),
				success:function(resp){
					if(resp == 1){
						alert("Reservartion successfully saved");
						location.replace('index.php')
					}
				}
			})
		})
	})
</script>
</body>
</html>