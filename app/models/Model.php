<?php

namespace app\models;

abstract class Model {

    protected static ?string $table = null;

    public function __construct()
    {
        // throw new \Exception('Not implemented');
    }

    public function all(): array {
        // retorna todos os registros de uma tabela
    }

    public function getById(int|string $id): static {
        // retorna um registro pelo ID
    }

    public function find(): static {
        // não sei ainda, mas é para retornar um registro pelo ID ou por outro campo
    }

    public function findById(int|string $id): static {
        // procura pelo ID
    }

    public function first(): static {
        // procura o primeiro registro da tabela
    }

    public function last(): static {
        // procura o último registro da tabela
    }

    public function update(int|string $id, ?array $data): void {
        // não sei ainda, mas é para atualizar um registro pelo ID
        // User::update($id, [
        //    'name' => 'Felipe Santos',
        // ])
        // ou
        // $this->user->update([
        //    'name' => 'Felipe Santos'
        // ])
    }

    public function rawQuery(string $query, ?array $params = []): mixed {
        // executa uma query bruta no banco de dados
    }

}
