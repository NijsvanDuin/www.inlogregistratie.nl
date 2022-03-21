<?php
$alert = (isset($_GET["alert"])) ? $_GET["alert"] : "default";
$id = (isset($_GET["id"])) ? $_GET["id"] : "";
$pwh = (isset($_GET["password"])) ? $_GET["pwh"] : "";
$email = (isset($_GET["email"])) ? $_GET["email"] : "";

switch ($alert) {
    case "no-email":
        echo '<div class="alert alert-warning mt-5 w-50 mx-auto" role="alert">
            U heeft geen email ingevoert, probeer opnieuw...
          </div>';
        header("Refresh: 3; ./index.php?content=register");
        break;
    case "emailexist":
        echo '<div class="alert alert-warning mt-5 w-50 mx-auto" role="alert">
            Het door u ingevulde email bestaat al, probeer opnieuw met een ander email...
          </div>';
        header("Refresh: 3; ./index.php?content=register");
        break;
    case "register-error";
        echo '<div class="alert alert-danger mt-5 w-50 mx-auto" role="alert">
            Er is iets fout gegaan met het regitratieprosses... Probeer het nogmaals of neem contact op met 333736@student.mboutrecht.nl
            </div>';
        header("Refresh: 3; ./index.php?content=register");
        break;
    case "register-succses";
        echo '<div class="alert alert-success mt-5 w-50 mx-auto" role="alert">
            U bent succesvol geregistreert. U ontvangt een e-mail met een activatie-link. 
        </div>';
        header("Refresh: 3; ./index.php?content=login");
        break;
    case "hacker";
        echo '<div class="alert alert-danger mt-5 w-50 mx-auto" role="alert">
            U heeft geen rechten voor deze pagina(GFYS) 
        </div>';
        header("Refresh: 3; ./index.php?content=home");
        break;
    case "emtypass":
        echo '<div class="alert alert-warning mt-5 w-50 mx-auto" role="alert">
                Een van de wachtwoord velden is leeg, probeer opnieuw...
              </div>';
        header("Refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");
        break;
    case "nomatchpass":
        echo '<div class="alert alert-warning mt-5 w-50 mx-auto" role="alert">
                    Wachtwoorden zijn niet gelijk, probeer opnieuw...
                  </div>';
        header("Refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");
        break;
    case "noidpqhmatch":
        echo '<div class="alert alert-warning mt-5 w-50 mx-auto" role="alert">
                        U staat niet in onze database, u wordt doorgestuurt naar de registatiepagina...
                      </div>';
        header("Refresh: 3; ./index.php?content=register");
        break;
    case "suc-up":
        echo '<div class="alert alert-success mt-5 w-50 mx-auto" role="alert">
                            Uw account is geactiveert! U wordt nu doorgestuurt naar de inlogpagina...
                          </div>';
        header("Refresh: 3; ./index.php?content=login");
        break;
    case "err-up":
        echo '<div class="alert alert-danger mt-5 w-50 mx-auto" role="alert">
                            Het registratieproses is niet gelukt, kies een nieuw wachtwoord...
                          </div>';
        header("Refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");
        break;
    case "already-active":
        echo '<div class="alert alert-danger mt-5 w-50 mx-auto" role="alert">
                            Het account is al geactiveert....
                             </div>';
        header("Refresh: 3; ./index.php?content=login");
        break;
    case "no-match-pwh":
        echo '<div class="alert alert-danger mt-5 w-50 mx-auto" role="alert">
                             De activatielinkgegevens zijn niet correct, registreer opnieuw....
                              </div>';
        header("Refresh: 3; ./index.php?content=register");
        break;
    case "no-email-or-password":
        echo '<div class="alert alert-warning mt-5 w-50 mx-auto" role="alert">
                                 Een van de velden zijn leeg, Probeer opnieuw....
                                  </div>';
        header("Refresh: 3; ./index.php?content=login");
        break;
    case "email-un":
        echo '<div class="alert alert-warning mt-5 w-50 mx-auto" role="alert">
                                     Uw ingevoerde email is bij ons niet bekend, Probeer opnieuw....
                                      </div>';
        header("Refresh: 3; ./index.php?content=login");
        break;
    case "non-act":
        echo '<div class="alert alert-danger mt-5 w-50 mx-auto" role="alert">
                                         Uw account is nog niet geregistreerd , Check uw mail <span class="email-mes"> '. $email . ' </span>  voor de activatie link....
                                          </div>';
        header("Refresh: 3; ./index.php?content=login");
        break;
        case "pw-and-pwh-no":
            echo '<div class="alert alert-danger mt-5 w-50 mx-auto" role="alert">
                                        Uw ingevulde wachtwoord voor het email <span class="email-mes"> '. $email . ' </span> is niet correct, Probeer opnieuw....
                                          </div>';
            header("Refresh: 3; ./index.php?content=login");
            break;

    default:
        header("Location: ./index.php?content=home");
        break;
}
?>