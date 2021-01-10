<?php
    include_once("config.php");
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $date = $_POST['date'];

        $result=mysqli_query($mysqli,"INSERT into record values(null,$name,$email,$mobile,$date)");
        if($result)
        {
            echo "Success";
        }
        else{
            echo "Failed";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="payment.php" method="POST">
        Name<input type="text" name="name"><br>
        Email<input type="email" name="email"><br>
        Mobile<input type="mobile" name="mobile"><br>
        Date<input type="date" name="date"><br>
        <input type="submit" name="submit">
    </form>
    
</body>
</html>