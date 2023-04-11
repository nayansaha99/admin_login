<?php 
  session_start();
  include 'php/db.php';
  $unique_id = $_SESSION['unique_id'];
  $email = $_SESSION['email'];
  if(empty($unique_id))
  {
      header ("Location: index.php");
  } 
  $qry = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$unique_id}'");
  if(mysqli_num_rows($qry) > 0){
    $row = mysqli_fetch_assoc($qry);
    if($row){
      $_SESSION['Role'] = $row['Role'];
      if($row['verification_status'] != 'Verified')
      {
        header ("Location: verify.php");
      } 
  }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in & Sign Up Form</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="css/form.css?v=1">
    <link rel="stylesheet" href="css/index.css">
    

</head>

<body>
    <div class="form-box">
        <div class="form">
            <form action="" autocomplete="off">
                <h1>Login</h1>
                  <div class="error-text">Error</div>
                <div class="input-box">
                    <i class='bx bxs-envelope' style='color:#0b3d0b'></i>
                    <input type="email" name="email" placeholder="email">
                </div>
                <div class="input-box">
                    <i class='bx bxs-lock-alt' style='color:#0b3d0b'></i>
                    <input type="password" name="pass" placeholder="password">
                </div>
                <div class="submit">
                    <input type="submit" class="btn" value="Login Now">
                </div>
                 <div class="group">
                    <span><a href="forget-password.php">Forget-Password</a></span>
                    <span><a href="register.php">Signup</a></span>
                </div>
            </form>
            
        </div>
</body>
</html>
 <script src="js/index.js?v=1"></script>
</body>
</html>