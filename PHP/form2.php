<?php
if(isset($_POST['submit'])){
    $interests = $_POST['interest'];
    echo "Gender ".$_POST["gender"]."<br>";
    echo "Interests - ";
    foreach($interests as $interest){
        echo $interest." ";
    }
}
else{
    echo "<h3 style='text-align: center;'>Please Fill The Form and Submit By Clicking Submit Button.</h3>";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>HTML Form</title>
        <style>
            div{
                width:400px;
                height:300px;
                padding:10px;
                margin-left:35%;
                margin-right:30%;
                border:5px solid red;
                float:center;
            }
        </style>
    </head>
    <body>
        <div>
        <form method="POST" action="form2.php">
            Username <input type="text" name="username" placeholder="Enter Your Username" required><br><br>
            Password <input type="password" name="password" placeholder="Enter Your Password" required><br><br>
            E-Mail <input type="email" name="email" placeholder="Enter Your E-Mail" required><br><br>
            Select Gender - 
            Male <input type="radio" name="gender" value="M" checked>
            Female <input type="radio" name="gender" value="F"><br><br>
            Interests (You can select multiple items) - 
            Coding <input type="checkbox" value="Coding" name="interest[]" checked>
            Sports <input type="checkbox" value="Sports" name="interest[]" checked>
            Reading <input type="checkbox" value="Reading" name="interest[]">
            Travelling <input type="checkbox" value="Travelling" name="interest[]"><br><br>
            Select Your City - <select name="city">
                <option value="Dehradun" selected>DEHRADUN</option>
                <option value="Delhi">DELHI</option>
                <option value="Nanital">NAINITAL</option>
                <option value="Mussoorie">MUSSOORIE</option>
            </select>
            <br><br>
            <input type="submit" name="submit">
        </form>
        </div>
    </body>
</html>