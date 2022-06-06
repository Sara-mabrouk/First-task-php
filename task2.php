<?php

//  1 - Write a PHP function to print the next character of a specific character.
// input : 'a'
// Output : 'b'
// input : 'z'
// Output : 'a'

        function nextchar ($char){
            $nextchar =++ $char ;
            if(strlen($nextchar) > 1)
            {
            $nextchar = $nextchar[0];
        }
        return $nextchar;
    }
    echo nextchar('a');

    // $index = ord('z');
    // $nextchar = $index+1; 
    // echo chr($nextchar);
echo "</br>";

    $cha = 'z';
$next_cha = ++ $cha; 
if (strlen($next_cha) > 1) 
{
$next_cha = $next_cha[0];
}
echo $next_cha."\n";


echo "</br>";
echo "</br>";


// 2 - Write a PHP function to get the characters after the last '/' in an url. Go to the editor
// Sample URL : 'http://www.example.com/5478631'
// Expected Output : '5478631'

    $url ='http://www.example.com/5478631';
        $Values = explode ('/', $url);
        echo end($Values);


        echo "</br>";
//3 - Write PHP function that takes an HTML tag as string and returns its ID value if existed or false if it has no ID
// example: When calling
// getTagID('<div id="container">');
// it will return the string: container 
            ?>

            <!DOCTYPE html>
            <html>
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>welcome</title>
            </head>
            <body>
            <?php
            $massage="";
            function test (){
            $massage = '<div id=container>
                <h1>Hello world</h1>
                    </div>';
                    echo $massage;
            }
                test();
            ?>
            </body>
            </html>
