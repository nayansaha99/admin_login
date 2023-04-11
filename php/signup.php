<?php 
    session_start();
    include_once  "db.php";
$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['pass']);
$cpassword = md5($_POST['cpass']);
$Role = 'user';
$verification_status = '0';

// checking fields are not empty
if(!empty($username)  && !empty($email) && !empty($password) && !empty($cpassword)){
    //if email is valid
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        //checking email already exists
        $sql = mysqli_query($conn,"SELECT email FROM users WHERE email = '{$email}'");
        if(mysqli_num_rows($sql) > 0){
            echo "$email - Already Exists!";
        }
        else{
            if($password == $cpassword){
            //let's check user upload file or not
                    $random_id = rand(time(),10000000);
                    $otp =  mt_rand(111111,999999);
                    // let's start insert data into table

                    $sql2 = mysqli_query($conn,"INSERT INTO users (unique_id, username, email, password,otp,verification_status, Role)
                    VALUES ({$random_id},'{$username}','{$email}','{$password}','{$otp}','{$verification_status}','{$Role}')");
                    if($sql2){
                        $sql3 = mysqli_query($conn,"SELECT * FROM users WHERE email = '{$email}'");
                        if(mysqli_num_rows($sql3)>0){
                            $row = mysqli_fetch_assoc($sql3);
                            $_SESSION['unique_id'] = $row['unique_id'];
                            $_SESSION['email'] = $row['email'];
                            $_SESSION['otp'] = $row['otp'];



                            //mail function
                            if($otp){
                                $receiver = $email;
                                $subject = "From: $username <$email>";
                                $body = "Name "." $username \n Email" . " $email \n Otp" . " $otp";
                                $sender = "From: nayansa@gmail.com" ; 
                                
                                if(mail($receiver, $subject, $body, $sender)){
                                   echo "success";
                                }
                                else{
                                    echo "Email Problem!" . mysqli_error($conn);
                                }
                            }

                            // mail function end
                        }
                    }
                    else {
                        echo "Somethings went wrong! " . mysqli_error($conn);
                    }
               
            
        }
        else{
            echo "Password Don't Match!";

        }
        }
        
    }
    else {
        echo "$email ~ This is not valid Email!";
    }
} else {
    if ($username == null) {
        printf("Please Enter username");
    } else if ($email == null) {
        printf("Please enter your Email Address");
    } else if ($password == null) {
        printf("Please enter Password");
    } elseif ($cpassword == null) {
        printf("Please enter confirm password");
    }
}


?>
