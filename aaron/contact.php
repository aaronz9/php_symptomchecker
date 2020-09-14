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



<?php

    $error = ""; $successMessage = "";

    if ($_POST) {
        
        if (!$_POST["email"]) {
            
            $error .= "An email address is required.<br>";
            
        }
        
        if (!$_POST["content"]) {
            
            $error .= "The content field is required.<br>";
            
        }
        
        if (!$_POST["subject"]) {
            
            $error .= "The subject is required.<br>";
            
        }
        
        if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            
            $error .= "The email address is invalid.<br>";
            
        }
        
        if ($error != "") {
            
            $error = '<div class="alert alert-danger" role="alert"><p>There were error(s) in your form:</p>' . $error . '</div>';
            
        } else {
            
            $emailTo = "20007935@student.westernsydney.edu.au";
            
            $subject = $_POST['subject'];
            
            $content = $_POST['content'];
            
            
            $headers = "From: ".$_POST['email'];
            
            $day = $_POST['day'];
            
            
            if (mail($emailTo, $subject, $content, $headers,$day)) {
                
                $successMessage = '<div class="alert alert-success" role="alert">Your message was sent to Aaron</div>';
                
                
            } else {
                
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent - please try again later</div>';
                
                
            }
            
        }
        
        
        
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    
  </head>
  <body>
      
      <div align = 'center'>
      
    <h1 class="aaron_home">We shall call you back for a consultation <br>(emails go to 20007935@student.westernsydney.edu.au)</h1>
          
          <hr >
      
      <div id="error"><? echo $error.$successMessage; ?></div>
      
      <form method="post">
  
    <label class="aaron_home" for="email">Email address</label>
    <input class="aaron_home" type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    
<br><br>
  <div class="aaron_home">
    <label class="aaron_home"  for="subject">Subject</label>
    <input class="aaron_home" type="text" class="form-control" id="subject" name="subject" >
  </div>
  <br><br>
          
    <label class="aaron_home" for="exampleTextarea">Describe your Symptoms?</label><br>
    <textarea class="aaron_home"  id="content" name="content" rows="3"></textarea>

          
          <br><br>
          
          
          <label class="aaron_home" for="day">Select a good Day for us to call you back?:</label>

<select class="aaron_home" name="day" id="day">
  <option value="Monday">Monday</option>
  <option value="Tuesday">Tuesday</option>
  <option value="Wednesday">Wednesday</option>
  <option value="Thursday">Thursday</option>
  <option value="Friday">Friday</option>
 
</select>
          
          <br><br>
  <button  type="submit" id="submit" class="aaron_button"> <p class="aaron_home"> Submit</p></button>
</form>
          
        </div>
      
      
      


<div class="footer">
  <p>Aaron Fernandez  SID: 20007935 © 2020</p>
</div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
          
    <script type="text/javascript">
          
          $("form").submit(function(e) {
              
              var error = "";
              
              if ($("#email").val() == "") {
                  
                  error += "The email field is required.<br>"
                  
              }
              
              if ($("#subject").val() == "") {
                  
                  error += "The subject field is required.<br>"
                  
              }
              
              if ($("#content").val() == "") {
                  
                  error += "The content field is required.<br>"
                  
              }
              
              if (error != "") {
                  
                 $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');
                  
                  return false;
                  
              } else {
                  
                  return true;
                  
              }
          })
          
    </script>
          
  </body>
</html>