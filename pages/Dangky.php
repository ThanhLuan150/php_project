<?php 
error_reporting(0);
function alert($message){
    echo "<script> alert('$message');</script>";
}
include_once '../database/ketnoidatabase.php';



if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $a = 0;

    if ($password != $confirm_password){
        alert("Passwords do not match.");
        $a++;
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        alert("Invalid email format.");
        $a++;
    }
    if (strlen($password) < 7) {
        alert("Password must be at least 6 characters long.");
        $a++;
    }

    $query_check = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
    $result_check = mysqli_query($mysqli, $query_check);
    if(mysqli_num_rows($result_check) > 0){
        alert("Username or email already exists.");
        $a++;
    }
    if($a == 0){
        $date = date('m/d/Y h:i:s a', time());
        $result= mysqli_query($mysqli,"INSERT INTO `users`(`username`, `email`, `password`, `confirm_password`, `created_at`) VALUES ('$username','$email','$password','$confirm_password','$date')");

        if($result){
            header("Location:Home.php");
            // die();
        } else {
            alert("Failed to insert user information.");
        }
    } else {
        alert("Errors occurred while processing the form.");
    }
}

// Close the database connection
mysqli_close($mysqli);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/footer/footer.css">
    <link rel="stylesheet" href="../assets/header/header.css">
    <link rel="stylesheet" href="../assets/styles/Dangky.css">
    <link rel="stylesheet" href="/bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <script src="/bootstrap-5.2.2-dist/js/jquery.min.js"></script>
    <script src="/bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />