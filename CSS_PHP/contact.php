<!DOCTYPE=html>
<hmtl>

    <head>
        <meta charset=UTF-8 lang="fr">
        <title>Aide Biographie Yoann PERIQUOI</title>
        <link rel="stylesheet" type="text/css" href="test.css">
    </head>

    <body>

        <header class="titre1">
            <nav>
                <ul>
                    <div class="topnav">
                        <li id="liste">
                            <a href="test.html">Acceuil</a>
                        </li>
                        <li id="liste1">
                            <a href="test.html">Qui suis-je ?</a>
                        </li>
                        <li id="liste2">
                            <a href="centre dinteret.html">Centre d'intérêt</a>
                        </li>
                        <li id="liste2">
                            <a href="mesproches.html">Mes proches</a>
                        </li>
                        <li class="dropdown">
                            <button class="dropbtn">Médias</button>
                            <div class="dropdown-content">
                                <a href="galerie.html">Photo</a>
                                <a href="video.html">Vidéo</a>
                            </div>
                        </li>
                        <li id="liste3">
                            <a href="contact.html">Contact</a>
                        </li>
                </ul>

            </nav>

            </div>

            <aside>

                <div class="social">

                    <a href="https://www.facebook.com/yoann.periquoi.5">
                        <img class=margin src='facebook.png' alt=facebook style="width:20px;height:20px" />
                    </a>

                    <a href="https://twitter.com/YoannPeriquoi">

                        <img class=margin src='twitter.png' alt=twitter style="width:20px;height:20px" />

                    </a>

                    <a href="https://www.instagram.com/yoann.periquoi">

                        <img class=margin src='instagram.png' alt=instagram style="width:20px;height:px" />

                    </a>

                </div>

            </aside>

            </div>

            <h1>Ma meilleur vie : l'histoire de Yoann PERIQUOI (contact)</h1>

            <img src='moi.jpg' alt=YoannPERIQUOI style="width:180px;height:230px" />

        </header>

        <body>

            <section>

                <header>

                    <h2>Contact</h2>

                </header>

                <p>
                    Merci de votre requête nous allons faire de notre mieux pour vous faire un retour dans les plus courts délais possible.
                </p>
                <?php
		$nom = $_POST["nom"];
		$prenom = $_POST["prenom"];
		$email = $_POST["email"];
		$tel = $_POST["tel"];
		$motif = $_POST["motif"];
		$visite = $_POST["visite"];
		$text = $_POST["message"];
			if ( ! empty($_POST)){
				if (empty($_POST["nom"])){
					echo "Veuillez indiquer votre nom.";	
				}
				elseif (empty($_POST["prenom"])){
					echo "Veuillez indiquer votre prénom.";
				}
				elseif (empty($_POST["email"])){
					echo "Veuillez indiquer votre e-mail.";
				}
				elseif (empty($_POST["motif"])){
					echo "Veuillez indiquer votre motif.";
				}
				elseif (empty($_POST["visite"])){
					echo "Veuillez indiquer si c'est la première fois que vous visitez notre site.";
				}
				elseif (empty($_POST["message"])){
					echo "Veuillez envoyer un message.";
				}
				elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
					echo "Email invalide.";
				}
				else{
					echo "<li> Votre nom : " . $nom;
					echo "<li> Votre prénom : " . $prenom;
					echo "<li> Votre email : " . $email;
					echo "<li> Votre numéro de téléphone : " . $tel;
					echo "<li> Votre motif de contact : " . $motif;
					echo "<li> C'est votre première visite : " . $visite;
					echo "<li> Votre requête : " . $text;
					echo "<li> Votre requête a bien été prise en compte.";
				}
			}

			echo "<li> Cliquez <a href='contact.html'>ici</a> pour revenir au formulaire.";
		?>
            </section>
            <footer>

                <div class=botnav>

                    <p class=signature>

                        Yoann PERIQUOI G5 D.U.T INFORMATIQUE CLERMONT-FERRAND

                        <a class=right href="https://www.facebook.com/yoann.periquoi.5">
                            <img class=margin src='facebook.png' alt=facebook style="width:20px;height:20px" />
                        </a>

                        <a class=right href="https://twitter.com/YoannPeriquoi">

                            <img class=margin src='twitter.png' alt=twitter style="width:20px;height:20px" />

                        </a>

                        <a class=right href="https://www.instagram.com/yoann.periquoi">

                            <img class=margin src='instagram.png' alt=instagram style="width:20px;height:px" />

                        </a>
                    </p>

                </div>

                </div>

            </footer>
        </body>