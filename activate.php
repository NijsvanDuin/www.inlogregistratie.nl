<?php

    if(!(isset($_GET["content"]) && isset($_GET["id"]) && isset($_GET["pwh"])) ){
        header("Location: ./index.php?content=massege&alert=hacker");
    }

?>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-sm-6">
            <form action="./index.php?content=activate_script" method="post">
                <div class="form-group">
                    <label for="InputPassword">Kies een nieuw wachtwoord:</label>
                    <input name="password" type="password" class="form-control" id="InputPassword" aria-describedby="emailHelp" placeholder="Wachtwoord" autofocus>
                    <br>
                </div>
                <div class="form-group">
                    <label for="InputPasswordCheck">Type het wachtwoord opnieuw:</label>
                    <input name="passwordCheck" type="password" class="form-control" id="InputPasswordCheck" aria-describedby="emailHelp" placeholder="Opnieuw wachtwoord">
                    <br>
                </div>
                <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
                <input type="hidden" name="pwh" value="<?php echo $_GET["pwh"]; ?>">
                <button type="submit" class="btn btn-success btn-lg">Activeer</button>
            </form>
        </div>
        <div class="col-12 col-sm-6">
            <img src="./img/kersen.png" alt="kersen" class="w-25 mx-auto d-block">
        </div>
    </div>
</div>