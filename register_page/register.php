<?php
include("../login_php/connect_db.php");
$err = [];
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $bdate = $_POST['bdate'];
    $password = $_POST['password'];
    $rpassword = $_POST['rpassword'];
    if ($password != $rpassword) {
        header("Location: register.php?error=confirm password incorrect");
        exit();
    }
    if (empty($err)) {
        $pass = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user(username, email, firstname, lastname, dateOfBirth, password) VALUES ('$username', '$email', '$fname', '$lname', '$bdate', '$pass')";
        $query = mysqli_query($conn, $sql);
        if ($query) {
            header("Location: ../login_page/login.php");
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
    <title>Register Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap
        rel="stylesheet">
    <link rel="icon" href="../home_page/images/favicon.png">

    <link rel="stylesheet" href="register.css">
    <script src="register.js" defer></script>
</head>

<body>
    <div class="hihi">
        <?php
        if (isset($_GET['error'])) { ?>
        <p class="error">
            <?php echo $_GET['error']; ?>
        </p>
    <?php } ?>
    </div>
    <section id="signup">
        <form action="#" method="POST" class="form">
            <div class="progress">
                <div class="progress-bar active current">
                    <span>
                        <img src="assets/email.svg" alt="">
                    </span>
                </div>
                <div class="progress-bar">
                    <span>
                        <img src="assets/user.svg" alt="">
                    </span>
                </div>
                <div class="progress-bar ">
                    <span>
                        <img src="assets/password.svg" alt="">
                    </span>
                </div>
            </div>
            <div class="pages">
                <div class="page active">
                    <h1>Let's get started</h1>
                    <div class="field">
                        <div class="field-input">
                            <label for="email"><span>*</span>Email</label>
                            <input type="email" id="email" placeholder="sample@gmail.com" name="email" required>
                        </div>
                        <div class="field-input">
                            <label for="uname"><span>*</span>Username</label>
                            <input type="text" id="uname" placeholder="Your Password" name="username" required>
                        </div>
                    </div>

                    <div class="btn">
                        <button type="button" id="next-btn" name="next">
                            <img src="assets/next.svg" alt="">
                            Next
                        </button>
                    </div>
                    <p id="text">
                        You have account?
                        <a href="../login_page/login.php">Login</a>

                    </p>
                </div>
                <div class="page">
                    <h1>Add a personal touch</h1>
                    <div class="field">
                        <div class="field-input">
                            <div class="field-group">
                                <div class="fname-input">
                                    <label for="fname"><span>*</span>First Name</label>
                                    <input required type="text" id="fname" name="fname">
                                </div>
                                <div class="lname-input">
                                    <label for="fname"><span>*</span>Last Name</label>
                                    <input required type="text" id="fname" name="lname">
                                </div>
                            </div>
                        </div>
                        <div class="field-input">
                            <label for="bdate"><span>*</span>Birthdate</label>
                            <input required type="date" id="bdate" name="bdate">
                        </div>
                    </div>
                    <div class="btn">
                        <button type="button" id="prev-btn">
                            <img src="assets/prev.svg" alt="">
                            Back
                        </button>
                        <button type="button" id="next-btn">
                            <img src="assets/next.svg" alt="">
                            Next
                        </button>
                    </div>
                </div>
                
                <div class="page">
                    <h1>Secure your account</h1>
                    <div class="field">
                        <div class="field-input">
                            <label for="password"><span>*</span>Password</label>
                            <input type="password" id="password" placeholder="Password" name="password" required>
                            <img class="show-hide-pass" src="/assets/show-pass.svg" alt="">
                        </div>
                        <div class="field-input">
                            <label for="confirmpass"><span>*</span>Confirm Password</label>
                            <input type="password" id="confirmpass" placeholder="Confirm Password" name="rpassword"
                                required>
                            <img class="show-hide-pass" src="/assets/show-pass.svg" alt="">
                        </div>
                    </div>
                    <div class="btn">
                        <button type="button" id="prev-btn">
                            <img src="assets/prev.svg" alt="">
                            Back
                        </button>
                        <button type="submit" id="submit-btn" name="submit">
                            Sign up
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </section>
</body>

</html>