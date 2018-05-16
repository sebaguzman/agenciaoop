<?php

class Region
{
  private $regID;
  private $regNombre;

  public function listarRegiones(){
    $link = Conexion::conectar();
    $sql = "SELECT regID, regNombre FROM regiones";
    $stmt = $link->prepare($sql);
    $stmt->execute();
    $resultado=$stmt->fetchAll();
    return $resultado;
  }

    public function getRegID()
    {
        return $this->regID;
    }

    public function setRegID($regID)
    {
        $this->regID = $regID;
        return $this;
    }

    public function getRegNombre()
    {
        return $this->regNombre;
    }

    public function setRegNombre($regNombre)
    {
        $this->regNombre = $regNombre;
        return $this;
    }

}
