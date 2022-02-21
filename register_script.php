<?php
    var_dump($_POST["email"]);

    if (empty($_POST["email"]))
    {
        header("Location: ./index.php?content=massege&alert=no-email");
    } else {
        include("./connect_db.php");
        include("./functions.php");

        $email = sanitize($_POST["email"]);

        $sql = "SELECT * FROM `register` WHERE `email` = '$email'";

        $result = mysqli_query($conn, $sql);

       if( mysqli_num_rows($result)) {
        //hij bestaat
       } else {
        //hij bestaaat niet
       }
    }
?>