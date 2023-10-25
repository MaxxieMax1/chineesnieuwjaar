<?php
// maakt de laadjes leeg met unset
    var_dump($_SESSION);
    unset($_SESSION["id"]);
    unset($_SESSION["userrole"]);

    var_dump($_SESSION);

// verwijderd de gehele sessie
    session_destroy();

    header("location: ./index.php?content=message&alert=logout");
?>