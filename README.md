## Controle de Clientes

Exemplo de código utilizando Laravel 9 e Sail
<br />
<br />

Laravel Sail

https://laravel.com/docs/9.x/sail

<br />
<br />
Para executar o projeto é necessário executar os comandos do sail
<br />
<br />

-   Caso deseje, podera executar o comando abaixo para criar um alias. Caso contrário é necessário utilizar os comandos apontando para 'vendor/bin/sail'
    <br />

```
alias sail='bash vendor/bin/sail'
```

<br />

-   Para subir os containers

```
sail up -d

```

<br />

-   Executar a migration

```
sail artisan migrate
```

<br />

Prontinho! O projeto já está pronto para utilizar!

<br />
<br />
REST API
<br />
<br />

-   Salvar um cliente

```
POST http://localhost:8000/api/cliente

{
    "nome": "Jon Joe",
    "telefone": "3133333333",
    "cpf":"89115465004",
    "placa_carro": "PPP0B00"
}

```

-   Editar um cliente

```
PUT http://localhost:8000/api/cliente/1

{
    "nome": "Jon Joe Filho",
    "telefone": "1133333333",
    "cpf":"43552355057",
    "placa_carro": "PPP0B11"
}

```

-   Deletar um cliente

```
DELETE http://localhost:8000/api/cliente/1
```

-   Buscar um cliente

```
GET http://localhost:8000/api/cliente/1
```

-   Consultar um cliente pela ultimo digito da placa

```
GET http://localhost:8000/api/consulta/final-placa/4
```
