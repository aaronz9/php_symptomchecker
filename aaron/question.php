<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
	//Set question number
	$number = (int) $_GET['n'];
	
	/*
	*	Get total questions
	*/
	$query = "SELECT * FROM `questions`";
	//Get result
	$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total = $results->num_rows;
		
	/*
	*	Get Question
	*/
	$query = "SELECT * FROM `questions`
				WHERE question_number = $number";
	//Get result
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	
	$question = $result->fetch_assoc();
	
	/*
	*	Get Choices
	*/
	$query = "SELECT * FROM `choices`
				WHERE question_number = $number";
	//Get results
	$choices = $mysqli->query($query) or die($mysqli->error.__LINE__);
?>
<!DOCTYPE html>
<html>
    
    
    
    
    
	<head>
	<meta charset="utf-8" />
	<title>Symptom Checker</title>
	<link rel="stylesheet" href="aaron.css" type="text/css" />
</head>
<body>
	<header>
		<div class="container">
            

<header class="header">
		<h1 class="logo"><a href="index.php">Aaron Fernandez</a></h1>
      <ul class="main-nav">
          <li><a href="symptomp.php">Symptom Checker</a></li>
          <li><a href="bmi.php">Calculate Your BMI</a></li>
          <li><a href="contact.php">Regsiter symptoms </a></li>
          <li><a href="#">Contact </a></li>
          <li><a href="#">Treatment </a></li>
          <li><a href="#">Impact </a></li>
          
          <li><a href="aaron.php">About</a></li>
      </ul>
	</header> 


            
            <br>
            <hr class="aaron_hr_style">
            
        <div align ="center">    
			<h1 class="aaron_home">Symptom Checker (Skip question if doesn't apply)</h1>
            </div>
        <hr class="aaron_hr_style">
            <br>
        
        
        </div>
	</header>
	<main>
		<div align = "center">
            <div><p class="aaron_home" >Symptom Check  <?php echo $question['question_number']; ?> of <?php echo $total; ?></p>  </div>
			<p class="aaron_home2">
				<?php echo $question['text']; ?>
			</p>
			<form method="post" action="process.php">
				<ul >
                    
                    <div align ="center" class ="aaron_home">
					<?php while($row = $choices->fetch_assoc()): ?>
						<li><input name="choice" type="radio" value="<?php echo $row['id']; ?>" /><?php echo $row['text']; ?></li> <br>
					<?php endwhile; ?>
                        </div>
				</ul>
				<input class="button" type="submit" value="Submit" />
                
                
                
                
                <!-- we shall create a hidden input -->
                
                <input type="hidden" name ="number" value="<?php echo $number;?>" />
                
                
                
                
				<input type="hidden" name="number" value="<?php echo $number; ?>" />
			</form>
		</div>
	</main>

    
    
    
    
    
    
  
<div class="footer">
  <p>Aaron Fernandez  SID: 20007935 © 2020</p>
</div>
  
    
    
</body>
</html>