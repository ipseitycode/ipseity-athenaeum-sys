<?php

class IpseityAthenaeumExampleConfiguration
{

    private $titulo = "example";
    private $url = "/example";
    private $categoria = "example";


    function __construct()
    {

    }

    function getTitulo()
    {
        return $this->titulo;
    }

    function getUrl()
    {
        return $this->url;
    }

    function getCategoria()
    {
        return $this->categoria;
    }

}