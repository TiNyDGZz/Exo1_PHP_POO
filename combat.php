<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">

    <!-- Jumbotron Header -->
    <header class="jumbotron hero-spacer fixed-bg">
        <div class="container text-center white">
            <h1>Prédator Vs Darkvador</h1>
            <p>Ci dessous, voici le combat effréné du Prédator vs Dark Vador, pour voir qui va gagner il suffit de scroller en bas de la page</br> ou simplement appuyer sur le boutton ci dessous</p>
            <p><a class="btn btn-primary btn-large" href="#gagnant">JE VEUX VOIR LE GAGNANT</a>
            </p>
        </div>
    </header>

    <hr>

<div class="container text-center">
<?php
require 'personnage.php';
$alien = new Personnage();            //Nouveau Personnage
$alien->setLifeLevel(rand(100,300));
$alien->setStrenght(rand(5,15));

$darth = new Personnage();            //Nouveau Personnage
$darth->setLifeLevel(rand(100,300));
$darth->setStrenght(rand(5,15));

$aStrength = $alien->getStrenght();
$aLife = $alien->getLifeLevel();

$dStrength = $darth->getStrenght();
$dLife = $darth->getLifeLevel();

$aCoups = 0;
$dCoups = 0;

while ($aLife > 0 && $dLife > 0){
    if (rand(1,2) == 1) {
        $aCoups++;
        echo "<div class='alert alert-info'>C'est le Prédator qui attaque avec une force de " .$aStrength. "!</div><br/>";
        $darth->_looseLife($aStrength);
        $darth->setLifeLevel($darth->getLifeLevel());
        $dLife = $darth->getLifeLevel();
        if ($dLife <=0){
            echo "<div class='alert alert-danger padding-top' id='gagnant'> Dark Vador est Dead, il aura fallu ".$aCoups." coups au Prédator pour le tuer !</div> <br/>";
        }else{
            echo "La vie de Dark Vador est de : ".$dLife." PV <br/> <hr>";
        }
    }else {
        $dCoups++;
        echo "<div class='alert alert-warning'>C'est Dark Vador qui attaque avec une force de " . $dStrength . " !</div> <br/>";
        $alien->_looseLife($dStrength);
        $alien->setLifeLevel($alien->getLifeLevel());
        $aLife = $alien->getLifeLevel();
        if ($aLife <= 0) {
            echo "<div class='alert alert-danger padding-top' id='gagnant'>L'alien est Dead, il aura fallu " . $dCoups. " coups a Vador pour le tuer !</div><br/>";
        } else {
            echo "La vie du Prédator est de : " . $aLife . " PV <br/> <hr>";
        }
    }

}
?>
</div>