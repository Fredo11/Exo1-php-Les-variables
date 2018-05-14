<!DOCTYPE html>

<html lang="fr">

  <head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="">
    <link rel="stylesheet">
    <title>essai_php</title>

  </head>

  <body>

            <?php
                        //=============exo 1 ==================================
                        $nom ="Fred";
                        echo "Exo 1: Mon nom est $nom";
                        ##=============exo 2 ==================================
                        $prenom="Fredo";
                        $age= 53;
                        echo "<br>Exo 2: Mon nom est $nom ,mon prénom est $prenom, et mon age est $age ans";
                        ##=============exo 3 ==================================
                        $km= 1;
                        $km= 3;
                        $km= 125;
                        echo "<br>Exo 3 $km";
                        //=============exo 4 ==================================
                        $string="Fred";
                        $int=22;
                        $float=3.14;
                        $boolean=true;
                        echo "<br>Exo 4 ";
                        echo  "$string $int $float $boolean" ;
                        ##=============exo 5 ==================================
                        $int="";
                        echo "<br>Exo 5 $int";
                        ##=============exo 6 ==================================
                        $nom ="Fred";
                        echo "<br>Exo 6: Bonjour $nom comment vas tu?";
                        ##=============exo 7 ==================================
                        echo "<br>Exo 7: Bonjour $nom  $prenom, tu as $age ans";
                        ##=============exo 8 ==================================
                        $nbre1 = 3 + 4 ;
                        $nbre2 = 5 * 20 ;
                        $nbre3 = 45 / 5 ;
                        echo "<br>Exo 8: $nbre1 $nbre2 $nbre3"
            ?>

  </body>
</html>
