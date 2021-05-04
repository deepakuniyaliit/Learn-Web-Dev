<?php
session_start();
echo $_SESSION['username'];
session_unset();
session_destroy();
?>

<?php
header("Location:details.php");
?>

<html>
    <head>
        <title>Logout</title>
    </head>
<body>


</body>
</html>