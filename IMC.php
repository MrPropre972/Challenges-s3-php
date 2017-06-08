<?php
$infos = 	['Poids : 64 kgs','Taille en mètres : 1.70m','Taille en centimètre : 170 cm','Age : 38 ans','Sexe : Homme','Indice de corpulence : 1','Circonférence du poignet : 12 cm'];

 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>IMC</title>
    </head>
    <body>
        <h1>IMC et calcul du poids idéal</h1>
        <h2>Vos informations</h2>
        <?php
        echo '<li>'.$infos[0].'<br>';
        echo '<li>'.$infos[1].'<br>';
        echo '<li>'.$infos[2].'<br>';
        echo '<li>'.$infos[3].'<br>';
        echo '<li>'.$infos[4].'<br>';
        echo '<li>'.$infos[5].'<br>';
        echo '<li>'.$infos[6].'<br>';
        ?>

<!-- ------------------------------------------------------------------------------ -->
        <h2>IMC</h2>
        <?php

        function imc($poids, $taille)
        {
            $taille² = $taille * $taille;
            return $imc = $poids / $taille²;
        }

        $imc = imc(65, 1.70);

        if ($imc <= 18) {
          echo 'L\'IMC est de = '.$imc.',il est inférieur à 18, vous êtes trop maigre"';
        }
        elseif ($imc <= 25) {
          echo 'L\'IMC est de = '.$imc.',il est entre 18 et 25, vous avez un poids de type "poids normal"';
        }
        elseif ($imc <= 30) {
          echo 'L\'IMC est de = '.$imc.',il est entre 25 et 30, vous êtes dans la zone "de surpoids"';
        }
        else {
          echo 'L\'IMC est de = '.$imc.',il est supérieur à 30, vous êtes dans la zone "d\'obésité"';
        }

        ?>
<!-- ------------------------------------------------------------------------------ -->
        <h2>Formule de Broca</h2>

        <?php
        function broca($taille)
        {
            $nbre = 100;
            return $poidIdeal = $taille - $nbre;
        }
            echo  broca(170). ' kgs';
        ?>

<!-- ------------------------------------------------------------------------------- -->

        <h2>Formule de Lorentz</h2>

        <?php

        // Formule pour les femmes
        echo 'Voici le poid idéal pour les femmes : ';
        function lorentzFemme($taille)
        {
            $n1 = $taille / 2;
            $n2 = $taille - $n1;
            return $poidIdeal = $n2 - 25;
        }
            echo  lorentzFemme(170). 'kgs' . '<br>';

        // Formule pour les hommes
        echo 'Voici le poids idéal pour les hommes : ';
        function lorentzHomme($taille)
        {
            $n1 = $taille / 4;
            $n2 = $taille - $n1;
            return $poidIdeal = $n2 - 62.5;
        }
            echo  lorentzHomme(170). 'kgs' . '<br>';
        ?>
<!-- ------------------------------------------------------------------------------- -->
        <h2>Formule de Cref</h2>
        <?php
        function cref($taille, $indice, $age)
        {
            $indice = 1;
            $n1 = $age / 10;
            $n2 = $taille - 100;
            $n3 = $n2 + $n1;
            return $poidIdeal = $n3 * 0.9 *$indice;
        }
            echo cref(170,1,38). ' kgs';
        ?>
<!-- ------------------------------------------------------------------------------- -->
        <h2>Formule de Monnerot-Dumaine</h2>
        <?php
        function monnerot($taille, $cp)
        {
            $cp = 12;
            $n1 = 4 * $cp;
            $n2 = $taille - 100;
            $n3 = $n2 + $n1;
            return $poidIdeal = $n3 / 2;
        }
            echo monnerot(170,12). ' kgs';
        ?>
    </body>
</html>
