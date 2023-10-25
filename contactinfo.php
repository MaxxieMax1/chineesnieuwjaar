    <form name="contactform" method="post" action="index.php?content=message&alert=contact">

    <div class="wrapper">
  <div class="content" id="contactH1" >
    <h1 class="h1-contact">CONTACT PAGINA</h1>
  </div>

  <div class="form">
  

    <div class="top-form">
      <div class="inner-form" >
      <div class="label" for="first_name" style="color: white;" >Voornaam <font color="red"> <b>*</b> </font> </div>    
      <input  type="text" placeholder="Je voornaam..." name="first_name" maxlength="50" size="30" required>
      </div>
    
    
  
      <div class="inner-form">
      <div class="label" for="last_name" style="color: white;">Achternaam <font color="red"> <b>*</b> </font> </div>    
      <input  type="text" placeholder="Jouw Achternaam..." name="last_name" maxlength="50" size="30" required>
      </div>
    
    
  
      <div class="inner-form">
      <div class="label" for="telephone" style="color: white;">Telefoon nummer <font color="red"> <b>*</b> </font></div>    
      <input  type="text" placeholder="Jouw Telefoon nummer..." name="telephone" maxlength="10" size="30">
      </div>


    </div>
    <div class="middle-form">

      <div class="inner-form">
      <div class="label" for="email" style="color: white;">email adres <font color="red"> <b>*</b> </font> </div>    
      <input  type="text" placeholder="Jouw E-Mail..." name="email" maxlength="80" size="30" required>
      </div>

      <div class="inner-form">
      <div class="label" for="title" style="color: white;">Onderwerp <font color="red"> <b>*</b> </font> </div>    
      <input  type="text" placeholder="Jouw Onderwerp..." name="title" maxlength="80" size="30" required>
      </div>
    </div>
  
    <div class="bottom-form">
      <div class="inner-form">
      <div class="label" for="comments" style="color: white;">Beschrijving <font color="red"> <b>*</b> </font> </div>    
      <textarea  placeholder="Jouw Beschrijving..." name="comments" maxlength="1000" cols="25" rows="6" required></textarea>
    
      </div>
    </div>
  
    <!-- <input class="btn" type="submit" value="" a href="index.php?content=contaactinfo"> -->
    <button type="" class="btn btn-danger btn-lg btn-block">Versturen</button>

    </div>
</div>
    </form>