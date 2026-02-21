<?php

class IpseityAthenaeumAccordionConfiguration
{

    private $titulo = "accordion";
    private $url = "/accordion";
    private $categoria = "accordion";


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