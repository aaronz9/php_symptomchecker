<?php include 'database.php'; ?>






<?php session_start(); ?>
<!DOCTYPE html>
<html>

       
<link rel="stylesheet" type="text/css" href="aaron.css">

<header class="header">
		<h1 class="logo"><a href="index.php">Aaron Fernandez</a></h1>
      <ul class="main-nav">
          <li><a href="symptomp.php">Symptom Checker</a></li>
          <li><a href="bmi.php">Calculate Your BMI</a></li>
          <li><a href="symptom_put.php">Regsiter symptoms </a></li>
           <li><a href="tellsymptom_backend.php">Check Symptom </a></li>
          <li><a href="contact.php">Contact </a></li>
          <li><a href="treatment.php">What is Diabetes?</a></li>
         
          
          <li><a href="aaron.php">About</a></li>
      </ul>
	</header> 

    
    <br>
<hr class="aaron_hr_style">
<body>
	
    <div align ="center">
    <p class="aaron_home"> Your Symptoms Risk Rating is ready</p>
        
        </div>
    
<hr class="aaron_hr_style">
    
    <br>
	
		<div align ="center">
		
				<p class="aaron_home">According to your Responses </p>
				<p class="aaron_home2"> You have a risk rating of:<?php echo $_SESSION['score']; ?></p>
				
		</div>
	
    
    <br>
    
    <table  align ="center">
  <tr>
    <th><p class= "aaron_table_font" >Risk Level</p></th>
    <th><p class="aaron_table_font">   Description</p></th>
      <th><p class="aaron_table_font">   What to do?</p></th>
 
  </tr>
  <tr>
    <td><p class="aaron_table_font">   0 - 3</p></td>
    <td><p class="aaron_table_font">   Mild</p></td>
      <td><p class="aaron_table_font">   Continue to Maintain a Healthy Lifestyle</p></td>
 
  </tr>
  <tr>
    <td><p class="aaron_table_font">   4-6</p></td>
    <td><p class="aaron_table_font">  Moderate</p></td>
    <td><p class="aaron_table_font">  Keep a watch on your blood sugar you maybe pre-diabetic</p></td>
 
  </tr>
        
        
         <tr>
    <td><p class="aaron_table_font">   7-9</p></td>
    <td><p class="aaron_table_font">  Danger</p></td>
    <td><p class="aaron_table_font">  Consult a Doctor at the earliest</p> </td>
   
  </tr>
  
        
           <tr>
    <td><p class="aaron_table_font">  10+</p></td>
    <td><p class="aaron_table_font">   Emergency</p></td>
   <td><p class="aaron_table_font">  Seek medical attention at the soonest</p></td>
  </tr>
        
</table>
    
    <br><br>
    
    
    <hr class="aaron_hr_style">
    
    <div align = "center">
    <a class="aaron_home" href="question.php?n=1">Re-Take the Diagnosis?</a>
    </div>
    <hr class="aaron_hr_style">
    
    <br><br>
    
    
    <a href="question.php?n=1" class="aaron_home">Take Again</a>
	
    
    
    
    

<div class="footer">
  <p>Aaron Fernandez  SID: 20007935 © 2020</p>
</div>


    
    
    
</body>
</html>
<?php session_destroy(); ?>






<!--

<head>
<link rel="stylesheet" type="text/css" href="aaron.css">

<script src="aaron.js"></script>
    

</head>	


<header class="header">
		<h1 class="logo"><a href="index.php">Aaron Fernandez</a></h1>
      <ul class="main-nav">
          <li><a href="symptomp.php">Symptom Checker</a></li>
          <li><a href="#">Calculate Your BMI</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="aaron.php">About</a></li>
      </ul>

	</header> 


<br>
<hr class="aaron_hr_style">


<div align = "center" class="aaron_home">

Your Results are Here.
<p>Final Score: <?php echo $_SESSION['score']; ?></p>
<hr class="aaron_hr_style">
    

    <h1>You have a risk level of <br> 5</h1>
<br>
    
    <table >
  <tr>
    <th>Risk Level</th>
    <th>Description</th>
      <th>What to do?</th>
 
  </tr>
  <tr>
    <td>1-3</td>
    <td>Mild</td>
      <td>Maintain a healthy lifestyle</td>
 
  </tr>
  <tr>
    <td>4-6</td>
    <td>Moderate</td>
    <td>Check blood Sugar regularly for symptoms</td>
 
  </tr>
        
        
         <tr>
    <td>7-9</td>
    <td>Danger</td>
    <td>Visit a doctor immeadietly </td>
   
  </tr>
  
        
           <tr>
    <td>10 +</td>
    <td>Emergency</td>
   <td>Seek Medical attention at the soonest</td>
  </tr>
        
</table>
    
    
    
    
    
    
    
    <br>
<hr class="aaron_hr_style">
    <a class="retake" href="question.php?n=1">Re-Take the Diagnosis?</a>
    
</div>










<div class="footer">
  <p>Aaron Fernandez  SID: 20007935 © 2020</p>
</div>


-->