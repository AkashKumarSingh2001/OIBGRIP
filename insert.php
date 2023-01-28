<?php

    $con = new mysqli("localhost","root","","portfolio");

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $query = $_POST['query'];

    $sql = "INSERT INTO contact(r_name,r_phone,r_email,r_query)values('$name','$phone','$email','$query')";

    if(mysqli_query($con,$sql))
    {
        echo "Data get saved to database";
    }
    else
    {
        echo "Data not saved try again ";
    }
?>