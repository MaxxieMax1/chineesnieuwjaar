<?php session_start(); session_gc(); 

$active = (isset($_GET["content"])) ? $_GET["content"] : "";
?>

<nav class="navbar navbar-expand-lg ">
  <a class="navbar-brand" id="nav_text_1" href="#"> <img src="./images/agilelogo.png" width="80" height="80" class="d-inline-block align-top" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <ul class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php?content=homepage" id="nav_text_1">Home<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" id="nav_text_1" href="index.php?content=productenpage">Producten</a>
      <a class="nav-item nav-link" id="nav_text_1" href="index.php?content=chineesnieuwjaar">Chinees Nieuwjaar</a>
      
      <!-- contact moet misschien weer loesoe -->
      <!-- <a class="nav-item nav-link" id="nav_text_1" href="index.php?content=contactinfo">Contact</a> -->
    </ul>

    <ul class="navbar-nav ml-auto">
      <!-- <a class="nav-item nav-link" id="nav_text_1" href="index.php?content=Registratie">Registratie</a>
      <a class="nav-item nav-link" id="nav_text_1" href="index.php?content=login">Inloggen</a>
      <a class="nav-item nav-link" id="nav_text_1" href="index.php?content=logout">Uitloggen</a> -->
<?php
    if (isset($_SESSION["id"])) {
      echo '<li class="nav-item '; echo ($active == "logout")? "active" : ""; echo '">
                <a class="nav-link" id="nav_text_1" href="./index.php?content=logout">Uitloggen</a>
            </li>';
    } else {
      echo '<li class="nav-item '; echo ($active == "register")? "active" : ""; echo '">
                <a class="nav-link" id="nav_text_1" href="./index.php?content=Registratie">Registratie</a>
            </li>
            <li class="nav-item '; echo ($active == "login")? "active" : ""; echo '">
                <a class="nav-link" id="nav_text_1" href="./index.php?content=login">Inloggen</a>
            </li>';
    }
    // contact moet misschien weer loesoe
   echo '<li class="nav-item '; echo ($active == "contact")? "active" : ""; echo '">
                <a class="nav-link" id="nav_text_1" href="./index.php?content=contactinfo">Contact</a>
            </li>';
?>


    <!-- <li class="nav-item <?php echo ($active == "login")? "active" : '' ?>
        <a class="nav-link" id="nav_text_1" href="./index.php?content=login">Inloggen</a>
    </li> -->
    <!-- <li class="nav-item <?php echo ($active == "logout")? "active" : '' ?>">
        <a class="nav-link" id="nav_text_1" href="./index.php?content=logout">Uitloggen</a>
    </li> -->
    </ul>
  </div>
</nav>