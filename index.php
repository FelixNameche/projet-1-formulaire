<?php



if(isset($_POST['submit'])){

    $nom=($_POST['nom']);
    $prenom=($_POST['prenom']);
    $sexe=($_POST['genre']);
    $email=($_POST['email']);
    $pays=($_POST['pays']);
    $message=($_POST['message']);
}

//Sanitisation
$options = array(
    'nom' 	        => FILTER_SANITIZE_STRING,
    'prenom' 	    => FILTER_SANITIZE_STRING,
    'genre'        => FILTER_SANITIZE_STRING,
    'email'		    => FILTER_VALIDATE_EMAIL,
    'url' 		    => FILTER_SANITIZE_URL,
    'pays'          => FILTER_SANITIZE_STRING,
    'message' 		=> FILTER_SANITIZE_STRING);

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css" type="text/css" charset="utf-8"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include('forumaire.php'); ?>
    <title>Nous contacter</title>
</head>
<body>
    <section class="formulaire">
        <div class="titre">
            <h1>Hackers Poulette</h1>
        </div>

        <div class="logo">
            <img src="images\hackers-poulette-logo2.png" alt="Logo de Hackers poulette">
        </div>

        <div class="lien">
            <a href="http://www.facebook.com" target="_blank"><img src="images\facebook.png" alt="Facebook"></a><br /><br />
            <a href="http://www.twitter.com" target="_blank"><img src="images\twitter.png" alt="Twitter"></a><br /><br />
            <a href="http://www.youtube.com" target="_blank"><img src="images\youtube.png" alt="YouTube"></a><br />
        </div>
        
    </section>

    <section class="sujet">
        <div class="bouton1">
            <h1>Gamme de produit</h1>
            <input type="checkbox" name="prod" value="prod1" alt="Alimentation"> Alimentation<br />
            <input type="checkbox" name="prod" value="prod2" alt="Carte mère"> Carte Mère<br />
            <input type="checkbox" name="prod" value="prod3" alt="Precesseur"> Processeur<br />
        </div>
        <div class="bouton2">
            <h1>Accessoires</h1>
            <input type="checkbox" name="acces" value="acces1" alt="Extenstion de mémoire"> Extension de mémoire<br />
            <input type="checkbox" name="acces" value="acces2" alt="Écran"> Écran<br />
            <input type="checkbox" name="acces" value="acces3" alt="Coque de protection"> Coque de protection<br />
            <input type="checkbox" name="acces" value="acces4" alt="Cablâge"> Cablâge<br />
            <input type="checkbox" name="acces" value="acces5" alt="Module vidéo"> Module vidéo<br />
            <input type="checkbox" name="acces" value="acces6" alt="Adaptateur sans fils"> Adaptateur sans fils<br />
        </div>
        <div class="bouton3">
            <h1>Autre</h1>
            <input type="checkbox" name="acces" value="acces7" alt="Autre">Autre<br />
            <textarea class="area" name="autre" placeholder="Quel est l'objet de votre problème ?" alt="Quel est l'objet de votre problème ?" form="usrform"></textarea><br />
        </div>
            <div class="ok"><input type="submit" name="valider" value="OK" />
        </div>
    </section>

    <section class="info_client">
        <p><span class="rouge">*</span> Ces champs sont obligatoires.</p>
        
        <div class="genres">
            <input type="radio" name="genre" value="homme">Homme
            <input type="radio" name="genre" value="femme">Femme<span class="rouge">*</span>
        </div>
    
        <div class="nom">
            <input type="text" name="nom" placeholder="Nom"  required><span class="rouge">*</span>
        </div>
        
        <div class="prenom">
            <input type="text" name="prenom" placeholder="Prénom"  required><span class="rouge">*</span>
        </div>

        <div class="mail">
            <input type="email" name="email" placeholder="Email"  required><span class="rouge">*</span>
        </div>

        <div class="tel">
            <input type="text" name="tel" placeholder="Téléphone" required><span class="rouge">*</span>
        </div>

        <div class="pays" required>
            <form method="post" action="traitement.php">
                <label>
                    <select name="pays">
                        <optgroup label="Europe">
                            <option value="allemagne">Allemagne</option>
                            <option value="albanie">Albanie</option>
                            <option value="andorre">Andorre</option>
                            <option value="autriche">Autriche</option>
                            <option value="bielorussie">Biélorussie</option>
                            <option value="belgique">Belgique</option>
                            <option value="bosnieHerzegovine">Bosnie-Herzégovine</option>
                            <option value="bulgarie">Bulgarie</option>
                            <option value="croatie">Croatie</option>
                            <option value="danemark">Danemark</option>
                            <option value="espagne">Espagne</option>
                            <option value="estonie">Estonie</option>
                            <option value="finlande">Finlande</option>
                            <option value="france">France</option>
                            <option value="grece">Grèce</option>
                            <option value="hongrie">Hongrie</option>
                            <option value="irlande">Irlande</option>
                            <option value="islande">Islande</option>
                            <option value="italie">Italie</option>
                            <option value="lettonie">Lettonie</option>
                            <option value="liechtenstein">Liechtenstein</option>
                            <option value="lituanie">Lituanie</option>
                            <option value="luxembourg">Luxembourg</option>
                            <option value="exRepubliqueYougoslaveDeMacedoine">Ex-République Yougoslave de Macédoine</option>
                            <option value="malte">Malte</option>
                            <option value="moldavie">Moldavie</option>
                            <option value="monaco">Monaco</option>
                            <option value="norvege">Norvège</option>
                            <option value="paysBas">Pays-Bas</option>
                            <option value="pologne">Pologne</option>
                            <option value="portugal">Portugal</option>
                            <option value="roumanie">Roumanie</option>
                            <option value="royaumeUni">Royaume-Uni</option>
                            <option value="russie">Russie</option>
                            <option value="saintMarin">Saint-Marin</option>
                            <option value="serbieEtMontenegro">Serbie-et-Monténégro</option>
                            <option value="slovaquie">Slovaquie</option>
                            <option value="slovenie">Slovénie</option>
                            <option value="suede">Suède</option>
                            <option value="suisse">Suisse</option>
                            <option value="republiqueTcheque">République Tchèque</option>
                            <option value="ukraine">Ukraine</option>
                            <option value="vatican">Vatican</option>
                    </optgroup>
                        <optgroup label="Afrique">
                            <option value="afriqueDuSud">Afrique Du Sud</option>
                            <option value="algerie">Algérie</option>
                            <option value="angola">Angola</option>
                            <option value="benin">Bénin</option>
                            <option value="botswana">Botswana</option>
                            <option value="burkina">Burkina</option>
                            <option value="burundi">Burundi</option>
                            <option value="cameroun">Cameroun</option>
                            <option value="capVert">Cap-Vert</option>
                            <option value="republiqueCentre-Africaine">République Centre-Africaine</option>
                            <option value="comores">Comores</option>
                            <option value="republiqueDemocratiqueDuCongo">République Démocratique Du Congo</option>
                            <option value="congo">Congo</option>
                            <option value="coteIvoire">Côte d'Ivoire</option>
                            <option value="djibouti">Djibouti</option>
                            <option value="egypte">Égypte</option>
                            <option value="ethiopie">Éthiopie</option>
                            <option value="erythrée">Érythrée</option>
                            <option value="gabon">Gabon</option>
                            <option value="gambie">Gambie</option>
                            <option value="ghana">Ghana</option>
                            <option value="guinee">Guinée</option>
                            <option value="guinee-Bisseau">Guinée-Bisseau</option>
                            <option value="guineeEquatoriale">Guinée Équatoriale</option>
                            <option value="kenya">Kenya</option>
                            <option value="lesotho">Lesotho</option>
                            <option value="liberia">Liberia</option>
                            <option value="libye">Libye</option>
                            <option value="madagascar">Madagascar</option>
                            <option value="malawi">Malawi</option>
                            <option value="mali">Mali</option>
                            <option value="maroc">Maroc</option>
                            <option value="maurice">Maurice</option>
                            <option value="mauritanie">Mauritanie</option>
                            <option value="mozambique">Mozambique</option>
                            <option value="namibie">Namibie</option>
                            <option value="niger">Niger</option>
                            <option value="nigeria">Nigeria</option>
                            <option value="ouganda">Ouganda</option>
                            <option value="rwanda">Rwanda</option>
                            <option value="saoTomeEtPrincipe">Sao Tomé-et-Principe</option>
                            <option value="senegal">Séngal</option>
                            <option value="seychelles">Seychelles</option>
                            <option value="sierra">Sierra</option>
                            <option value="somalie">Somalie</option>
                            <option value="soudan">Soudan</option>
                            <option value="swaziland">Swaziland</option>
                            <option value="tanzanie">Tanzanie</option>
                            <option value="tchad">Tchad</option>
                            <option value="togo">Togo</option>
                            <option value="tunisie">Tunisie</option>
                            <option value="zambie">Zambie</option>
                            <option value="zimbabwe">Zimbabwe</option>
                    </optgroup>
                        <optgroup label="Amérique">
                            <option value="antiguaEtBarbuda">Antigua-et-Barbuda</option>
                            <option value="argentine">Argentine</option>
                            <option value="bahamas">Bahamas</option>
                            <option value="barbade">Barbade</option>
                            <option value="belize">Belize</option>
                            <option value="bolivie">Bolivie</option>
                            <option value="bresil">Brésil</option>
                            <option value="canada">Canada</option>
                            <option value="chili">Chili</option>
                            <option value="colombie">Colombie</option>
                            <option value="costaRica">Costa Rica</option>
                            <option value="cuba">Cuba</option>
                            <option value="republiqueDominicaine">République Dominicaine</option>
                            <option value="dominique">Dominique</option>
                            <option value="equateur">Équateur</option>
                            <option value="etatsUnis">États Unis</option>
                            <option value="grenade">Grenade</option>
                            <option value="guatemala">Guatemala</option>
                            <option value="guyana">Guyana</option>
                            <option value="haiti">Haïti</option>
                            <option value="honduras">Honduras</option>
                            <option value="jamaique">Jamaïque</option>
                            <option value="mexique">Mexique</option>
                            <option value="nicaragua">Nicaragua</option>
                            <option value="panama">Panama</option>
                            <option value="paraguay">Paraguay</option>
                            <option value="perou">Pérou</option>
                            <option value="saintCristopheEtNieves">Saint-Cristophe-et-Niévès</option>
                            <option value="sainteLucie">Sainte-Lucie</option>
                            <option value="saintVincentEtLesGrenadines">Saint-Vincent-et-les-Grenadines</option>
                            <option value="salvador">Salvador</option>
                            <option value="suriname">Suriname</option>
                            <option value="triniteEtTobago">Trinité-et-Tobago</option>
                            <option value="uruguay">Uruguay</option>
                            <option value="venezuela">Venezuela</option>
                    </optgroup>
                        <optgroup label="Asie">
                            <option value="afghanistan">Afghanistan</option>
                            <option value="arabieSaoudite">Arabie Saoudite</option>
                            <option value="armenie">Arménie</option>
                            <option value="azerbaidjan">Azerbaïdjan</option>
                            <option value="bahrein">Bahreïn</option>
                            <option value="bangladesh">Bangladesh</option>
                            <option value="bhoutan">Bhoutan</option>
                            <option value="birmanie">Birmanie</option>
                            <option value="brunei">Brunéi</option>
                            <option value="cambodge">Cambodge</option>
                            <option value="chine">Chine</option>
                            <option value="coreeDuSud">Corée Du Sud</option>
                            <option value="coreeDuNord">Corée Du Nord</option>
                            <option value="emiratsArabeUnis">Émirats Arabe Unis</option>
                            <option value="georgie">Géorgie</option>
                            <option value="inde">Inde</option>
                            <option value="indonesie">Indonésie</option>
                            <option value="iraq">Iraq</option>
                            <option value="iran">Iran</option>
                            <option value="israel">Israël</option>
                            <option value="japon">Japon</option>
                            <option value="jordanie">Jordanie</option>
                            <option value="kazakhstan">Kazakhstan</option>
                            <option value="kirghistan">Kirghistan</option>
                            <option value="koweit">Koweït</option>
                            <option value="laos">Laos</option>
                            <option value="liban">Liban</option>
                            <option value="malaisie">Malaisie</option>
                            <option value="maldives">Maldives</option>
                            <option value="mongolie">Mongolie</option>
                            <option value="nepal">Népal</option>
                            <option value="oman">Oman</option>
                            <option value="ouzbekistan">Ouzbékistan</option>
                            <option value="pakistan">Pakistan</option>
                            <option value="philippines">Philippines</option>
                            <option value="qatar">Qatar</option>
                            <option value="singapour">Singapour</option>
                            <option value="sriLanka">Sri Lanka</option>
                            <option value="syrie">Syrie</option>
                            <option value="tadjikistan">Tadjikistan</option>
                            <option value="taiwan">Taïwan</option>
                            <option value="thailande">Thaïlande</option>
                            <option value="timorOriental">Timor oriental</option>
                            <option value="turkmenistan">Turkménistan</option>
                            <option value="turquie">Turquie</option>
                            <option value="vietNam">Viêt Nam</option>
                            <option value="yemen">Yemen</option>
                    </optgroup>
                        <optgroup label="Océanie">
                            <option value="australie">Australie</option>
                            <option value="fidji">Fidji</option>
                            <option value="kiribati">Kiribati</option>
                            <option value="marshall">Marshall</option>
                            <option value="micronesie">Micronésie</option>
                            <option value="nauru">Nauru</option>
                            <option value="nouvelleZelande">Nouvelle-Zélande</option>
                            <option value="palaos">Palaos</option>
                            <option value="papouasieNouvelleGuinee">Papouasie-Nouvelle-Guinée</option>
                            <option value="salomon">Salomon</option>
                            <option value="samoa">Samoa</option>
                            <option value="tonga">Tonga</option>
                            <option value="tuvalu">Tuvalu</option>
                            <option value="vanuatu">Vanuatu</option>
                    </optgroup>
                    </select>
                </label>
            </form>
        </div>

        <div class="description">
            <textarea class="area" name="message" form="usrform" placeholder="Description de votre problème"></textarea>
        </div>

        <div class="valider">
            <input type="submit" name="valider2" value="Envoyer"/>
        </div>
    </section>
</body>
</html>