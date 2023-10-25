<main class="container mt-5">
        <div class="row">
            <div class="col-12" id="login">

                <form action="./index.php?content=login_script" method="POST">
                <div class="form-group">
                    <label for="email" id="administratieText">E-mailadres</label>
                    <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Voer je E-mailadres in">
                </div>

                <div class="form-group">
                    <label for="password" id="administratieText">Wachtwoord</label>
                    <input type="password" class="form-control" id="password" aria-describedby="passwordHelp" name="password" placeholder="Voer je wachtwoord in">
                </div>

                <button type="submit" class="btn btn-danger btn-lg btn-block">login</button>
            </form>

        </div>
    </div>
    </main>