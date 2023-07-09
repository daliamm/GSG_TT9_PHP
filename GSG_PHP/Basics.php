<?php

// /* Q1 */
$string='DODO';
if(($string[0]===$string[-2])&&($string[1]===$string[-1])){
    echo "The tow characters same";
}
else{
    echo "The tow characters  not same";
}
// /////////////////////////////////////////////////////////////////////////
// /* Q2 */

echo "<br>";
$string= 'GoOd Morning';
if($string[0].$string[1]==='Go'){
    echo "The string start with Go : $string";

}
else{
    echo "The string start with ".$string[0].$string[1];

}
// ///////////////////////////////////////////////////////////////////////////////
// /* Q3 */
echo "<br>";
$num=1000;
if($num>=0){
  if($num%3==0 || $num%7==0){
    echo "The number $num is multiple by 3 or 7";
  }
  else{
    echo "The number $num is positive but not multiple by 3 or 7 ";
  }
}else{
    echo "The  number is Negative ";
}
// ///////////////////////////////////////////////////////////////////////////////
// /* Q4 */
echo "<br>";
$num1 = 10;
$num2 = 20;
$num3 = 30;
$largest = $num1;
if ($num2 > $largest) {
  $largest = $num2;
}

if ($num3 > $largest) {
  $largest = $num3;
}
echo "The largest number is $largest";
///////////////////////////////////////////////////////////////////////////////
/* Q5 */
echo "<br>";
$num1=0;
$num2=1;
if($div1=$num1-100 >$div2=$num2-100 ){
    echo "The $num1 is nerest to 100 ";
}
else if($div2=$num2-100 >$div1=$num1-100){
    echo "The $num2 is nerest to 100 ";

}
else if($num2-100 == $num1-100){
    echo "The $num2 and $num1 is equal ";

}
else{
    echo "Nothing";
}
///////////////////////////////////////////////////////////////////////////////
/* Q6  */
echo "<br>";

$num1=25;
$num2=234;
if ($num1 >= 20 && $num1<= 30 && $num2>= 20 && $num2<= 30){
    if( $num1 > $num2){
        echo "The large number is $num1";
        }
    else if( $num2 > $num1){
       echo "The large number is $num2";
         }
         else{
            echo 0;
         }
     }
     else{
        echo "The number out of range";
     }
///////////////////////////////////////////////////////////////////////////////
/* Q7  */ 
//I searched for  is_numeric usse
echo "<br>";

$st_num="Mh0h21m5d9";
$count=0;
for($i=0;$i<strlen($st_num);++$i){
    if(is_numeric($st_num[$i])){
        ++$count;
    }
}
echo "The count number in string $count";
///////////////////////////////////////////////////////////////////////////////
/* Q8  */ 

echo "<br>";
$number="120";
$digit_sum=0;
for($i=0;$i<strlen($number);++$i){
  $digit_sum+=$number[$i];
}
echo "The sum =$digit_sum"; 
///////////////////////////////////////////////////////////////////////////////
/* Q9  */ 
echo "<br>";

$string="Gaza Sky Geeks";
$len=strlen($string);
for ($i=$len-1 ; $i >= 0 ; $i--){   

  echo $string[$i];  
} 




?>












