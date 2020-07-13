<?php
$ERROR = array(
    'email' => '',
    'password' => ''
);
$emailfill = '';

        if(!isset($_POST['submit'])){
        
        }
        else
        {
            if(empty($_POST['email'])){
                $ERROR['email'] = "Feild is mandatory";
            }
            else{
            // execute the function to eliminate unwanted spaces and text.
                $emailfill = test_input($_POST['email']);
                if(!filter_var($emailfill, FILTER_VALIDATE_EMAIL)){
                    $ERROR['email'] = "E-mail format is incorrect";
                }
            }
            if(empty($_POST['password'])){
                $ERROR['password'] = "This feild is mandatory";
            }
            // After doing all the validation we are creating session and check if the information is right for login 
            require 'selectedDB.php';
        }

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>