<?php
/* /*Modificar la clase Viaje para que ahora los pasajeros sean un objeto que tenga los atributos nombre, apellido, numero de documento y teléfono.
  El viaje ahora contiene una referencia a una colección de objetos de la clase Pasajero. También se desea guardar la información
de la persona responsable de realizar el viaje, para ello cree una clase ResponsableV que registre
 el número de empleado, número de licencia, nombre y apellido. La clase Viaje debe hacer referencia al responsable de realizar el viaje.

Volver a implementar las operaciones que permiten modificar el nombre, apellido y teléfono de un pasajero.
 Luego implementar la operación que agrega los pasajeros al viaje, solicitando por consola la información de los mismos.
  Se debe verificar que el pasajero no este cargado mas de una vez en el viaje. De la misma forma cargue la información del responsable del viaje. */
 

  class pasajero {

    //atributos

    private $nombre;
    private $apellido;
    private $documento;
    private $telefono;


    //constructor
    public function __construct($nomb,$apell,$doc,$tel)
    {
        $this->nombre=$nomb;
        $this->apellido=$apell;
        $this->documento=$doc;
        $this->telefono=$tel;
    }


    //Metodos de acceso GET y SET

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        return $this->nombre=$nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido){
        return $this->apellido=$apellido;
    }

    public function getDocumento(){
        return $this->documento;
    }
 
    public function setDocumento($documento){
        return $this->documento=$documento;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function setTelefono($telefono){
        return $this->telefono=$telefono;
    }


    //Metodo to string

    public function __toString()
    {
        $string="";
        return $string;
    }


  }