<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!--leapyear-->
    
<?php   
$year = 2011;
if(($year % 400 == 0) || (($year % 100 == 0) && ($year % 4 == 0))){
    echo "$year is a leap year.";
} else{
    echo "$year is no Leap Year.";
} 
?>  

<!--week number-->
<?php 
    
    $weeknumber =4;
              
          if((1 <= $weeknumber) && ($weeknumber<=7)){
              if($weeknumber==1){ 
                  echo "Input : $weeknumber"."<br>";
                  echo "Output : Sunday";
              }
              else if($weeknumber==2){ 
                  echo "Input : $weeknumber"."<br>";
                  echo "Output : Monday";
              }
              else if($weeknumber==3){ 
                  echo "Input : $weeknumber"."<br>";
                  echo "Output : Tuesday";
              }
              else if($weeknumber==4){ 
                  echo "Input : $weeknumber"."<br>";
                  echo "Output : Wednesday";
              }
              else if($weeknumber==5){ 
                  echo "Input : $weeknumber"."<br>";
                  echo "Output : Thursday";
              }
              else if($weeknumber==6){ 
                  echo "Input : $weeknumber"."<br>";
                  echo "Output : Friday";
              }
              else if($weeknumber==7){ 
                  echo "Input : $weeknumber"."<br>";
                  echo "Output : Saturday";
              }
          }
          else{
              echo "You should given number between 1-7";
          }  
      
    
    
    ?>

    <!--loss profit-->

    <?php   
 
   
      $buy = 1000;
        $sell = 1500;;
         
            if($buy > $sell){

                $loss = ($buy - $sell);
                echo "The Loss amount is : $loss"."<br>";
                
            }
            else if($buy < $sell){
    
                $profit = ($sell - $buy);
                echo "Profit : $profit"."<br>";
    
            }
            else{
                echo " You have no loss or Profit";
            }
             
 
    
?>  

<!--note problem-->
<?php   
 
    
 $amount = 575;   
  
     $amount1 = $amount;
     $notes = array(500, 100, 50, 20, 10, 5, 2, 1);
     $noteCounts =array(0, 0, 0, 0, 0, 0, 0, 0,0);
     for ($i = 0; $i < 8; $i++){         
         if ($amount >= $notes[$i]){
                 $noteCounts[$i] = intval($amount / $notes[$i]);
                 $amount = $amount - $noteCounts[$i] * $notes[$i];
             }
         }
         echo "Sample Input : ".$amount1."<br>"; 

         echo ("Total Number of Notes :"."<br>"); 

         for ($i = 0; $i < 8; $i++)
         {

             echo ($notes[$i] . " : " .$noteCounts[$i]."<br>" );

         }
        


?> 

<!--lowercase and uppercase-->
<?php   
 
   

        $character = 'C';   
        if($character === strtoupper($character)) {
            echo "Input : ".$character."<br>";
            echo $character." is an Uppercase alphabet"."<br>";
        }
        else if($character === strtolower($character)) {
            echo "Input : ".$character."<br>";
            echo $character." is a Lowercase alphabet"."<br>";
        }
       
?>  

<!--maximum between two-->
<?php   
 
   

        $num1 = 40;  
        $num2 = 30; 
        
            switch($num1 > $num2)
            {   
                case 0: 
                    echo "The maximum number is : ".$num2."<br>";
                    break;
    
    
                case 1: 
                    echo "The maximum number is : ".$num1."<br>";
                    break;
    
                default: 
                    echo "Number is equal";
            }
        
?>  

<!--odd even-->

<?php 

$i = 0;
while ($i <100){

    $i +=2;
    
    echo $i."<br>";
  
}


?>

<!--parent-->
<?php

$parrentArray = array(
                        1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41
                        ,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77
                        ,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100
                    );
$evenArray = array();
$oddArray = array();

echo "Parrent arrays are : [";
for($i=0;$i<100;$i++) {
    echo $parrentArray[$i].",";
    
}
echo "]";
 echo "<br>";

echo "even : [";
for($i=0;$i<100;$i++) {
    if($parrentArray[$i]%2==0) {
        echo $parrentArray[$i].",";
        
    }
}

echo "]";
echo "<br>";

echo "Odd : [";
for($i=0;$i<100;$i++) {
    if($parrentArray[$i]%2!=0) {
        echo $parrentArray[$i].",";
        
    }
}

echo "]";
echo "<br>";




?>

<!--prime-->
<?php   
 
   
        $checkprime=0;
        $number = 7;   
 
            if ($number == 0 || $number == 1)
                $checkprime = 1;

            for ($i = 2; $i <= $number / 2; ++$i) {
                if ($number % $i == 0) {
                    $checkprime = 1;
                    break;
                }
            }
            if ($checkprime == 0){
                echo $number."  is a prime number"."<br>";
            }
            else{
                echo $number."  is a not prime number"."<br>";
            }
          
?>  
</body>
</html>