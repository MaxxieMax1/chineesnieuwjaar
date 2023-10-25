<?php
    if (empty($_POST["email"])) {
        header("location: ./index.php?content=message&alert=no-email");
    } else {
        include("./connect.php");
        include("./functions.php");
    
        $email = sanitize($_POST["email"]);



        $sql = "SELECT * FROM `aanmeldingen` WHERE `email` = '$email'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)) {
            // melding email bestaat
            header("location: ./index.php?content=message&alert=emailexists");
        } else {


            //  toevoegen aan db
            $password = "TEST";
            $password_hash = password_hash($password, PASSWORD_BCRYPT);


            $sql= "INSERT INTO `aanmeldingen` (`id`,
                                                `email`,
                                                `Wachtwoord`,
                                                `userrole`,
                                                `activated`)
                        VALUES                  (NULL,
                                                '$email',
                                                '$password_hash',
                                                'customer',
                                                0)";


mysqli_query($conn, $sql);
$id = mysqli_insert_id($conn);

        if ($result){
            //email versturen
            $to = $email;
            $subject = "Activatie link voor uw account";
        
            $message = '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            <body>
                <h1>Geachte aanmelder,</h1>
                <p>U heeft zich zojuist geregistreerd op de site www.ChineesVuurWerk.nl</p>
                <p>Om te klikken op de onderstaande link kunt u het acrivatieproces voltooien.</P>
                <p>Klik op deze link <a href="http://www.ChineesVuurWerk.nl/index.php?content=activate&id=' .$id. '&pwh=' .$password_hash. '">hier</a> om je te regristreren</P>
                <p>Bedankt voor het registreren</p>
                <p>Met vriendelijke groet,</p>
                <p>M. Breunesse</p>
                <p>CEO ChineesVuurWerk.nl</p>
            </body>
            </html>';
        
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset-UTF-8\r\n";
            $headers .= "From: admin@FantastischVuurwerk.org\r\n";
            $headers .= "Cc: Max.breunesse@gmail.com\r\n";
            $headers .= "Bcc: ikjijenhij@gmail.com";
        
            mail($to, $subject, $message, $headers);
            header("Location: ./index.php?content=message&alert=success");
        }else {
            //error meldinga
            header("location: ./index.php?content=message&alert=register_error");
        }

        }       
    }
?>