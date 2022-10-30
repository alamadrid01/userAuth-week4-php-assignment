<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    //save data into the file
    $file = '../storage/users.csv';
    $files = [$username, $email, $password, "\n"];

    $data = fopen($file, 'a');
    fputcsv($data, $files);
    fclose($data);
    
    // echo "OKAY";
    echo 'User successfully registered';
}
// echo "HANDLE THIS PAGE";


