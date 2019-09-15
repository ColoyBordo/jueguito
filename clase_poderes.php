<?php
class Poderes  {
  private $idPoder;
  private $nombrePoder;
  private $descripcionPoder;
  private $aumento;
  private $caracteristica_afectada;

  public function __construct($idP, $nP, $dP, $a, $ca) {
    $this->idPoder=$idP;
    $this->$nombrePoder=$nP;
    $this->descripcionPoder=$dP;
    $this->aumento=$a;
    $this->caracteristica_afectada=$ca;
  }
  public function Getidpoder()// lo mismo con este id
  {
  return $this->$idP;
  }
  public function SetidPoder($id)
  {
  $this->idPoder=$idP;
  }
  public function GetnombrePoder()
  {
  return $this->$nombrePoder;
  }
  public function SetnombrePoder($nP)
  {
  $this->nombrePoder=$nP;
  }
  public function GetdescripcionPoder()//Descripcion del poder,por eso le pongo GetdescripcionP
  {
  return $this->$descripcionPoder;
  }
  public function setdescripcionPoder($dP)
  {
  $this->descripcionPoder=$dP;
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
