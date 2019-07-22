<?php

class Funciones(){

	function setMensaje($texto){
		return $texto;
	}

	function sumar($numero1,$numero2){
    	$resultado = $numero1+ $numero2;
    	return $resultado;
    }

    function divide($numero1,$numero2){
    	$resultado = $numero1/$numero2;
    	return round($resultado);
    }

    function generarRandom($n1,$n2){
        $numero  = rand($n1, $n2);
        return $numero;
    }

    function mayusculas($texto){
        $resultado = strtoupper($texto);
        return $resultado;
    }

    function minusculas($texto){
        $resultado = strtolower($texto);
        return $resultado;
    }

    function sample(){
    	$texto="GitHub";
    	return $texto;
    }

    function newFuncion($mensaje){
        $response = $mensaje;

        return echo json_encode($response);
    }

}
?>
