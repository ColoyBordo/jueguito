<?php
class Personaje  {
  private $nombre;
  private $puntos_de_vida;
  private $velocidad_de_movimiento;
  private $puntos_de_daño;
  
  public function __construct($n, $pv, $vm, $pd) {
    $this->nombre=$n;
    $this->puntos_de_vida=$pv;
    $this->velocidad_de_movimiento=$vm;
    $this->puntos_de_daño=$pd;
  }
  public function Getnombre()
  {
  return $this->$nombre;
  }
  public function Setnombre($n)
  {
  $this->nombre=$n;
  }
  public function Getpuntosde_vida()
  {
  return $this->$puntos_de_vida;
  }
  public function Setpuntosde_vida($pv)
  {
  $this->puntos_de_vida=$pv;
  }
  public function Getvelocidad_de_movimiento()
  {
  return $this->$velocidad_de_movimiento;
  }
  public function Setvelocidad_de_movimiento($vm)
  {
  $this->velocidad_de_movimiento=$vm;
  }
  public function Getpuntos_de_daño()
  {
  return $this->$puntos_de_daño;
  }
  public function Setpuntos_de_daño($pd)
  {
  $this->puntos_de_daño=$pd;
  }

}

?>
