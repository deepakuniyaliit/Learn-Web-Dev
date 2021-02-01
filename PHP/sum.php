<html>
    <head>
        <title>Sum of Two Numbers</title>
    </head>
    <body>
        <form method="POST" action="sum.php">
            Number 1 <input type="number" name="var1" required>
            Number 2 <input type="number" name="var2" required>
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>

<?php
if(isset($_POST['submit'])){
    $var1 = $_POST['var1'];
    $var2 = $_POST['var2'];
    $sum = $var1 + $var2;
    echo "Sum of two numbers is ".$sum;
}
else{
    echo "No data submitted yet. Click submit to submit the form.";
}
?>