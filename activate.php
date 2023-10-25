<?php
    if (!(isset($_GET["content"]) && isset($_GET["id"]) && isset ($_GET["pwh"])) ){
    header("location: ./index.php?content=message&alert=hacker-alert");
    }
?>

<body>
    <main class="container mt-5">
        <div class="row">
            <div class="col-12">
                <form action="./index.php?content=activate_script" method="POST">
                    <div class="form-group">
                        <label for="Password" id="administratieText">Kies hier uw nieuwe wachtwoord</label>
                        <input name="Password" type="password" class="form-control" id="Password" aria-describedby="PasswordHelp"  placeholder="Wachtwoord invullen">
                    </div>
                    <div class="form-group">
                        <label for="PasswordCheck" id="administratieText">Type het wachtwoord opnieuw</label>
                        <input name="PasswordCheck" type="password" class="form-control" id="Password" aria-describedby="PasswordHelpCheck"  placeholder="Wachtwoord invullen">
                    </div>
                    <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
                    <input type="hidden" name="pwh" value="<?php echo $_GET["pwh"]; ?>">
                    <button type="submit" class="btn btn-danger btn-lg btn-block">Versturen</button>
                </form>
            </div>
        </div>
    </main>
</body>