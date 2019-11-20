<?php
include_once 'clase_personaje.php'

class Enemigos extends Personaje {
  private $dar_monedas;
  private $idEnemigos;
  private $descriptionEnemigos;
  private $tipoEnemigos;


  public function __construct($npj, $pv, $vm, $pd, $dm, $idE, $dE, $tE) {
    parent::__construct($npj,$pv,$vm,$pd);
    $this->dar_monedas=$dm;
    $this->idEnemigos=$idE;
    $this->descriptionEnemigos=$dE;
    $this->tipoEnemigos=$tE;
  }

  public function Getdar_monedas()
  {..
  return $this->$dar_monedas;
  }
  public function Setdar_monedas($dm)
  {
  $this->dar_monedas=$dm;
  }
  public function GetidEnemigos()
  {
  return $this->$idE;
  }
  public function SetidEnemigos($id)
  {
  $this->idEnemigos=$idE;
  }
  public function GetdescriptionEnemigos()
  {
  return $this->$descriptionEnemigos;
  }
  public function SetdescriptionEnemigos($dE)
  {
  $this->descriptionEnemigos=$dE;
  }
  public function GettipoEnemigos()
  {
  return $this->$tipoEnemigos;
  }
  public function Settipo($tE)
  {
  $this->tipoEnemigos=$tE;
  }

}

?>
