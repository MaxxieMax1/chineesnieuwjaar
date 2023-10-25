<?php
include("./connect.php");
include("./functions.php");

$id = sanitize($_POST["id"]);
$pwh = sanitize($_POST["pwh"]);
$password = sanitize($_POST["Password"]);
$passwordCheck = sanitize($_POST["PasswordCheck"]);


if(empty($_POST["Password"]) || empty($_POST["PasswordCheck"])) {
    header("location: ./index.php?content=message&alert=password-empty&id=$id&pwh=$pwh");
} elseif (strcmp($password, $passwordCheck)){
    header("location: ./index.php?content=message&alert=nomatch-password&id=$id&pwh=$pwh");
} else {

    $sql = "SELECT * FROM `aanmeldingen` where `id` = $id";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)) {

        $record = mysqli_fetch_assoc($result);
        
        if ($record["activated"]) {
            header("Location: ./index.php?content=message&alert=already-active");
        }else {


            if ( !strcmp($record["Wachtwoord"], $pwh)) {
                $password_hash = password_hash($password, PASSWORD_BCRYPT);
            
                $sql = "UPDATE `aanmeldingen` 
                        SET     `Wachtwoord` = '$password_hash' ,
                                `activated` = 1 
                        WHERE   `id` = $id
                        AND      `Wachtwoord` = '$pwh'";
            
                if (mysqli_query($conn, $sql)) {
                    // succes
                    header("location: ./index.php?content=message&alert=update-success");
                } else {
                    // error
                    header("location: ./index.php?content=message&alert=update-error&id=$id&pwh=$pwh");
                }

            } else {
                header("location: ./index.php?content=message&alert=no-match-pwh");
            }

            }



    }else{
        header("location: ./index.php?content=message&alert=no-id-pwh-match");
    }
}

