ahome
<?php

    if (!isset($_SESSION["id"])){
        header("location: ./index.php?content=message&alert=auth-error");
    }

?>





<?php
// var_dump($_SESSION);

// unset($_SESSION["id"]);
// unset($_SESSION["userrole"]);
// session_unset();
// echo session_id();
// echo "<hr>";
// session_destroy();

// var_dump($_SESSION);

echo "mijn gebruikersrol is: " . $_SESSION["userrole"];
echo "<hr>";
echo "mijn id is: " . $_SESSION["id"];

?>