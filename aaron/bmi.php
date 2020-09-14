<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>You can Calculate your BMI here!</title>
  <link rel="stylesheet" href="aaron.css">

</head>
<body>
  <header>
              


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
      
      
    <div align = "center">
	<hr style="aaron_hr">
      <h1 class="aaron_home">You can calculate your BMI here</h1>
	  <hr>
    </div>
	
  </header>
  <div >
    <form method="POST">
      <div align = "center">
        <label class="aaron_home2" for="weight" style="color:white">Weight in kg.</label>
        <div>
          <input required type="number" class="aaron_home" id="weight" name="weight" placeholder=" Weight in kilograms.">
        </div>
      </div>
        
        <br>
      <div align = "center">
        <label class="aaron_home2" for="height" style="color:white" >Height in cm.</label>
        <div >
          <input required type="number" class="aaron_home" id="height" name="height" placeholder="height in centimeters.">
        </div>
          
          
      </div>
      <div align = "center">
        <br>
          <input type="submit" name="calculate">
        </div>
      
   
        
    
    </form>
          
          
          
  
      
      <br><br>    

<div class="footer">
  <p>Aaron Fernandez  SID: 20007935 © 2020</p>
</div>


    
      
      
    <br><br>
      
      
      
      
      
          
          
      <?php

      

        
        function calculateBMI($weight, $height){
          $bmi = ($weight / $height / $height) * 10000;
          $bmiRounded = round($bmi, 1);
          
            if( $bmiRounded >= 10.0 && $bmiRounded <= 18.4  ){
                
              echo $BMIcolor = "  <p class ='aaron_home' align = 'center'>    Underweight  </p>";
            
                echo "<br>";
                
            echo "  <div align = 'center'> <img class ='bmi' src = 'bmiImage/skinny.jpg'> </div> " ;   
                
             
            }
            if($bmiRounded >= 18.5 && $bmiRounded <= 24.9){
           echo $BMIcolor = "  <p class ='aaron_home' align = 'center'>    Normal Weight  </p>";
                   echo "<br>";
                
            echo "  <div align = 'center'> <img class ='bmi' src = 'bmiImage/cat.jpg'> </div> " ;  
            }
            if($bmiRounded >= 25 && $bmiRounded <= 29.9){
               echo $BMIcolor = "  <p class ='aaron_home' align = 'center'>   Overweight a little chubby too  </p>";
             echo "<br>";
                
         echo "  <div align = 'center'> <img class ='bmi' src = 'bmiImage/fatcat.png'> </div> " ;  
                
                
            }
            if($bmiRounded >= 30 && $bmiRounded <= 39.9){
              echo $BMIcolor = "  <p class ='aaron_home' align = 'center'>    oops obese  </p>";
                
                      echo "<br>";
         echo "  <div align = 'center'> <img class ='bmi' src = 'bmiImage/obese.jpg'> </div> " ;  
                
                
            }
            
            
            else {
           
                    echo $BMIcolor = "  <p class ='aaron_home' align = 'center'>  Please Enter proper values   </p>";
                
                      echo "<br>";
         echo "  <div align = 'center'> <img class ='bmi' src = 'bmiImage/cheems.jpeg'> </div> " ;  
                
                
                
                
                
            }

          echo "<h2 class ='aaron_home' align = 'center'>Your BMI is ${bmiRounded}</h2>";
        }


        if(isset($_POST['calculate'])){
          if (!isset($_POST['weight'])) {
            return 'Please enter your weight';
            exit();
          }
          if (!isset($_POST['height'])) {
            return 'Please enter your height';
            exit();
          }
          $weight = filter_var(htmlentities(floatval($_POST['weight'])),FILTER_SANITIZE_NUMBER_FLOAT);

          $height = filter_var(htmlentities(floatval($_POST['height'])),FILTER_SANITIZE_NUMBER_FLOAT);

          calculateBMI($weight, $height);
        }
    ?>
    </div>

    
    
<table align = 'center'>
  <tr>
    <th class="aaron_table_font">BMI RANGE</th>
    <th class="aaron_table_font">Description</th>
    
  </tr>
  <tr>
    <td class="aaron_table_font">10 - 18.4</td>
    <td class="aaron_table_font">Underweight</td>
   
  </tr>
  <tr>
   
    <td class="aaron_table_font">18.5 - 24.9</td>
    <td class="aaron_table_font">Normal</td>
   
  </tr>
  <tr>
  
    <td class="aaron_table_font">25 - 29.9</td>
    <td class="aaron_table_font">Overweight</td>
   
  </tr>
  <tr>
    
    <td class="aaron_table_font">30 +</td>
    <td class="aaron_table_font">Obese</td>
   
  </tr>
  
</table>
<br><br><br>
    
</body>
</html>