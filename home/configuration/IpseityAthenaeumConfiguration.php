<?php

class IpseityAthenaeumConfiguration {

    private $titulo = "home";
    private $url = "/home";
    private $categoria = "home"; 

    function __construct()
    {
        $this->configurar();
    }

    function build()
    {
        return $this;
    }


    function getNome()
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

    function configurar()
    {

    }

    public function configurarLayout(): array {
        
        // vermelho - 1 = cancelado
        // verde    - 2 = fazendo
        // amarelo  - 3 = atrasado
        // azul     - 4 = concluido
        // branco   - 5 = indefinido

        $layouts = [

            'accordion' => [
                'id' => 1,
                'url' => 'accordion',
                'nome' => 'accordion',
                'categoria' => 'layout',
                'publicar' => 1,
                'status' => 2,
            ],

            'alert' => [
                'id' => 2,
                'url' => 'alert',
                'nome' => 'alert',
                'categoria' => 'layout',
                'publicar' => 1,
                'status' => 2,
            ],
        ];

        return $layouts;
    }
}