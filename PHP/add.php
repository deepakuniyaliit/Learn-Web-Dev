<?php
session_start();
?>
<?php
include('config.php');
?>

<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];

    $sql = "INSERT INTO `users` (`username`,`password`, `email`, `contact`, `city`) VALUES ('$username','456', '$email', '$contact', '$city')";
    mysqli_query($conn, $sql);
}
else if(isset($_SESSION['username']) ){
    echo "Please click submit button to submit the data..";
}
?>

<html>
    <head>
        <title>HTML Forms</title>
    </head>
<body>

<?php
if(isset($_SESSION['username'])){
?>

<form method="POST" action="add.php">
    USERNAME <input type="text" name="username" placeholder="Type Your Username" required><br>
    E-MAIL <input type="email" name="email" placeholder="Type Your E-mail" required><br>
    CONTACT <input type="text" name="contact" placeholder="Type Your Contact Number" required><br>
    Select City <select name="city">
        <option value="Dehradun">Dehradun</option>
        <option value="Delhi">Delhi</option>
        <option value="Jaipur">Jaipur</option>
        <option value="Nanital">Nanital</option>
        <option value="Mussoorie">Mussoorie</option>
        <option value="Lucknow">Lucknow</option>
    </select><br>
    <input type="submit" name="submit" value="Click Here To Submit Your Data">
</form>

<?php
}
else{
    echo "Login as a valid user";

?>
    <a href="login.php">Login</a>
<?php
}
?>
</body>
</html>
