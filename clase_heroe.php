<?php
include_once 'Personaje.php'
class Heroe extends Personaje  {

    private $id;
    private $descripcion;
    private $tipo;

    public function __construct($n, $pv, $vm, $pd,$id,$d,$t) {
      parent::__construct($n,$pv,$vm,$pd);
      $this->id=$id;
      $this->$descripcion=$d;
      $this->$tipo=$t;
    }

    public function getid()
    {
      return $this->id;
    }
    public function gettipo()
    {
      return $this->tipo;
    }
    public function getdescripcion()
    {
      return $this->descripcion;
    }

    public function setid($id)
    {
      $this->id=$id;
    }
    public function setdescripcion($d)
    {
      $this->descripcion=$d;
    }
    public function settipo($t)
    {
      $this->tipo=$t;

    }
}

?>
