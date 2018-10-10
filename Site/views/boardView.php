<?php
$hero = new PartieController();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Discordia - Jeu de cartes en ligne</title>
    </head>
    <body>

        <?php 
            $h1 = $hero -> loadHero1(); 
            echo $h1->getNom(); 
        ?> <br/>

        <table>
            <?php 
                foreach ($deck2 as $key => $value) {
                    echo '<tr>';
                        echo '<th>'. $value->getNom() .'</th>';
                    echo '</tr>';
                    echo '<tr>';
                        echo '<td> Dégat(s) : '. $value->getDegats() .'</td>';
                    echo '</tr>';
                    echo '<tr>';
                        echo '<td> PDV : '. $value->getPdv() .'</td>';
                    echo '</tr>';
                }
            ?>
        </table>


        <button>BOARD ICI</button><br/>

        <?php 
            $h2 = $hero -> loadHero2(); 
            echo $h2->getNom(); 
        ?>        
        
        <table>
            <?php 
                foreach ($deck1 as $key => $value) {
                    echo '<tr>';
                        echo '<th>'. $value->getNom() .'</th>';
                    echo '</tr>';
                    echo '<tr>';
                        echo '<td> Dégat(s) : '. $value->getDegats() .'</td>';
                    echo '</tr>';
                    echo '<tr>';
                        echo '<td> PDV : '. $value->getPdv() .'</td>';
                    echo '</tr>';
                }
            ?>
        </table>

    </body>
</html>


