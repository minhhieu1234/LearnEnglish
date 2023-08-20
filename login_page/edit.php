<?php
include("../login_php/connect_db.php");
$user = (isset($_SESSION['user'])) ? $_SESSION['user']:[];

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $fname = $_POST['fname'];
    $lname =$_POST['lname'];
    $bdate = $_POST['bdate'];
    
    if ($username == ""){echo "Enter username! <br>";}
    if ($fname == ""){echo "Enter firstname! <br>";}
    if ($lname == ""){echo "Enter lastname! <br>";}
    if ($bdate == ""){echo "Enter dateofbirth! <br>";}

    if($username !="" && $fname != ""&& $lname != ""&& $bdate != ""){
        $sql = "UPDATE user SET username = '$username', email = '$email', firstname = '$fname', lastname = '$lname', dateOfBirth = '$bdate' WHERE id = $id";
        $query = mysqli_query($conn, $sql);
        if($query){
            header('Location: ../user_info/user_info.php');
        }

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="edit.css">
    <style>
        .profile-container .profile .profile-info .info-item button{
            margin-left: 40%;
            padding: 10px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <div class="profile-container">
            <div class="profile">
                <h1>Edit Profile</h1>
                <div class="profile-info">
                    <div class="info-item">
                        <span class="info-label">Username:</span>
                        <input type="text" name="username" value="<?php echo $user['username'] ?>" required>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Email:</span>
                        <input type="text" name="email" value="<?php echo $user['email'] ?>"  required>
                    </div>
                    <div class="info-item">
                        <span class="info-label">First Name:</span>
                        <input type="text" name="fname" value="<?php echo $user['firstname'] ?>" required>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Last Name:</span>
                        <input type="text" name="lname" value="<?php echo $user['lastname'] ?>" required>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Date of Birth:</span>
                        <input type="text" name="bdate" value="<?php echo $user['dateOfBirth'] ?>"  required>
                    </div>
                    <div class="info-item byt">
                        <input type="submit" name="submit" value="Submit">
                    </div>
                    
                </div>
            </div>
        </div>
    </form>
</body>
</html>
