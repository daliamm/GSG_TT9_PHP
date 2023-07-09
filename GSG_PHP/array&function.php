<?php 
/*  Q1  */
function removeOddNumbers(array $array): array {
    foreach ($array as $arrays) {
        if ($arrays % 2 == 0) {
            $newArray[] = $arrays;
        }
    }

    return $newArray;
}
$array=[12,2,31,1];
 $a=removeOddNumbers($array);
 var_dump($a);
////////////////////////////////////////////////////////////
/*  Q2  */
echo "<br>";
function longestString($strings, &$longestIndex)
{
    $longestString = '';
    for ($i = 0; $i < count($strings); $i++) {
        if (strlen($strings[$i]) > strlen($longestString)) {
            $longestString = $strings[$i];
            $longestIndex = $i;
        }
    }
    return $longestString;
}
$strings = ['programmer', 'pharmacist', 'photographer ', 'accountant'];
$longestIndex  =-1;
$longestString = longestString($strings, $longestIndex);

echo "Longest string: " . $longestString ."Index: " . $longestIndex ; 


////////////////////////////////////////////////////////////
/*  Q3  */
echo "<br>";
function multiplyArrays(array $array1, array $array2): array {
    $newArray = [];
    $length1 = count($array1);
    $length2 = count($array2);
    $minLength = min($length1, $length2);

    for ($i = 0; $i < $minLength; $i++) {
        $newArray[] = $array1[$i] * $array2[$i];
    }

    return $newArray;
}
$array1=[1,3,2];
$array2=[1,4,2];
$a2=multiplyArrays($array1,$array2);
var_dump($a2);
////////////////////////////////////////////////////////////
/*  Q4  */
echo "<br>";
function factorial($num)  
{  
  if($num <= 1) {  
    return 1;  
  }  
 
    return $num * factorial($num - 1);  
    
}  

$num = 3;  
echo "Factorial of $num is " .factorial($num);

 ////////////////////////////////////////////////////////////
/*  Q5  */
echo "<br>";
function prime($number){
    if ($number == 1)
    return 0;
    for ($i = 2; $i <= $number/2; $i++){
        if ($number % $i == 0)
            return 0;
    }
    return 1;
}
 
$number = 20;
$flag = prime($number);
if ($flag == 1)
    echo "Prime";
else
    echo "Not Prime";





