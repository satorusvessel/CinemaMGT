<?php
	 require_once 'connect.php';
     include("header2.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Search results</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">
<link rel="stylesheet" href="divstylee.css">
<link rel="stylesheet" href="hover22.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="overflow-x:none; background-color:black" >
<?php
	$query = $_GET['query']; 
	// gets value sent over search form
	
	$min_length = 3;
	// you can set minimum length of the query if you want
	
	if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
		
		$query = htmlspecialchars($query); 
		// changes characters used in html to their equivalents, for example: < to &gt;
		
		//$query = mysqli_real_escape_string($query);
		// makes sure nobody uses SQL injection
		
		$raw_results = mysqli_query($con,"SELECT * FROM movie_table
			WHERE (`title` LIKE '%".$query."%') OR (`descriptionn` LIKE '%".$query."%')") or die(mysql_error());
			
		// * means that it selects all fields, you can also write: `id`, `title`, `text`
		// articles is the name of our table
		
		// '%$query%' is what we're looking for, % means anything, for example if $query is Hello
		// it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
		// or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
		
		if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
			
			while($results = mysqli_fetch_array($raw_results)){
			// $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
			echo "<p><h3 style='color:white'>".'SEARCH RESULTS:'."</h3>"."</p>";
			

                
                ?>    

<div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
    <div class="card border-0 me-lg-4 mb-lg-0 mb-4" style="background-color: hsl(197, 92%, 48%)" id="movie-list-item">
    <div class="backgroundEffect"></div>
    <?php echo '<img src=upload/'.$results['imagee'].' >'; ?> 
      <div class="card-body">
        <h5 class="card-title" id="movie-list-item-title"><?php echo $results['title']??''; ?></h5>
        <p class="card-text" id="movie-list-item-desc"><?php  echo $results['descriptionn']?></p>
        <p class="card-text" id="movie-list-item-desc"><?php  echo $results['show_time'] .'AM';?></p>
        <a type="button" class="btn btn-warning" href="<?php  echo $results['trailer']?>" >Watch trailer</a>
        <a class="btn btn-primary me-md-2" type="submit" id="movie-list-item-button" href="reserveform2.php?ID=<?php echo $results["ID"];?>" >Reserve</a>
      </div>
    </div>
  </div>
  </div>


                
                
               
                <?php
				// posts results gotten from database(title and text) you can also show id ($results['id'])
			}
			
		}
		else{ // if there is no matching rows do following
			echo "<p><h3 style='color:white;position:relative;left:600px;top:250px'>".'NO RESULTS,SORRY'."</h3>"."</p>";
            ?>                                        
                     <a type="button" class="btn btn-warning" href="div.php" style='position:relative;left:650px;top:265px' >Back to home</a>
             <?php
		}
		
	}
	else{ // if query length is less than minimum
		echo "<p><h3 style='color:white;position:relative;left:600px;top:250px'>".'THE MINIMUM LENGTH IS '.$min_length."</h3>"."</p>";
		?>                                        
		<a type="button" class="btn btn-warning" href="div.php" style='position:relative;left:700px;top:265px' >Back to home</a>
<?php
	}
?>
</body>
</html>