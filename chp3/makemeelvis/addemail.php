<?php

    $dbc = mysqli_connect('localhost', 'root', 'root', 'elvis_store')
    or die('oooo noooo, cannot connect to mysql server');

    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];

    $query = "INSERT INTO email_list(first_name, last_name, email)".
    "VALUES('$first_name', '$last_name','$email')";

    mysqli_query($dbc, $query)
    or die("Cannot query Database!!!!");


    echo 'Customer Added';

    mysqli_close($dbc);
?>