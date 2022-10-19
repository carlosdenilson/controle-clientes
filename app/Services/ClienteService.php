<?php

namespace App\Services;

use App\Repositories\Interfaces\IClienteRepository;
use App\Services\Interfaces\IClienteService;

class ClienteService implements IClienteService
{
    protected $clienteRepository;

    public function __construct(IClienteRepository $clienteRepository)
    {
        $this->clienteRepository = $clienteRepository;
    }

    public function salvar(array $data)
    {
        $this->clienteRepository->salvar($data);
    }

    public function editar(array $data, $id)
    {
        $cliente = $this->clienteRepository->buscar($id);

        if ($cliente) {
            $this->clienteRepository->editar($data, $id);
        }
    }

    public function excluir($id)
    {
        $cliente = $this->clienteRepository->buscar($id);

        if ($cliente) {
            $this->clienteRepository->excluir($id);
        }
    }

    public function buscar($id)
    {
        return $this->clienteRepository->buscar($id);
    }

    public function buscarFinalPlaca($numero)
    {
        $ultimoNumero = substr($numero, -1);
        return $this->clienteRepository->buscarFinalPlaca($ultimoNumero);
    }
}
