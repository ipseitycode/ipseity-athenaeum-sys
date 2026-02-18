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
        // cinza    - 5 = indefinido

        $layouts = [

            'accordion' => [
                'id' => 1,
                'url' => 'accordion-layout',
                'nome' => 'accordion',
                'categoria' => 'layout',
                'publicar' => 1,
                'status' => 2,
            ],

            'alert' => [
                'id' => 2,
                'url' => 'alert-layout',
                'nome' => 'alert',
                'categoria' => 'layout',
                'publicar' => 1,
                'status' => 2,
            ],

            'banner' => [
                'id' => 3,
                'url' => 'banner-layout',
                'nome' => 'banner',
                'categoria' => 'layout',
                'publicar' => 1,
                'status' => 1,
            ],
        ];

        return $layouts;
    }

    function filtrarPorStatus($status)
    {
        $mapStatus = [
            'cancelado'   => 1,
            'fazendo'     => 2,
            'atrasado'    => 3,
            'concluido'   => 4,
            'indefinido'  => 5,
        ];

        $status = strtolower($status);

        if (!isset($mapStatus[$status])) {
            return []; // retorna vazio se status inválido
        }

        $statusNumero = $mapStatus[$status];

        // Pega todos os layouts
        $layouts = $this->configurarLayout();

        // Filtra pelo status
        $filtrados = array_filter($layouts, function($item) use ($statusNumero) {
            return $item['status'] == $statusNumero;
        });

        return $filtrados;
    }

    function filtrarPorBusca($busca)
    {
        $busca = strtolower(trim($busca));

        // Se busca vazia, retorna todos
        if (empty($busca)) {
            return $this->configurarLayout();
        }

        $layouts = $this->configurarLayout();

        $filtrados = array_filter($layouts, function($item) use ($busca) {

            // Ignora não publicados
            if ($item['publicar'] == 0) {
                return false;
            }

            // Busca parcial no nome
            return strpos(strtolower($item['nome']), $busca) !== false;
        });

        return $filtrados;
    }


}