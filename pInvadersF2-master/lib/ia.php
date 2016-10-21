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


//Setter con Control

public function setColumna($col)
{
	if ($col<=3 && $col>=0){
	$this->columnas=$col;
	}else if ($col > 3){
	$this->columnas=3;
	}else if ($col < 0){
	$this->columnas=0;
	}
}

public function setFila($fil)
{
	if ($fil <=3 && $fil>=0){
	$this->fila=$fil;
	}else if ($fil > 3){
	$this->fila=3;
	}else if ($fil < 0){
	$this->fila=0;
	}
	
}
	
}







}
