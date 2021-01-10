<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $pin = $_POST['pin'];

    //Database Connection
    $conn = new mysqli('localhost','root','','payment');
    if($conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into registration(name,phone,address,pin)values(?,?,?,?)");
        $stmt->bind_param("siss",$name,$phone,$address,$pin);
        $stmt->execute();
        echo "Your Order Successfully Place";
        echo "Please Wait 30Min";
        $stmt->close();
        $conn->close();
    }
?>