<?php
include('config.php');
?>

<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];

    $sql = "INSERT INTO `users` (`username`, `email`, `contact`, `city`) VALUES ('$username', '$email', '$contact', '$city')";
    mysqli_query($conn, $sql);
}
else{
    echo "Please click submit button to submit the data..";
}
?>

<html>
    <head>
        <title>HTML Forms</title>
    </head>
<body>
<form method="POST" action="add.php">
    USERNAME <input type="text" name="username" placeholder="Type Your Username" required><br>
    E-MAIL <input type="email" name="email" placeholder="Type Your E-mail" required><br>
    CONTACT <input type="text" name="contact" placeholder="Type Your Contact Number" required><br>
    Select City <select name="city">
        <option value="Dehradun">Dehradun</option>
        <option value="Delhi">Delhi</option>
        <option value="Jaipur">Jaipur</option>
    </select><br>
    <input type="submit" name="submit" value="Click Here To Submit Your Data">
</form>
</body>
</html>