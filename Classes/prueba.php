<?php
class Persona {
    private $nombre;
    private $apellido;
    private $email;
    private $sueldo;

    public function __construct($nombre,$apellido,$email){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->email=$email;

    }


    /**
     * Get the value of sueldo
     */ 
    public function getSueldo()
    {
        return $this->sueldo;
    }

    /**
     * Set the value of sueldo
     *
     * @return  self
     */ 
    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;

        return $this;
    }
}    