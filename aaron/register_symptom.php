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


<br><br>

<?php

$x = $_POST ['Name'];
$y = $_POST ['age'];
$a = $_POST ['gender'];
$b = $_POST ['blood'];
$c = $_POST ['sugar'];
$d = $_POST ['bmi'];

$e = $_POST ['urine'];
$f = $_POST ['hunger'];
$g = $_POST ['fatigue'];
$h = $_POST ['vision'];
$i = $_POST ['cuts'];
$j = $_POST ['pain'];




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wt20007935";


//Create connection 

$conn = new mysqli ($servername, $username, $password, $dbname);

//Check connection

if ($conn -> connect_error)
    
{

 die("Connection failed:" . $conn->connect_error);

}


echo "connected success";
$sql = " INSERT INTO `user` (`Name`, `age`, `gender`,`blood`,`sugar`,`bmi`, `urine`,`hunger`,`fatigue`,`vision`,`cuts`,`pain`) VALUES ('$x', '$y', '$a','$b','$c','$d','$e','$f','$g','$h','$i','$j') "; 


if ($conn -> query ($sql) === TRUE)
{
    echo "New record created sucessfully";
}

else
{
    echo "Error" . $sql . "<br>" . $conn->error; 
}


$sql = "SELECT * FROM user ";
$result = $conn->query($sql);


if ($result -> num_rows > 0 )
{
    
    echo "<table align ='center'>";
    
    echo "<tr class = 'aaron_home'>    
        
        <th> ID</th>
        <th>Name </th>
         <th>Age Group </th>
        <th>Gender</th>
        <th>Blood</th>
        <th>Sugar</th>
        <th>BMI</th>
        
        <th>Excessive Urine</th>
        <th>Exteme Hunger</th>
        <th>Extreme Fatigue</th>
        <th>Blurred vision</th>
        <th>Wound Healing delay</th>
        <th>Pain and Numbness</th>
        
        
        </tr>";
    
    while ($row = $result->fetch_assoc()) 
    {
        echo " 
        
        <tr>
        <td class ='aaron_home2'> " .$row["id"]."</td>
        
        <td class ='aaron_home2'> " .$row["Name"]."</td>
        
        <td class ='aaron_home2'> " .$row["age"]."</td>
        
        <td class ='aaron_home2'>  " .$row["gender"]."</td> 
        
        <td class ='aaron_home2'>   " .$row["blood"]. "</td>
        
        <td class ='aaron_home2'>   " .$row["sugar"]. "</td>
        
        <td class ='aaron_home2'>  " .$row["bmi"]. "</td>
        
        <td class ='aaron_home2'>  " .$row["urine"]. "</td>
        
        <td class ='aaron_home2'>  " .$row["hunger"]. "</td>
        
        <td class ='aaron_home2'>  " .$row["fatigue"]. "</td>
        
        <td class ='aaron_home2'>  " .$row["vision"]. "</td>
        
        <td class ='aaron_home2'>  " .$row["cuts"]. "</td>
        
        <td class ='aaron_home2'>  " .$row["pain"]. "</td>
    
    </tr> "
        
        
    
        
        ;
        
        
        
    }
    
    echo "</table>";
        
}

else
{
    echo "0 results";
}
    





$conn -> close();


?>
<div align ='center'>
<a  class="aaron_home" href="symptom_put.php"> Re Register  </a>
</div>


     <br><br>  <br><br>  

<div class="footer">
  <p>Aaron Fernandez  SID: 20007935 © 2020</p>
</div>