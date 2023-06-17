<html>
  <head>
    <title>La manipulation des dates PHP</title>
  </head>
  <body>
<!--==================== Timestamp ==================--> 
    
<?php
echo "La date d'aujourd'hui au format Timestamp :".time()."<br>";
?> 

<!--==================== Format GTM ==================-->    

<?php
echo "La date d'aujourd'hui au format GMT :".gmdate("d/m/Y")."<br>";
?> 
    
<!--============= Manipulation des Dates ============-->    
    
<?php
$date3 = date("H:i:s");                          
$date4 = date("Y-m-d H:i:s");  
$date1 = date("m.d.y");                                                
$date2 = date("Ymd");                                  
$date5 = date("d l F Y");  
$date6 = date("L");

if($date6!=0){
    $responds="Oui";
}else{
    $responds="Non";
}


echo "date 1 :".$date1."<br>";
echo "date 2 :".$date2."<br>";
echo "date 3 :".$date3."<br>";
echo "date 4 :".$date4."<br>";
echo "date 5 :".$date5."<br>";
echo "date 6 : l'année est-elle bissextile ? ".$responds."<br>";
?>

  </body>
</html>