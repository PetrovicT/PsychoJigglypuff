
<!-- Urosevic Vera -->

<!DOCTYPE html>
<html>
	<head>
		<title>Uloguj se</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="photos/logo.png" />
		<link rel="stylesheet" href="css/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
		<link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/logovanje.css">
		<style>h1,h2,h3,h4,h5,h6 {font-family: "Oswald"} body {font-family: "Open Sans"}</style>
		<script src = "js/script.js"></script>
	</head>
	
	<body class="w3-light-grey">
 
	 <!-- Header -->
  <header class="w3-bar w3-padding-12 color-dark-blue w3-mobile">
    <!-- S leva nadesno -->
    <a href="pocetna_stranica.html" class="w3-bar-item w3-button letters"><i class="fa fa-home"></i> Home</a>


    <div class="w3-dropdown-hover w3">
      <a href="pregled_pitanja.html" class="w3-bar-item w3-button letters"><i class="fa fa-question-circle-o"></i>
        Kategorije</a>
      <div id="CategoryDropdownMenu" class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="pregled_pitanja.html" class="w3-bar-item w3-button "><i class="fa fa-angle-double-right"></i>
          Anksioznost</a>
        <a href="pregled_pitanja.html" class="w3-bar-item w3-button "><i class="fa fa-angle-double-right"></i>
          Depresija</a>
        <a href="pregled_pitanja.html" class="w3-bar-item w3-button "><i class="fa fa-angle-double-right"></i> Napad
          panike</a>
        <a href="pregled_pitanja.html" class="w3-bar-item w3-button "><i class="fa fa-angle-double-right"></i> Kontrola
          stresa</a>
        <a href="pregled_pitanja.html" class="w3-bar-item w3-button "><i class="fa fa-angle-double-right"></i> Kontrola
          besa</a>
        <a href="pregled_pitanja.html" class="w3-bar-item w3-button "><i class="fa fa-angle-double-right"></i> Porodični
          problemi</a>
        <a href="pregled_pitanja.html" class="w3-bar-item w3-button "><i class="fa fa-angle-double-right"></i> Manjak
          samopouzdanja</a>
        <a href="pregled_pitanja.html" class="w3-bar-item w3-button "><i class="fa fa-angle-double-right"></i> OKP</a>
        <a href="pregled_pitanja.html" class="w3-bar-item w3-button "><i class="fa fa-angle-double-right"></i>
          Depersonalizacija</a>
        <a href="pregled_pitanja.html" class="w3-bar-item w3-button "><i class="fa fa-angle-double-right"></i> <b>Nijedno
            od ponuđenog</b></a>
      </div>
    </div>

    <a href="view_seanse.html" class="w3-bar-item w3-button" style="color: white;"><i class="fa fa-fire"></i> Seanse</a>
    <a href="postavi_pitanje.html" class="w3-bar-item w3-button" style="color: white;"><i class="fa fa-plus-circle"></i>
      Postavi pitanje</a>

    <div class="w3-dropdown-hover w3-right">
      <a href="profil.html" class="w3-bar-item w3-button letters"><i class="fa fa-user"></i> Gost</a>
      <div id="UserDropdownMenu" class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="profilIzmena.html" class="w3-bar-item w3-button"><i class="fa fa-gear"></i> Podešavanja naloga</a>
        <a href="moje_seanse.html" class="w3-bar-item w3-button"><i class="fa fa-heartbeat"></i> Moje seanse</a>
      </div>
    </div>

    <div id="SearchBar" class="w3-right" style="width:346px; max-width: 100%;">
      <a href="pregled_pitanja.html" class="w3-bar-item w3-button w3-right letters"><i class="fa fa-search"></i></a>
      <input id="SearchField" class="w3-bar-item w3-right" type="text" placeholder="Pretraži"
        style="width:300px; max-width:calc(100% - 46px);">
    </div>
  </header>
 
 <!-- Logovanje-->
 <div class="logovanje">
      <div class="wrapper">
        <div class="Naslov"><b>Formular za logovanje</b></div>

      <div class="form-container">
          <div class="form-inner">
              <form action="#" class="login">
                 <div class="field">
                  <input type="text" placeholder="Korisnicko ime" required>
                </div> 
                <div class="field">
                    <input type="password" placeholder="Sifra" required>
                  </div> 
                  <div class="field">
                    <input type="submit" value="Ulogujte se">
                </div>
                <div class="singup-link">
                    Nemate korisnicki nalog? <a href="registracija.html"><b>Registrujte se</b></a>
                </div>
              </form>
          </div>
      </div>
    </div>

</div>
      <!-- Logovanje -->


	<!-- Footer -->
	<footer class="w3-container color-dark-blue" style="padding:32px">
		<div class="w3-left">
			<a href="#" class="w3-button w3-light-gray w3-padding-large w3-margin-bottom"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
			<p style="color: white; font-weight: normal;">Web portal za psihološko savetovanje</p>
			<p style="color: white; font-weight: normal;">Projekat iz predmeta "Principi softverskog inženjerstva"</p>
			<p style="color: white; font-weight: normal;">Tim Jigglypuff <i class="fa fa-copyright"></i> all rights reserved</p>
		</div>
		<div class="w3-right">
			<img id="JigglypuffFooterImage"  src="https://upload.wikimedia.org/wikipedia/en/2/22/Pok%C3%A9mon_Jigglypuff_art.png"></img>
			<img id="Mouth" src="images/mouth.png"></img>
		</div>
	</footer>

	</body>
</html>
 