<!--
    <form action="05-traitement.php" method="GET">
        tous les champs du formulaire doivent avoir un attribut name
        <input type="date" id="dt_arrivee" name="dt_arrivee" required>
        <input type="email" id="email" name="email" required >
        <textarea id="commentaire" name="commentaire" required></textarea>
        <input type="submit" >
    </form>

    05-traitement.php?dt_arrivee=31/05/2021&email=test@yahoo.fr&commentaire=bonjour
-->

<?php 
    if(!empty($_GET["dt_arrivee"]) && !empty($_GET["email"]) && !empty($_GET["commentaire"])){

        // est ce que $_GET["dt_arrivee"] => date
        // est ce que  $_GET["email"]
        // est ce que au minimun 20 lettres // maximum 3000 lettres  $_GET["email"]

        // traite pas 

        // si c'est tout bon => demande à la balise de donnée 
        
            //PDO requête préparée 
            // afficher le résultat => envoyé au client 
    }else{
        // traite pas la demande 
    }
