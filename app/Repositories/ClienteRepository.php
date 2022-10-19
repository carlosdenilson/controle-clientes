<?php

namespace App\Repositories;

use App\Models\Cliente;
use App\Repositories\Interfaces\IClienteRepository;


class ClienteRepository implements IClienteRepository
{
    protected $cliente;

    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }


    public function salvar(array $data)
    {
        $this->cliente->create($data);
    }

    public function editar(array $data, $id)
    {
        $this->cliente->find($id)->update($data);
    }

    public function buscar($id)
    {
        return $this->cliente->find($id);
    }

    public function excluir($id)
    {
        return $this->cliente->find($id)->delete($id);
    }

    public function buscarFinalPlaca($numero)
    {
        return $this->cliente
            ->where('placa_carro', 'LIKE', "%{$numero}")
            ->get();
    }
}
