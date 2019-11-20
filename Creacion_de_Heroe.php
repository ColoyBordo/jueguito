<?php
include_once 'clase_personaje.php';
include_once 'clase_heroe.php';
include_once 'clase_poderes.php';

$p=new Personaje ( 100, 30, 5);
echo $p->GetnombrePersonaje();
echo '<br>';
echo $p->Getpuntosde_vida();
echo '<br>';
echo $p->Getvelocidad_de_movimiento();
echo '<br>';
echo $p->Getpuntos_de_daño();
echo '<br>';
$a=new Heroe ('Lacos', 100, 30, 5,1,'Lacos el defensor de Agata' ,'Caballero');
echo $a->getdescripcionHeroe();
echo '<br>';
echo $a->gettipoHeroe();
echo '<br>';
$P=new Poderes (1, 'estocada','Lacos inflinge de 10-15', 'asda', 'Informatica');
echo $P->GetnombrePoder();
echo '<br>';
echo $P->GetdescripcionPoder();
?>
