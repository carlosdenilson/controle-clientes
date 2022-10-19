<?php

namespace App\Repositories\Interfaces;


interface IClienteRepository
{
    function salvar(array $data);
    function editar(array $data, $id);
    function buscar($id);
    function excluir($id);
    function buscarFinalPlaca($numero);
}
