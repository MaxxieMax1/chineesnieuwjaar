<?php
    $alert = (isset($_GET["alert"]))? $_GET["alert"]: "default";
    $id = (isset($_GET["id"]))? $_GET["id"]: "";
    $pwh = (isset($_GET["pwh"]))? $_GET["pwh"]: "";
    $email = (isset($_GET["email"]))? $_GET["email"]: "";


    switch($alert){
        case "no-email" : 
            echo '<div class="alert alert-danger mt-5  w-50 mx-auto" role="alert">
            U heeft geen email ingevult, probeer het opnieuw
          </div>';
          header("refresh: 3; ./index.php?content=registratie");
        break;
        case "emailexists" :
            echo '<div class="alert alert-warning mt-5  w-50 mx-auto" role="alert">
           Het email bestaat al, probeer het opnieuw
          </div>';
          header("refresh: 3; ./index.php?content=registratie");
        break;
        case "register_error" :
          echo '<div class="alert alert-danger mt-5  w-50 mx-auto" role="alert">
          Het is niet gelukt, probeer het opnieuw
         </div>';
         header("refresh: 3; ./index.php?content=registratie");
        break;
        case "register_success" :
          echo '<div class="alert alert-danger mt-5  w-50 mx-auto" role="alert">
          Het is gelukt, U wordt verder doorgestuurd
         </div>';
         header("refresh: 3; ./index.php?content=login");
        break;
        case "register-error" :
          echo '<div class="alert alert-danger mt-5  w-50 mx-auto" role="alert">
          Het is niet gelukt, U wordt weer teruggestuurd.
         </div>';
         header("refresh: 3; ./index.php?content=login");
        break;
        case "hacker-alert" :
          echo '<div class="alert alert-danger mt-5  w-50 mx-auto" role="alert">
          U heeft geen rechten op deze pagina.
         </div>';
         header("refresh: 3; ./index.php?content=homepage");
        break;
        case "password-empty" :
          echo '<div class="alert alert-danger mt-5  w-50 mx-auto" role="alert">
          U heeft een van beide velden niet ingevuld, probeer opnieuw.
         </div>';
         header("refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");
        break;
        case "nomatch-password" :
          echo '<div class="alert alert-danger mt-5  w-50 mx-auto" role="alert">
          U heeft niet het zelfde wachtwoord ingevuld, probeer opnieuw.
         </div>';
         header("refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");
        break;
        case "no-id-pwh-match" :
          echo '<div class="alert alert-danger mt-5  w-50 mx-auto" role="alert">
          U bent niet geregistreerd in de database, u wordt doorgestuurd naar de registratiepagina.
         </div>';
         header("refresh: 3; ./index.php?content=Registratie");
        break;
        case "update-success" :
          echo '<div class="alert alert-success mt-5  w-50 mx-auto" role="alert">
          Uw wachtwoord is geupdated.
         </div>';
         header("refresh: 3; ./index.php?content=login");
        break;
        case "update-error" :
          echo '<div class="alert alert-danger mt-5  w-50 mx-auto" role="alert">
          Het is niet gelukt, probeer het opnieuw.
         </div>';
         header("refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");
        break;
        case "loginform-empty" :
          echo '<div class="alert alert-danger mt-5  w-50 mx-auto" role="alert">
          Een van bijde velden zijn niet ingevult, probeer het opnieuw.
         </div>';
         header("refresh: 3; ./index.php?content=login");
        break;
        case "email-unknow" :
          echo '<div class="alert alert-danger mt-5  w-50 mx-auto" role="alert">
          Het email is niet bekent, probeer het opnieuw.
         </div>';
         header("refresh: 3; ./index.php?content=login");
        break;
        case "not-activated" :
          echo '<div class="alert alert-danger mt-5  w-50 mx-auto" role="alert">
          Uw account is nog niet geactiveerd. check uw email <span class="badge badge-danger p-2">'. $email .'</span>
         </div>';
         header("refresh: 8; ./index.php?content=login");
        break;
        case "already-active" :
          echo '<div class="alert alert-danger mt-5  w-50 mx-auto" role="alert">
          Uw account al geactiveerd.
         </div>';
         header("refresh: 3; ./index.php?content=login");
        break;
        case "no-match-pwh" :
          echo '<div class="alert alert-danger mt-5  w-50 mx-auto" role="alert">
          Het wachtwoord is niet gelijk.
         </div>';
         header("refresh: 3; ./index.php?content=login");
        break;
        case "no-pw-match" :
          echo '<div class="alert alert-danger mt-5  w-50 mx-auto" role="alert">
          Uw ingevulde wachtwoord voor het emailadres <span class="badge badge-danger p-2">'. $email .'</span> is niet correct, probeer het opnieuw.
         </div>';
         header("refresh: 8; ./index.php?content=login");
        break;
        case "logout" :
          echo '<div class="alert alert-success mt-5  w-50 mx-auto" role="alert">
          U bent uitgelogd, u wordt doorgewezen naar de homepage.
         </div>';
         header("refresh: 5; ./index.php?content=homepage");
        break;
        case "auth-error" :
          echo '<div class="alert alert-danger mt-5  w-50 mx-auto" role="alert">
          U heeft nog geen account aangemaakt, doe dat eerst.
         </div>';
         header("refresh: 5; ./index.php?content=login");
        break;
        case "contact" :
          echo '<div class="alert alert-success mt-5  w-50 mx-auto" role="alert">
         Het is verzonden, u wordt doorgewezen naar de homepage.
         </div>';
         header("refresh: 5; ./index.php?content=homepage");
        break;
        default:
            header("./index.php?content=home");
    break;
    }
?>
