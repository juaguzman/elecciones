<?php 

Class Candidato
{
    
    var $nombre;
    var $apellido;
    var $edad;
    var $imagen;
    var $votos;
    var $costocCamp;
    
    function Candidato($nombre, $apellido, $edad,$imagen,$votos,$costo)
    {
         $this->nombre = $nombre;
         $this->apellido = $apellido;
         $this->edad = $edad;
         $this->imagen = $imagen;
         $this->votos = $votos;
         $this->costocCamp = $costo;
    }
    
    
}





?>