<?php

class Post
{
    public $id;
    public $titulo;
    public $uriImagem;
    public $sumario;
    public $ehFavorito;


    public function setId($id)
    {
        $this->id = $id;
    }


    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }


    public function setUriImagem($uriImagem)
    {
        $this->uriImagem = $uriImagem;
    }


    public function setSumario($sumario)
    {
        $this->sumario = $sumario;
    }


    public function setEhFavorito($ehFavorito)
    {
        if( $ehFavorito === 'true' || $ehFavorito === true || $ehFavorito === 1 ){
            $this->ehFavorito = true;
        }
        else{
            $this->ehFavorito = false;
        }
    }
}