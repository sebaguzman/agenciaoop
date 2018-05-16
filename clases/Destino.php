<?php

class Destino
{
  private $destID;
  private $destNombre;
  private $destPrecio;
  private $destAsientos;
  private $destDisponibles;
  private $regID;
  private $regNombre;

  public function listarDestinos(){
    $link = Conexion::conectar();
    $sql = "SELECT destID, destNombre, destinos.regID, regiones.regID, regNombre, destPrecio, destAsientos,
                    destDisponibles FROM destinos,regiones WHERE destinos.regID = regiones.regID";
    $stmt = $link->prepare($sql);
    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
  }






    /**
     * Get the value of Dest
     *
     * @return mixed
     */
    public function getDestID()
    {
        return $this->destID;
    }

    /**
     * Set the value of Dest
     *
     * @param mixed destID
     *
     * @return self
     */
    public function setDestID($destID)
    {
        $this->destID = $destID;

        return $this;
    }

    /**
     * Get the value of Dest Nombre
     *
     * @return mixed
     */
    public function getDestNombre()
    {
        return $this->destNombre;
    }

    /**
     * Set the value of Dest Nombre
     *
     * @param mixed destNombre
     *
     * @return self
     */
    public function setDestNombre($destNombre)
    {
        $this->destNombre = $destNombre;

        return $this;
    }

    /**
     * Get the value of Dest Precio
     *
     * @return mixed
     */
    public function getDestPrecio()
    {
        return $this->destPrecio;
    }

    /**
     * Set the value of Dest Precio
     *
     * @param mixed destPrecio
     *
     * @return self
     */
    public function setDestPrecio($destPrecio)
    {
        $this->destPrecio = $destPrecio;

        return $this;
    }

    /**
     * Get the value of Dest Asientos
     *
     * @return mixed
     */
    public function getDestAsientos()
    {
        return $this->destAsientos;
    }

    /**
     * Set the value of Dest Asientos
     *
     * @param mixed destAsientos
     *
     * @return self
     */
    public function setDestAsientos($destAsientos)
    {
        $this->destAsientos = $destAsientos;

        return $this;
    }

    /**
     * Get the value of Dest Disponibles
     *
     * @return mixed
     */
    public function getDestDisponibles()
    {
        return $this->destDisponibles;
    }

    /**
     * Set the value of Dest Disponibles
     *
     * @param mixed destDisponibles
     *
     * @return self
     */
    public function setDestDisponibles($destDisponibles)
    {
        $this->destDisponibles = $destDisponibles;

        return $this;
    }

    /**
     * Get the value of Reg
     *
     * @return mixed
     */
    public function getRegID()
    {
        return $this->regID;
    }

    /**
     * Set the value of Reg
     *
     * @param mixed regID
     *
     * @return self
     */
    public function setRegID($regID)
    {
        $this->regID = $regID;

        return $this;
    }

    /**
     * Get the value of Reg Nombre
     *
     * @return mixed
     */
    public function getRegNombre()
    {
        return $this->regNombre;
    }

    /**
     * Set the value of Reg Nombre
     *
     * @param mixed regNombre
     *
     * @return self
     */
    public function setRegNombre($regNombre)
    {
        $this->regNombre = $regNombre;

        return $this;
    }

}
