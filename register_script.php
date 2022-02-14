<?php
    var_dump($_POST["email"]);

    if (empty($_POST["email"]))
    {
        header("Location: ./index.php?content=massege&alert=no-email");
    } else {

    }
?>