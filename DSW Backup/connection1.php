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
    $new_user_lname = $_POST["new_user_lname"];
    $days = $_POST["days"];
    $months = $_POST["months"];
    $years = $_POST["years"];
    $province = $_POST["province"];
    $city = $_POST["city"];
    $streetaddress = $_POST["streetaddress"];
    $zipcode = $_POST["zipcode"];
    $phonenumber = $_POST["phonenumber"];
    $IDNumber = $_POST["IDNumber"];
    $sql = "INSERT INTO register (New_user, New_user_lname, Days, Months, Years, Province, City, Streetaddress, Zipcode, Phonenumber, IDnumber) VALUES ('$name','$new_user_lname','$days', '$months', '$year', '$province', '$city', '$streetaddress', $zipcode, 'phonenumber', 'idnumber' )" ;

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



