<?php
session_start();
?>
<?php
include('config.php');
?>

<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `users` WHERE `username`='$username' and `password`='$password'";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows > 0){
        $_SESSION['username']="$username";
        header("Location:details.php");
    }
}
?>

<html>
    <head>
        <title>HTML Forms</title>
    </head>
<body>
<form method="POST" action="login.php">
    USERNAME <input type="text" name="username" placeholder="Type Your Username" required><br>
    PASSWORD <input type="password" name="password" placeholder="Type Your Password" required><br>
    <input type="submit" name="submit" value="Login">
</form>
</body>
</html>