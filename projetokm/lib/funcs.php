<?php

function rotas($pagina) 
{
    switch ($pagina) {
        case 'orcamentos':
            require 'paginas/orcamentos.php';
            break;
        case 'sobre':
            require 'paginas/sobre.php';
            break;
        case 'criar':
            require 'paginas/criar.php';
            break;
        default:
            require 'paginas/home.php';
    }
}

function active($pagina, $link='')
{
    if ($pagina == $link) {
        return 'class="active"';
    }
    return '';
}

function conecta()
{
    return mysqli_connect(HOST, USER, PASS, BANCO);
}

function formata_reais($valor)
{
    return 'R$ ' . number_format($valor, 2, ',', '.');
}

function valorBase($km, $tipo){

    switch ($tipo) {
        case 'residencial': return $km*=(4*0.8);
            # code...
            break;
        case 'industrial': return $km*=(4*0.9);
            # code...
            break;
        case 'comercial': return $km*=(4*1);
            # code...
            break;
        
        default:
          
    }
}