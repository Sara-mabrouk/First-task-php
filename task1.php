<?php 


// Swap two numbers without using a temporary variable.
// output : $x=15 , $s=5;

//             $x=5;
//             $s=15;

//             $x=$x+$s;
//             $s=$x-$s;
//             $x=$x-$s;

// echo"value of x: $x </br>";
// // echo "</br>";
// echo"value of s: $s";
// echo "</br>";



                $FirstNumber=5;
                $SecNumber=15;

                $FirstNumber=$FirstNumber+$SecNumber;
                $SecNumber=$FirstNumber-$SecNumber;
                $FirstNumber=$FirstNumber-$SecNumber;



                echo"value of FirstNumber :  $FirstNumber </br>";
                // echo "</br>";
                echo"value of SecNumber:   $SecNumber";
                echo "</br>";


// "</br>";
// "</br>";
// "</br>";
// "</br>";
// "</br>";
// "</br>";

// task 2   
//Write a program to print 2 php variables using single echo statement.


$user_1="Hello";
echo "</br>";
$user_2=" this is my first project";

echo $user_1.$user_2;

?>