<?php
include_once 'Personaje.php'

class Enemigos extends Personaje {
  private $dar_monedas;
  private $id;
  private $description;
  private $tipo;


  public function __construct($n, $pv, $vm, $pd, $dm, $id, $d, $t) {
    parent::__construct($n,$pv,$vm,$pd);
    $this->dar_monedas=$dm;
    $this->id=$id;
    $this->description=$d;
    $this->tipo=$t;
  }

  public function Getdar_monedas()
  {..
  return $this->$dar_monedas;
  }
  public function Setdar_monedas($dm)
  {
  $this->dar_monedas=$dm;
  }
  public function Getid()
  {
  return $this->$id;
  }
  public function Setpuntosde_vida($id)
  {
  $this->id=$id;
  }
  public function Getdescription()
  {
  return $this->$description;
  }
  public function Setdescription($d)
  {
  $this->description=$d;
  }
  public function Gettipo()
  {
  return $this->$tipo;
  }
  public function Settipo($t)
  {
  $this->tipo=$t;
  }

}

?>
