<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\BuscarClientesFinalPlacaRequest;
use App\Http\Requests\EditarClienteRequest;
use App\Services\Interfaces\IClienteService;
use App\Http\Requests\SalvarClienteRequest;

class ClienteController extends Controller
{

    private $clienteService;

    public function __construct(IClienteService $clienteService)
    {
        $this->clienteService = $clienteService;
    }

    public function salvar(SalvarClienteRequest $salvarClienteRequest)
    {
        $this->clienteService->salvar($this->prepararCliente($salvarClienteRequest));
        return response(201);
    }

    public function editar(EditarClienteRequest $editarClienteRequest, $id)
    {
        $this->clienteService->editar($this->prepararCliente($editarClienteRequest), $id);
        return response(200);
    }

    public function buscar($id)
    {
        $cliente = $this->clienteService->buscar($id);
        return response()->json($cliente, 200);
    }

    public function excluir($id)
    {
        $this->clienteService->excluir($id);
        return response(200);
    }

    public function buscarFinalPlaca($numero)
    {
        $clientes = $this->clienteService->buscarFinalPlaca($numero);
        return response()->json($clientes, 200);
    }

    private function prepararCliente($cliente)
    {
        return [
            'nome' => $cliente->nome,
            'telefone' => $cliente->telefone,
            'cpf' => $cliente->cpf,
            'placa_carro' => strtoupper($cliente->placa_carro),
        ];
    }
}
