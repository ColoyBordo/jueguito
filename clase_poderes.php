<?php
class Poderes  {
  private $id;
  private $nombre;
  private $descripcion;
  private $aumento;
  private $caracteristica_afectada;
  
  public function __construct($id, $n, $d, $a, $ca) {
    $this->id=$id;
    $this->nombre=$n;
    $this->descripcion=$d;
    $this->aumento=$a;
    $this->caracteristica_afectada=$ca;
  }
  public function Getid()
  {
  return $this->$id;
  }
  public function Setid($id)
  {
  $this->id=$id;
  }
  public function Getnombre()
  {
  return $this->$nombre;
  }
  public function Setnombre($n)
  {
  $this->nombre=$n;
  }
  public function Getdescripcion()
  {
  return $this->$descripcion;
  }
  public function Setdescripcion($d)
  {
  $this->descripcion=$d;
  }
  public function Getaumento()
  {
  return $this->$aumento;
  }
  public function Setaumento($a)
  {
  $this->aumento=$a;
  }
  public function Getcaracteristica_afectada()
  {
  return $this->$caracteristica_afectada;
  }
  public function Setcaracteristica_afectada($ca)
  {
  $this->caracteristica_afectada=$ca;
  }

}

?>
