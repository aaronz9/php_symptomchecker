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




<div align = "center">
<img class="home_image_aaron" src="images/diabetes.png">

</div>



<br><br>
<hr class="aaron_hr_style">




<div class="footer">
  <p>Aaron Fernandez  SID: 20007935 © 2020</p>
</div>





<p class="aaron_home">Click on Each link to reveal description:</p>
<button class="collapsible">Causes of Diabetes</button>
<div class="content">
  <div class="aaron_home">
      Different causes are associated with each type of diabetes.





      
    <ol>
    <li><b>Type 1 diabetes</b>
Doctors don’t know exactly what causes type 1 diabetes. For some reason, the immune system mistakenly attacks and destroys insulin-producing beta cells in the pancreas. </li>
    
    <li>
<b>Type 2 diabetes</b>
Type 2 diabetes stems from a combination of genetics and lifestyle factors. Being overweight or obese increases your risk too. Carrying extra weight, especially in your belly, makes your cells more resistant to the effects of insulin on your blood sugar.

This condition runs in families. Family members share genes that make them more likely to get type 2 diabetes and to be overweight. </li>
    
    <li>
        
        
<b>Gestational diabetes</b>
Gestational diabetes is the result of hormonal changes during pregnancy. The placenta produces hormones that make a pregnant woman’s cells less sensitive to the effects of insulin. This can cause high blood sugar during pregnancy.

        
        </li>
    

        
        <li> <b> The bottom line</b>
Both genes and environmental factors play a role in triggering diabetes. Get more information here on the causes of diabetes.

</li>
    </ol>  
    
    </div>
</div>
<button class="collapsible">Complications Associated with Diabetes</button>
<div class="content">
 
     <div class="aaron_home">
    <ol>
    <li> High blood sugar damages organs and tissues throughout your body. The higher your blood sugar is and the longer you live with it, the greater your risk for complications</li>
<br>
        <li>Complications associated with diabetes include:</li><br>

heart disease, heart attack, and stroke<br>
neuropathy<br>
nephropathy<br>
retinopathy and vision loss<br>
hearing loss<br>
foot damage such as infections and sores that don’t heal<br>
skin conditions such as bacterial and fungal infections<br>
depression<br>
        dementia<br></ol> 
    
  
    
    
    </div>
    
    
</div>


<button class="collapsible">Treatment</button>
<div class="content">
  <div class="aaron_home">
    <ol>
        
      



        
        
    <li>  Type 1 diabetes is managed with insulin replacement through lifelong insulin injections (up to 6 every day) or delivery of insulin through a pump, by following a healthy diet and eating plan, taking regular exercise and monitoring of blood glucose levels regularly (up to 6 times every day or as directed by a doctor or diabetes educator).
 </li>
    
    <li>
The aim of treating your diabetes is to keep blood glucose levels as close to ‘normal’ as possible, that is between 4 to 6 mmol/L (fasting).

Keeping blood glucose levels in a healthy range will help prevent both short-term and long-term complications.

The Royal Australian College of General Practitioners recommends that if you have type 2 diabetes and take oral medication only, you should talk to your doctor or specialist about the need to test your blood sugar levels at home, as many people in this situation do not need to do this type of monitoring. For further information, visit the Choosing Wisely Australia website. </li>
    
    <li>
Type 2 diabetes can sometimes initially be managed through lifestyle modification including a healthy diet and regular exercise. However, as the disease progresses, people with type 2 diabetes are often prescribed tablets to control their blood glucose levels. These tablets are intended to be used in conjunction with healthy eating and regular physical activity, not as a substitute. Diabetes tablets are not an oral form of insulin and they require insulin to be present in the body to be effective. </li>
    
        <li>Eventually it may be necessary to start taking insulin to control blood glucose levels. Often tablets may be continued in addition to insulin.

In type 2 diabetes, as in type 1, the aim of management is to keep blood glucose levels as close to ‘normal’ as possible, that is between 4 to 6 mmol/L (fasting), as this will help prevent both short-term and long-term complications.</li>
        
        
     
    </ol>  
    
    </div>  
    
    
</div>





<button class="collapsible">Impact</button>
<div class="content">
  <div class="aaron_home">
    <ol>
    <li>
The number of people with diabetes rose from 108 million in 1980 to 422 million in 2014. </li>
    
    <li>The global prevalence of diabetes* among adults over 18 years of age rose from 4.7% in 1980 to 8.5% in 2014 </li>
    
    <li>Between 2000 and 2016, there was a 5% increase in premature mortality from diabetes.</li>
    
        <li>Diabetes prevalence has been rising more rapidly in low- and middle-income countries than in high-income countries. </li>
    
        
        
         <li>
Diabetes is a major cause of blindness, kidney failure, heart attacks, stroke and lower limb amputation. </li>
    
    <li>In 2016, an estimated 1.6 million deaths were directly caused by diabetes. Another 2.2 million deaths were attributable to high blood glucose in 2012.
</li>
    
        <li>
Almost half of all deaths attributable to high blood glucose occur before the age of 70 years. WHO estimates that diabetes was the seventh leading cause of death in 2016. </li>
        
        
        
         <li>A healthy diet, regular physical activity, maintaining a normal body weight and avoiding tobacco use are ways to prevent or delay the onset of type 2 diabetes. </li>
    
    <li>Diabetes can be treated and its consequences avoided or delayed with diet, physical activity, medication and regular screening and treatment for complications.
</li>
    
    </ol>  
    
    </div>  
    
    
</div>






<br><br><br><br>




<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>