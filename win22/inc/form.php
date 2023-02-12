<?php

$firstName =            $_POST [ 'firstName' ] ; 
$lastName =             $_POST [ 'lastName' ] ;
$email =                $_POST ['email' ] ;

if (isset($_POST['submit'])) {

    $firstName =            mysqli_real_escape_string($conn, $_POST [ 'firstName' ] ) ; 
    $lastName =             mysqli_real_escape_string($conn, $_POST [ 'lastName' ] ) ;
    $email =                mysqli_real_escape_string($conn, $_POST ['email' ] ) ;



    $sql = "INSERT INTO users (firstName ,lastName,email)
    VALUES('$firstName','$lastName','$email')";
    
    if(empty($firstName)){
    
    echo'first name empty';
    }
    
    else if(empty($lastName)){
    
        echo'last name empty';
        
        }
    else if(empty($email)){
    
            echo' email empty';
            
            }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    
    echo'pleaase write a corecct email';
    }
    else{
    
    if(mysqli_query($conn, $sql)){
    
    echo'success';
    } 
    else{
           echo 'error:',mysqli_error($conn);
    }
    }
    }
