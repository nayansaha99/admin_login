<?php 
    session_start();
    include 'db.php'; 
    $email = $_POST['email'];
    $password =  $_POST['pass'];

    if(!empty($email)&& !empty($password)){
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            if($row){
            $_SESSION['unique_id'] = $row['unique_id'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['otp'] = $row['otp'];
            echo "success";
        }
        }
        else{
            echo "Email or Password is Incorrect! ";    
        }
 } 
    else {
    if ($email == null) {
        printf("Please Enter email");
    } else if ($password == null) {
        printf("Please enter Password");
    } 
    
}


?>