<?php
// 1- Write a function that takes a two-dimensional array and returns a one-dimensional array containing the unique values of each 
// array (Without using the array_merge  function on PHP).
// I.e. input will be:
// [  0 => [0=>’a’ , 1=>’b’ ,  2=>’c’ ] ,
//    1 => [0=>’x’ , 1=>’b’ , 2=>’a’],
//    2 => [0=>’z’ , 1=>’z’ , 2=>’v’]
//  ]
// Output should be:
// [a,b,c,x,z,v]

$input=[
    0 => [0=>'a' , 1=>'b' ,  2=>'c'] ,
    1 => [0=>'x' , 1=>'b' , 2=>'a'],
    2 => [0=>'z' , 1=>'z' , 2=>'v']
];
$result = [];
foreach ( $input as $key =>$value) {
    foreach ($value as $subkey =>$subvalue){
        if (!in_array($subvalue,$result))
        $result []=$subvalue;
    } 
}
echo "</br>";

print_r($result);
echo "</br>";




// // 2 - Create a form with the following inputs (name, email, linkedin url) Validate inputs then return message to user . 
// // * validation rules ... 
// // name  = [required , string (Accept only letters) , min length 3 , max length 20]
// // email = [required]
// // linkedin url = [required | linked Url]
// // Notes … 
// // Don’t use html || js || php filters || regx  To validate inputs. 
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form-Page</title>
    <style>
        * {
            box-sizing: border-box;
        }

        input[type=text], radiobutton, .pass , .email{
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
    background-color: #cfd9db;
    color: #070b0c;
    padding: 14px 38px;
    border: none;
    border-radius: 11px;
    cursor: pointer;
    float: right;
        }

        input[type=submit]:hover {
            background-color: #5596ad;
        }

        .container {
            border-radius: 5px;
            background-color:#669788;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 15%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 65%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        .submit{
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
<div class="container">
    <form method="post" action="Action2.php">
        <div class="row">
            <div class="col-25">
                <label for="FirstName"><b>First Name </b></label>
            </div>
            <div class="col-75">
                <input type="text" id="FirstName" name="FirstName" placeholder="Your First name..">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="LastName"><b>Last Name</b></label>
            </div>
            <div class="col-75">
                <input type="text" id="LastName" name="LastName" placeholder="Your Last name..">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="email"><b>Email </b></label>
            </div>
            <div class="col-75">
                <input type="email" id="email" name="email" class="email" placeholder="Your Email..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="country"><b>Password  </b></label>
            </div>
            <div class="col-75">
                <input type="password" id="password" name="password" class="pass" placeholder="Your Password..">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="name"><b> Address </b></label>
            </div>
            <div class="col-75">
                <input type="text" id="address" name="address" placeholder="Your address..">
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-25">
                <label for="name"><b> Phone Number </b></label>
            </div>
            <div class="col-75">
                <input type="number" id="address" name="Your phone" placeholder="Your phone..">
            </div>
        </div> -->
        <br>
        <div class="row">
            <div class="col-25">
                <label for="subject"><b>Linkedin Url </b></label>
            </div>
            <div class="col-75">
                <input type="text" id="linkedinurl" name="linkedinurl" placeholder="Your Linkedin Url..">
            </div>
        </div>
        <br>

        <div class="submit">
            <input type="submit" value="Submit">
        </div>
    </form>
</div>

</body>
</html