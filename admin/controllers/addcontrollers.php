<?php
include '../../controllers/connections.php';
session_start();
if(isset($_POST['user'])){
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $middlename = mysqli_real_escape_string($conn, $_POST['middlename']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);

    //generate 10 digit password with random characters
    $password = substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', mt_rand(1,10))),1,10);
    $password = password_hash($password, PASSWORD_DEFAULT);


    $sql = "INSERT INTO `users`(`ID`, `LASTNAME`, `FIRSTNAME`, `MIDDLENAME`, `EMAILADDRESS`, `PASSWORD`,  `ROLES`, `CONTACTNUMBER`) VALUES (NULL, '$lastname', '$firstname', '$middlename', '$email', '12345', '$role', '$contact')";
    $query = mysqli_query($conn, $sql);
    if($query){
        $_SESSION['msgstatus'] = 'success';
        $_SESSION['msg'] = 'User added successfully';
        header('location: ../user');
    }else{
        $_SESSION['msgstatus'] = 'error';
        $_SESSION['msg'] = 'Failed to add user';    
        header('location: ../user');
    }
}
?>