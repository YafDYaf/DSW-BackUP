<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "contact";

$con = new mysqli($server,$username,$password,$dbname);

if ($con -> connect_error) {
    die("Connection failed: " . $con-> connect_error);
}


;

if(isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phonenumber = $_POST["phonenumber"];
    $message = $_POST["message"];
    $sql = "INSERT INTO contact1 (New_user, Email, Message, Phonenumber) VALUES ('$name ','$email','$message', '$phonenumber')" ;

    if($con->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error" . $sql . "<br>" . $con->error;
    }

    
}
else{
    echo "Failed to submit form";
        
}
    


$con ->close();
?>



