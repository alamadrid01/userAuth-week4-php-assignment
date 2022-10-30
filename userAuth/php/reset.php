<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    resetPassword($email, $password);
}

function resetPassword($email, $password){
    //open file and check if the username exist inside
    //if it does, replace the password
    $file = '../storage/users.csv';
    $data = fopen($file, 'r');
    $result = fgetcsv($data, 1000, ",");

    if($result[1] == $email){
        $result[2]= $email;
    }
}
echo "HANDLE THIS PAGE";


