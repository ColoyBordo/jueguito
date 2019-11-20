<?php
class Personaje  {
  private $nombre_personaje;
  private $puntos_de_vida;
  private $velocidad_de_movimiento;
  private $puntos_de_daño;

  public function __construct($npj, $pv, $vm, $pd) {
    $this->nombre_personaje=$npj;
    $this->puntos_de_vida=$pv;
    $this->velocidad_de_movimiento=$vm;
    $this->puntos_de_daño=$pd;
  }
  public function GetnombrePersonaje()
  {
  return $this->nombre_personaje;
  }
  public function SetnombrePersonaje($npj)
  {
  $this->nombre_personaje=$npj;
  }
  public function Getpuntosde_vida()
  {
  return $this->puntos_de_vida;
  }
  public function Setpuntosde_vida($pv)
  {
  $this->puntos_de_vida=$pv;
  }
  public function Getvelocidad_de_movimiento()
  {
  return $this->velocidad_de_movimiento;
  }
  public function Setvelocidad_de_movimiento($vm)
  {
  $this->velocidad_de_movimiento=$vm;
  }
  public function Getpuntos_de_daño()
  {
  return $this->puntos_de_daño;
  }
  public function Setpuntos_de_daño($pd)
  {
  $this->puntos_de_daño=$pd;
  }



}
$num = 100;
echo $num;
?>
