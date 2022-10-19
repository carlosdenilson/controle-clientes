<?php

namespace App\Services\Interfaces;

interface IClienteService
{
    function salvar(array $data);
    function editar(array $data, $id);
    function buscar($id);
    function excluir($id);
    function buscarFinalPlaca($numero);
}
