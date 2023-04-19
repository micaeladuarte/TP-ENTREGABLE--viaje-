<?php

/*También se desea guardar la información
de la persona responsable de realizar el viaje, para ello cree una clase ResponsableV que registre
 el número de empleado, número de licencia, nombre y apellido. La clase Viaje debe hacer referencia al responsable de realizar el viaje.
 */

class responsableV {
    //atributos 
    private $nroEmpleado;
    private $nroLicencia;
    private $nombreR;
    private $apellidoR;


    //constructor 
    public function __construct($numeroEmpleado, $numeroLicencia, $nombreResp, $apellidoResp)
    {
        $this->nroEmpleado=$numeroEmpleado;
        $this->nroLicencia=$numeroLicencia;
        $this->nombreR=$nombreResp;
        $this->apellidoR=$apellidoResp;

    }

    //Metodos de acceso GET y SET

    public function getNroEmpleado(){
        return $this->nroEmpleado;
    }

    public function setNroEmpleado($nroEmpleado){
        return $this->nroEmpleado=$nroEmpleado;
    }

    public function getNroLicencia(){
        return $this->nroLicencia;
    }

    public function setNroLicencia($nroLicencia){
        return $this->nroLicencia=$nroLicencia;
    }

    public function getNombreR(){
        return$this->nombreR;
    }

    public function setNombreR($nombreR){
        return $this->nombreR=$nombreR;
    }

    public function getApellidoR(){
        return $this->apellidoR;
    }

    public function setApellidoR($apellidoR) {
        return $this->apellidoR=$apellidoR;

    }
    //metodo __toString
    public function __toString()
    {
        $string="";
    }


}