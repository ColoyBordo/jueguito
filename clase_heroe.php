<?php
include_once 'clase_personaje.php'
class Heroe extends Personaje  {

    private $idHeroe;
    private $descripcionHeroe;
    private $tipoHeroe;

    public function __construct($n, $pv, $vm, $pd,$idH,$dH,$tH) {
      parent::__construct($npj,$pv,$vm,$pd);
      $this->idHeroe=$idH;
      $this->descripcionHeroe=$dH;
      $this->tipoHeroe=$tH;
    }

    public function getidheroe()
    {
      return $this->idHeroe;
    }
    public function gettipoHeroe()
    {
      return $this->tipoHeroe;
    }
    public function getdescripcionHeroe()//Hay que expecficar que es la descripcion del heroe, por es pongo getdescripcionHeroe
    {
      return $this->descripcionHeroe;
    }

    public function setidheroe($idH)
    {
      $this->idHeroe=$idH;
    }
    public function setdescripcionHeroe($dH)
    {
      $this->descripcionHeroe=$dH;
    }
    public function settipo($tH)
    {
      $this->tipoHeroe=$tH;

    }
}

?>
