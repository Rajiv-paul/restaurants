<?php
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
  
    $Firstname = $_POST['Firstname'];
    $Lastname = $_POST['Lastname'];
    $city = $_POST['city'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $reservation_time = $_POST['reservation_time'];
    $reservation_date = $_POST['reservation_date'];
    $sql = "INSERT INTO `reservation`.`table_reservation` (`Firstname`,`Lastname`, `city`, `phone_number`, `email`, `reservation_time`, `reservation_date`) VALUES ('$Firstname', '$Lastname', '$city','$phone_number', '$email', '$reservation_time', '$reservation_date')";
    if($con->query($sql) == true){
        echo "Thanks For Filling The Form. We Will Let You Know Is Their Any Table For Reservation Is Available Or Not";}
	$con->close();
?>