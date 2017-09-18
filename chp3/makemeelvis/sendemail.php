<?php
    $from = 'dan.mccune@greenbarlabs.com';
    $subject = $_POST['subject'];
    $text = $_POST['elvismail'];

    $dbc = mysqli_connect('localhost', 'root', 'root', 'elvis_store')
    or die('oooo noooo, cannot connect to mysql server');

    $query='SELECT * FROM email_list';
    $result = mysqli_query($dbc, $query)
        or die('error loading database');

    while($row = mysqli_fetch_array($result)) {
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];

        $msg = "Dear $first_name $last_name, \n $text";
        $to = $row['email'];
        mail($to, $subject, $msg, 'From:' . $from);
        echo 'Email sent to: '.$to .'<br />';
    }
    mysqli_close($dbc);