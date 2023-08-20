<?php
include("../login_php/connect_db.php");
if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE email = '$email'";
    $query = mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($query);
    $checkuser = mysqli_num_rows($query);

    if (empty($email)){
		header("Location: login.php?error=Email is required");
		exit();
	}else if(empty($password)){
		header("Location: login.php?error=Password is required");
		exit();
    }
    if (!isset($email)){
        header("Location: login.php?error=Email not exits");
		exit();
    }else if(!isset($password)){
		header("Location: login.php?error=Password not exits");
		exit();
    }
    if ($checkuser){
        $checkpass= password_verify($password, $data['password']);
        if($checkpass){
            $_SESSION['user'] = $data;
            header("Location: ../home_page/home.php");
        }else{
            header("Location: login.php?error=Incorect email or password");
            exit();
        }
    }else{
		header("Location: login.php?error=Incorect email or password");
		exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="icon" href="images/favicon.png" type="image/vnd.microsoft.icon"> 
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" href="../home_page/images/favicon.png">
</head>
<body>
    <section class="portal">
        <form action="login.php" method="post">
            <div class="title">
                <h1>LOG IN</h1>
                <p>Welcome back! Please enter your details.</p>
            </div>
            <button id="google-signin">
                <img src="images/google-logo.svg" alt="">
                Login in with Google
            </button>
            <span>or</span>
            <?php
            if (isset($_GET['error'])){?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php }?>
            <div class="input-field">
                <input type="text" name="email" placeholder="Email">
            </div>
            <div class="input-field">
                <input type="password" name="password" placeholder="Password">
            </div>
            <a href="forgot.php" id="forgot-pass">Forgot Password</a>
            <button id="signin" name="submit">Sign in</button>
            <p id="signup">
                Don't have an account?
                <a href="../register_page/register.php">Sign up here</a>
            </p>
        </form>
    </section>  
</body>
</html>