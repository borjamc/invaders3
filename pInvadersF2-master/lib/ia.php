<?php

Class ia 
{
//Atributos
public $columnas;
public $fila;


//Método
public function getFila(){
return $this->fila;

}

public function getColumna(){
return $this->columnas;

}

public function randomPos(){
}


//Setter

public function setColumna($col)
{
	if ($col>3){
	$this->columnas=3;
	}else{
	$this->columnas=$col;
	}
}

public function setFila($fil)
{
	if ($fil<0){
	$this->fila=0;
	}else{
	$this->fila=$fil;	
	}
	
}







}
