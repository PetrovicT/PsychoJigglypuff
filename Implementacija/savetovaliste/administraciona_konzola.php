
<!-- Katzenberger Viktor -->

<!DOCTYPE html>
<html>
	<head>
		<title>Administracija</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="photos/logo.png" />
		<link rel="stylesheet" href="css/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
		<link rel="stylesheet" href="css/style.css">
		<style>h1,h2,h3,h4,h5,h6 {font-family: "Oswald"} body {font-family: "Open Sans"}</style>
		<script src = "js/script.js"></script>
		<script src = "js/Administrative.js"></script>
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
		  <a href="profil.html" class="w3-bar-item w3-button letters"><i class="fa fa-user"></i> Admin</a>
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
	  
	<!-- w3-content defines a container for fixed size centered content, 
	and is wrapped around the whole page content, except for the footer in this example -->
	<div class="w3-content" style="max-width:1600px">

	  <!-- Upper Row -->
	  <div class="w3-row w3-padding">

		<!-- Left panel -->
		<div class="w3-col l6 s12">
		
		  <!-- Panel -->
		  <div class="w3-container w3-light-grey w3-margin w3-padding-large w3-card-4" style="height:300px; max-height:80%;">
			<div class="w3-center" style="position:relative; top:20%;">
			  <h3>Brisanje korisničkog naloga</h3>
			  <input class="w3-input w3-light-grey" type="text" placeholder="Korisničko ime za brisanje" style="width:60%; margin:auto; text-align:center"></input>
			  <br>
			  <button class="w3-button buttons">Izbriši</button>
			</div>
		  </div>
		</div>

		<!-- Right panel-->
		<div class="w3-col l6 s12">
		
		  <!-- Panel -->
		  <div class="w3-container w3-light-grey w3-margin w3-padding-large w3-card-4" style="height:300px; max-height:80%;">
			<div class="w3-center" style="position:relative; top:20%;">
			  <h3>Brisanje pitanja</h3>
			  <input class="w3-input w3-light-grey" type="text" placeholder="ID pitanja za brisanje" style="width:60%; margin:auto; text-align:center"></input>
			  <br>
			  <button class="w3-button buttons">Izbriši</button>
			</div>
		  </div>
		</div>

	  <!-- END GRID -->
	  </div>
	  
	  <!-- Lower Row -->
	  <div class="w3-row w3-padding">
	  
		<!-- Panel -->
		<div class="w3-container w3-light-grey w3-margin w3-padding-large w3-card-4 w3-center">
		
			<div style = "width:100%; margin:auto;">
			  <h3>Unapređenje u psihologa</h3>
			
			  <!-- Left side -->
			  <div class="w3-col l8 s12">
				<div style="position:relative; top:30%; overflow:scroll; height:300px">
				  <table class="w3-table-all w3-hoverable">
					<tr>
						<th>Korisničko ime</th>
						<th>Ime</th>
						<th>Mejl adresa</th>
						<th>Dokumentacija</th>
					</tr>
					<tr onclick="inputIntoPromotionField(this)">
						<td>AnjaJov</td>
						<td>Anja Jovanović</td>
						<td>anja.jovanovic@gmail.com</td>
						<td><u onclick="alert('Sada se skida dokumentacija...')">Skini</u></td>
					</tr>
					<tr onclick="inputIntoPromotionField(this)">
						<td>ThePera</td>
						<td>Pera Perić</td>
						<td>asdw@asdwmail.com</td>
						<td><u onclick="alert('Sada se skida dokumentacija...')">Skini</a></td>
					</tr>
					<tr onclick="inputIntoPromotionField(this)">
						<td>AnjaJov</td>
						<td>Anja Jovanović</td>
						<td>anja.jovanovic@gmail.com</td>
						<td><u onclick="alert('Sada se skida dokumentacija...')">Skini</u></td>
					</tr>
					<tr onclick="inputIntoPromotionField(this)">
						<td>ThePera</td>
						<td>Pera Perić</td>
						<td>asdw@asdwmail.com</td>
						<td><u onclick="alert('Sada se skida dokumentacija...')">Skini</a></td>
					</tr><tr onclick="inputIntoPromotionField(this)">
						<td>AnjaJov</td>
						<td>Anja Jovanović</td>
						<td>anja.jovanovic@gmail.com</td>
						<td><u onclick="alert('Sada se skida dokumentacija...')">Skini</u></td>
					</tr>
					<tr onclick="inputIntoPromotionField(this)">
						<td>ThePera</td>
						<td>Pera Perić</td>
						<td>asdw@asdwmail.com</td>
						<td><u onclick="alert('Sada se skida dokumentacija...')">Skini</a></td>
					</tr><tr onclick="inputIntoPromotionField(this)">
						<td>AnjaJov</td>
						<td>Anja Jovanović</td>
						<td>anja.jovanovic@gmail.com</td>
						<td><u onclick="alert('Sada se skida dokumentacija...')">Skini</u></td>
					</tr>
					<tr onclick="inputIntoPromotionField(this)">
						<td>ThePera</td>
						<td>Pera Perić</td>
						<td>asdw@asdwmail.com</td>
						<td><u onclick="alert('Sada se skida dokumentacija...')">Skini</a></td>
					</tr><tr onclick="inputIntoPromotionField(this)">
						<td>AnjaJov</td>
						<td>Anja Jovanović</td>
						<td>anja.jovanovic@gmail.com</td>
						<td><u onclick="alert('Sada se skida dokumentacija...')">Skini</u></td>
					</tr>
					<tr onclick="inputIntoPromotionField(this)">
						<td>ThePera</td>
						<td>Pera Perić</td>
						<td>asdw@asdwmail.com</td>
						<td><u onclick="alert('Sada se skida dokumentacija...')">Skini</a></td>
					</tr><tr onclick="inputIntoPromotionField(this)">
						<td>AnjaJov</td>
						<td>Anja Jovanović</td>
						<td>anja.jovanovic@gmail.com</td>
						<td><u onclick="alert('Sada se skida dokumentacija...')">Skini</u></td>
					</tr>
					<tr onclick="inputIntoPromotionField(this)">
						<td>ThePera</td>
						<td>Pera Perić</td>
						<td>asdw@asdwmail.com</td>
						<td><u onclick="alert('Sada se skida dokumentacija...')">Skini</a></td>
					</tr><tr onclick="inputIntoPromotionField(this)">
						<td>AnjaJov</td>
						<td>Anja Jovanović</td>
						<td>anja.jovanovic@gmail.com</td>
						<td><u onclick="alert('Sada se skida dokumentacija...')">Skini</u></td>
					</tr>
					<tr onclick="inputIntoPromotionField(this)">
						<td>ThePera</td>
						<td>Pera Perić</td>
						<td>asdw@asdwmail.com</td>
						<td><u onclick="alert('Sada se skida dokumentacija...')">Skini</a></td>
					</tr>
					
				  </table>
				</div>
			  </div>
			  
			  <!-- Right side -->
			  <div class="w3-col l4 s12">
				<div style = "height: 80px;"></div>
				<div class="w3-center">
				  <input readonly id="usernameForPromotion" class="w3-input w3-light-grey" type="text" placeholder="Klikni na korisnika za unapređenje" style="margin:auto; text-align:center"></input>
				  <br>
				  <button class="w3-button buttons" >Prihvati zahtev</button>
				  <button class="w3-button buttons" >Odbij zahtev</button>
				</div>
			  </div>
			</div>
		</div>

	  <!-- END GRID -->
	  </div>	  

	<!-- END w3-content -->
	</div>

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
