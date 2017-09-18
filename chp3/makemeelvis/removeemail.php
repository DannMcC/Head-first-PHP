<?php

    $dbc = mysqli_connect('localhost', 'root', 'root', 'elvis_store')
    or die('Error connecting to Database');

    $email=$_POST['email'];

    $query="DELETE FROM email_list WHERE email='$email'";

    mysqli_query($dbc, $query)
    or die("Cannot query Database!!!!");

    echo'Customer Removed' . $email;

    mysqli_close($dbc);

