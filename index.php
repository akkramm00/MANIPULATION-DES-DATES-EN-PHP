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
echo "date 6 : l'année est-elle bissextile ? ".$responds."<br><br>";
?>

<!--======================== getdate() =======================-->   
     
<?php
echo print_r(getdate())."<br><br>";
?> 

<!--======================= strtotime() ======================-->   


<?php
echo strtotime("09 June 1992")."<br><br>";
?> 

<!--======================= checkdate() ======================-->   
    
<?php

var_dump(checkdate(2,29 , 2023))."<br>";
var_dump(checkdate(2, 29, 2024))."<br>";

?> 

<!--======================= strtotime() ======================-->   

<?php

$Date = "2023-03-27";
echo date('Y-m-d', strtotime($Date. ' + 1 days'))."|";
echo date('Y-m-d', strtotime($Date. ' + 1 months'))."<br><br>";

?> 


<!--================== Comparaison des dates ================-->   

    <?php

$Date1 = "2023-03-27";
$Date2 = "2023-04-01";

if(strtotime($Date1)>strtotime($Date2)){
 
  echo "la date 1 est plus récente";
}else{
 
    echo "la date 2 est plus récente"."<br><br>";
}

?> 

<!--=== CALCUL DE NBRE DE JOURS ENTRE DEUX DATES =======-->   

<?php

$start = date_create('2023-03-27');
$end = date_create('2023-04-02');
$nbdays = date_diff($start, $end);
echo $nbdays->format("%d")."<br><br>";

?> 
  
<!--================== Comparaison des dates ================-->   
<?php

$date = '2022-06-15';
$weekendday = date('N', strtotime($date));

if ($weekendday >= 6) {
   
  echo 'la date est un weekend';

} else {

  echo "la date n'est pas un weekend";
}

?> 




    
  
  </body>
</html>