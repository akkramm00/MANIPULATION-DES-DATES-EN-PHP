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
echo "<br><br>";
?> 

<!--=============calcul des jours de congés ================-->   

<?php 

      $date1 = '2023-04-01';
      $date2 = '2023-04-11';
      $solde = 10; // déclaration et initialisation de la variable $solde
      
      $datestart = date_create($date1); //get current server time
      $dateend = date_create($date2);//some future date
      $diff = date_diff($datestart, $dateend);

      function isholiday($timestamp) {
        $jour = date("d", $timestamp);
        $mois = date("m", $timestamp);
        $annee = date("Y", $timestamp);
        $EstFerie = 0;
        // dates fériées fixes
        if($jour == 1 && $mois == 1) $EstFerie = 1; // 1er janvier
        if($jour == 1 && $mois == 5) $EstFerie = 1; // 1er mai
        if($jour == 8 && $mois == 5) $EstFerie = 1; // 8 mai
        if($jour == 14 && $mois == 7) $EstFerie = 1; // 14 juillet
        if($jour == 15 && $mois == 8) $EstFerie = 1; // 15 aout
        if($jour == 1 && $mois == 11) $EstFerie = 1; // 1 novembre
        if($jour == 11 && $mois == 11) $EstFerie = 1; // 11 novembre
        if($jour == 25 && $mois == 12) $EstFerie = 1; // 25 décembre
        return $EstFerie;
      }
      $nbdiff = intval($diff->format("%d"));
      $conge=0;
      for($i=0;$i<=$nbdiff;$i++){           
        $newdate = date('Y-m-d', strtotime($date1. ' + '.$i.' days'));
        $weekendday = date('w', strtotime($newdate));
        if ($weekendday == 0 || $weekendday == 6 || isholiday(strtotime($date1. ' + '.$i.' days'))==1) {
        } else {
          $conge++;
        }
      }
      echo "Nombre de jour de congés : ".$conge."<br>";
      if($conge>$solde){
        $diff=$conge-$solde;
        echo "Congé refusé : solde insuffisant, il manque encore ".$diff." jour(s) de solde";
      } else {
        echo "Congé accepté";
      }
echo "<br><br>";
?>

    <!--======calcul de promtion avec les dates=======-->

<?php

function reduction($productname,$date,$price){

$today=date("Y-m-d"); /* Tester le 17/04/2023 */
$datestart = date_create($today); //get current server time
$dateend = date_create($date);//some future date
$diff = date_diff($datestart, $dateend);
$daydiff = intval($diff->format("%d"));
$newprice = $price-($price*(10*$daydiff)/100);

if($daydiff<=5){
$newprice;
}
echo "Nom du produit :".$productname."<br>";
echo "Prix en promotion :".$newprice."€<br>";
 }
reduction("Laitue",date("Y-m-d", mktime(0, 0, 0, 04, 20, 2023)),5);

?>





    
  
  </body>
</html>