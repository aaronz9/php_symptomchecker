<head>
    
    
    
    
    
<link rel="stylesheet" type="text/css" href="aaron.css">

<script src="aaron.js"></script>
    

</head>	



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


<h1 class="aaron_home" align = 'center'>Register your symptoms here </h1>


<form action="register_symptom.php" method="post">
    
    <div align = "center">
  <label class="aaron_home" for="username">Name:</label><br>
  <input required class="aaron_home" type="text" id="Name" name="Name"><br><br>
  
    
    <label class="aaron_home" for="age">Age :</label><br>
       
  <select required class="aaron_home"x id="age" name="age">
    <option class="aaron_home" value="under 20"> Below 20</option>
    <option class="aaron_home" value="21 -30">21 - 30</option>
    <option class="aaron_home" value="31 - 40">31 - 40</option>
      <option class="aaron_home" value="41 - 50">41 - 50</option>
      <option class="aaron_home" value="41 - 50">51 - 60</option>
      <option class="aaron_home" value="41 - 50">60+</option>
  </select>  
    <br> <br>
             <hr class="aaron_hr_style">
        <p class ='aaron_home'>Gender :</p>
    <input type="radio" id="male" name="gender" value="male">
        
    
<label class="aaron_home" for="male">Male</label><br>
<input   class="aaron_home" type="radio" id="female" name="gender" value="female">
<label class="aaron_home" for="female">Female</label><br>
<input class="aaron_home" type="radio" id="other" name="gender" value="other">
<label class="aaron_home" for="other">Other</label>
    
        
        <br><br>
           <hr class="aaron_hr_style">
        
        
  <p class="aaron_home"> Symptoms [Click Yes if they apply to you] </p>
  
        <label class="aaron_home" for="urine">Do you feel like urinating often:</label>
  <select required class="aaron_home"x id="urine" name="urine">
    <option class="aaron_home" value="Yes">Yes</option>
    <option class="aaron_home" value="No">No</option>
    <option class="aaron_home" value="N/A">Not sure</option>

  </select>
        
    <br><br>
    
        
        <label class="aaron_home" for="hunger">Excessive Hunger:</label>
  <select required class="aaron_home"x id="hunger" name="hunger">
    <option class="aaron_home" value="Yes">Yes</option>
    <option class="aaron_home" value="No">No</option>
    <option class="aaron_home" value="N/A">Not sure</option>

  </select>
        
    <br><br>
        
      <label class="aaron_home" for="fatigue">Extreme fatigue (without much activity):</label>
  <select required class="aaron_home"x id="fatigue" name="fatigue">
    <option class="aaron_home" value="Yes">Yes</option>
    <option class="aaron_home" value="No">No</option>
    <option class="aaron_home" value="N/A">Not sure</option>

  </select>
        
    <br><br>    
        
        
  
        
        <br><br>
        
        
              <label class="aaron_home" for="vision">Blurry vision:</label>
  <select required class="aaron_home"x id="vision" name="vision">
    <option class="aaron_home" value="Yes">Yes</option>
    <option class="aaron_home" value="No">No</option>
    <option class="aaron_home" value="N/A">Not sure</option>

  </select>  
        
        <br><br>
        
        
        
              <label class="aaron_home" for="cuts"> 
        Cuts/bruises that are slow to heal:</label>
  <select required class="aaron_home"x id="cuts" name="cuts">
    <option class="aaron_home" value="Yes">Yes</option>
    <option class="aaron_home" value="No">No</option>
    <option class="aaron_home" value="N/A">Not sure</option>

  </select>  
        
        <br><br>
        
   
        
           
        
              <label class="aaron_home" for="pain"> 
          Tingling, pain, or numbness in the hands/feet </label>
  <select required class="aaron_home"x id="pain" name="pain">
    <option class="aaron_home" value="Yes">Yes</option>
    <option class="aaron_home" value="No">No</option>
    <option class="aaron_home" value="N/A">Not sure</option>

  </select>  
        
        <br><br>
        
       
            <hr class="aaron_hr_style">
        <br><br>
      
        
       <p class="aaron_home"> Blood Type</p>    
 
        
        
<label class="aaron_home" for="blood">Choose a Blood Type:</label>
  <select required class="aaron_home"x id="blood" name="blood">
    <option class="aaron_home" value="A+">A+</option>
    <option class="aaron_home" value="A-">A-</option>
      
    <option class="aaron_home" value="B+">B+</option>
    <option class="aaron_home" value="B-">B-</option>
      
    <option class="aaron_home" value="AB+">AB+</option>
    <option class="aaron_home" value="AB-">AB-</option>
      
    <option class="aaron_home" value="O+">O+</option>
    <option class="aaron_home" value="O-">O+</option>
      
  </select>
        
        <br><br>
            <hr class="aaron_hr_style">
        
        
        <br>
        
        
        
        <label class="aaron_home" for="sugar">Sugar level (fasting):</label><br><br>
        <select required class="aaron_home" id="sugar" name="sugar">
    <option class="aaron_home" value="Under 50">Below 50 mg/dl</option>
    <option class="aaron_home" value="51-100">51-100 mg/dl</option>
    <option class="aaron_home" value="101-150">101-150 mg/dl</option>
    <option class="aaron_home" value="151-200">151-200 mg/dl</option>
            
    <option class="aaron_home" value="200+">200+ mg/dl</option>
  </select>
        
        <br><br>
  
           <hr class="aaron_hr_style">  <br><br>
        
        
                
<label class="aaron_home" for="bmi">BMI Type:</label>
  <select class="aaron_home"x id="bmi" name="bmi">
    <option class="aaron_home" value="under">Underweight</option>
    <option class="aaron_home" value="health">Healthy</option>
    <option class="aaron_home" value="over">Overweight</option>
    <option class="aaron_home" value="obese">Obese</option>
  </select>
        
        <p>If you are unsure you can use our <a href="bmi.php">link</a> to confirm </p>
        
        <br><br>
        
        <input type="submit" value="Submit">
        
    
    </div>
    <br><br><br><br>
    
   
    
    
</form>







 
<div class="footer">
  <p>Aaron Fernandez  SID: 20007935 © 2020</p>
</div>
  












