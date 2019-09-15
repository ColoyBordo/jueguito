<?php
class Usuarios  {
  private $nom_usuario;
  private $pass;
  private $id_usuario;
  
  public function __construct($nu, $p, $idu) {
    $this->nom_usuario=$nu;
    $this->pass=$p;
    $this->id_usuario=$idu;
  }
  public function Getnom_usuario()
  {
  return $this->$nom_usuario;
  }
  public function Setnom_usuario($nu)
  {
  $this->nom_usuario=$nu;
  }
  public function Getpass()
  {
  return $this->$pass;
  }
  public function Setpass($p)
  {
  $this->pass=$p;
  }
  public function Getid_usuario()
  {
  return $this->$id_usuario;
  }
  public function Setid_usuario($idu)
  {
  $this->id_usuario=$idu;
  }

}

?>