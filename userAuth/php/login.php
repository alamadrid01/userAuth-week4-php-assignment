<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

loginUser($email, $password);

}

function loginUser($email, $password){
    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */
    $file = '../storage/users.csv';
    $data = fopen($file, 'r');
    $result = fgetcsv($data, 1000, ",");

    
        if($result[1] == $email && $result[2] == $password){
        header("location:../dashboard.php");
            session_start();
            $_SESSION['username'] = $email;
        }else{
            header("location:../forms/login.html");
            
        }


// echo "HANDLE THIS PAGE";
}
