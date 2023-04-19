<?php
/*La empresa de Transporte de Pasajeros “Viaje Feliz” quiere registrar la información referente a sus viajes. De cada viaje
 se precisa almacenar el código del mismo, destino, cantidad máxima de pasajeros y los pasajeros del viaje.

Realice la implementación de la clase Viaje e implemente los métodos necesarios para modificar los atributos de dicha clase
 (incluso los datos de los pasajeros). Utilice un array que almacene la información correspondiente a los pasajeros.
  Cada pasajero es un array asociativo con las claves “nombre”, “apellido” y “numero de documento”.

Implementar un script testViaje.php que cree una instancia de la clase Viaje y presente un menú que permita cargar la información del viaje,
 modificar y ver sus datos. */
//-------------------------------------------------------------------------------------
 /*Modificar la clase Viaje para que ahora los pasajeros sean un objeto que tenga los atributos nombre, apellido, numero de documento y teléfono.
  El viaje ahora contiene una referencia a una colección de objetos de la clase Pasajero. También se desea guardar la información
de la persona responsable de realizar el viaje, para ello cree una clase ResponsableV que registre
 el número de empleado, número de licencia, nombre y apellido. La clase Viaje debe hacer referencia al responsable de realizar el viaje.

Volver a implementar las operaciones que permiten modificar el nombre, apellido y teléfono de un pasajero.
 Luego implementar la operación que agrega los pasajeros al viaje, solicitando por consola la información de los mismos.
  Se debe verificar que el pasajero no este cargado mas de una vez en el viaje. De la misma forma cargue la información del responsable del viaje. */


 class viaje {

    //atributos
    private $codigoViaje;
    private $destino;
    private $maxPasajeros;
    private $ObjPasajero;

    //constructor 
    public function __construct($cod,$dest,$maxPasaj,$pasajero)
    {
        $this->codigoViaje=$cod;
        $this->destino=$dest;
        $this->maxPasajeros=$maxPasaj;
        $this->ObjPasajero=$pasajero;
    }


    //Metodos de acceso SET y GET


    public function getCodigoViaje(){
        return $this->codigoViaje;
    }

    public function setCodigoViaje($codigoViaje){
        return $this->codigoViaje=$codigoViaje;
    }
    



    public function getDestino(){
        return $this->destino;
    }

    public function setDestino($destino){
        return $this->destino=$destino;
    }




    public function getMaxPasajeros(){
        return $this->maxPasajeros;
    }

    public function setMaxPasajeros($maxPasajeros){
        return $this->maxPasajeros=$maxPasajeros;
    }

    public function getObjPasajero(){
        return $this->ObjPasajero;
    }

    public function setObjPasajero($ObjPasajero){
        return $this->ObjPasajero=$ObjPasajero;
    }



    public function __toString()
    {
        $string= "
        
        
        ";

        return $string;
    }




 }