<head>
    
    
    

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

$x = $_POST ['disease'];
$y = $_POST ['symptom'];




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
$sql = " INSERT INTO `disease` (`disease`,`symptom`) VALUES ('$x', '$y') "; 


if ($conn -> query ($sql) === TRUE)
{
    echo "New record created sucessfully";
}

else
{
    echo "Error" . $sql . "<br>" . $conn->error; 
}


$sql = "SELECT * FROM `disease` ";
$result = $conn->query($sql);


if ($result -> num_rows > 0 )
{
    
    echo "<p align = 'center' class ='aaron_home'>  Enter your Search here for Disease and it will show u the symptom </p> <br><br>";
    
  echo"  <input align = 'center' style = 'width:50%;' class ='aaron_home ' type='text' id='myInput' onkeyup='myFunction()' placeholder='Search for Disease to see symptom'> ";
    echo "<table id ='myTable' align ='center'>";
    
    echo "<tr class = 'aaron_home'>    
        
        <th> Disease</th>
        <th>Symptom </th>
       
        
        
        </tr>";
    
    while ($row = $result->fetch_assoc()) 
    {
        echo " 
        <tr>
        <td class ='aaron_home2'> " .$row["disease"]."</td>
        
        <td class ='aaron_home2'> " .$row["symptom"]."</td>
        
       
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
    
   
    
</head>	


<body>



<br>
















<br>
 
<div align ='center' class="aaron_home">

<button class="aaron_button">  <a class="aaron_home" href="tellsymptom_backend.php">To see the backend</a> </button>

    <br><br><br>
</div>

<div class="footer">
  <p>Aaron Fernandez  SID: 20007935 © 2020</p>
</div>
    
    </body>

<script src="aaron.js"></script> 