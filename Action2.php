<?php

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $FirstName = $_POST ['FirstName'];
    $LastName = $_POST ['LastName'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $linkedinurl = $_POST['linkedinurl'];


    $errors =[];

    if (empty($FirstName)) {
        $errors['FirstName'] = " Enter Your First Name";
    } else {
        if (strlen($FirstName) >= 5) {
            $errors['FirstName'] = " Name Can't be More 5 letter";
        } elseif (!preg_match("/^[a-zA-Z-']*$/", $FirstName)) {
            $errors ="Only char allowed";

        }
        // echo $FirstName;
    }

    echo "</br>";
    if (empty($LastName)) {
        $errors['LastName'] = "Enter Your Last Name";
    } else {
        if (strlen($LastName) >=10) {
            $errors['LastName'] = " Name Can't be More 10 letter";
        } elseif (!preg_match("/^[a-zA-Z-']*$/", $LastName)) {
            $errors = "Only char allowed";
        }
        // echo $LastName;

    }

    echo "</br>";
    if(empty($email)){
        $errors ['email'] = " Enter E-mail";

    }
    }else{
        // echo $email;
    }

    echo "</br>";

    if(empty($password)){
        $errors['password'] = " Enter Password";

    }elseif(strlen($password)>=10){
        $errors['password'] = " Name Can't be More 10 number";
    }else{
        // echo $password;
    }
    echo "</br>";
    
    if(empty($address)){
        $errors['address'] = "Enter address";
    }elseif(strlen($address) >=10){
        $errors = " The address musn't be less than 10 characters";
    }else{
        // echo $address;
    }

    echo "</br>";

    if(empty($linkedinurl)){
        $errors['linkedinurl'] = "Enter Your Linkedin Url";
    }else{ 
        // echo $linkedinurl;
    }
    echo "</br>";

// if(empty($FirstName)){
//     echo "Enter Your First Name";
// }else{
//     echo $FirstName;} // $errors['FirstName']  = "Field is Required"; }

    // if(empty($SecondName)){
    //     echo "Enter Your Second Name";
    // }else{
    //     echo $SecondName;} // $errors['SecondName']  = "Field is Required"; }
        // if(empty($email)){
        //     echo " Enter Email";
        // }else{
        //     echo $email;
        // }// $errors['Email']  = "Field is Required"; 

    if(count($errors)>0){
    foreach($errors as $key => $value){
    echo $key.':' .$value.'<br>';
    }
}
else{
    echo 'Form is completed';
}

?>