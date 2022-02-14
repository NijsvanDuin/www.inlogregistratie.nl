<?php
    $alert = (isset($_GET["alert"]))? $_GET["alert"]: "default";

    switch($alert) {
        case "no-email":
            echo '<div class="alert alert-warning mt-5" role="alert">
            U heeft geen email ingevoert, probeer opnieuw...
          </div>';
          header("Refresh: 3; ./index.php?content=register");
        break;
        case "":

        break;
        default:
            header("Location: ./index.php?content=home"); 
        break;
    }
?>