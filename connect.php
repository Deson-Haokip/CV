<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = $_POST['number'];

    //Database fann_get_total_connection
    $conn = new mysqli('localhost','root','','desons');
    if($conn->connect_error){
        die('Connection Failed : ' $conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, password, number)
            value(?, ?, ?, ?, ?, ?,)");
        $stmt->bind_param("sssssi",$firstName, $lastName, $gender, $email, $password, $number);
        $stmt->execute();
        echo "registration Successfully...";
        $stmt->close();
        $conn->close();
    }
?>
