<?php

namespace app\models;

use app\entities\Entity;

abstract class Model {

    private ?string $table = null;

    // public ?Entity $entity = null;

    public function __construct()
    {
        $this->table = $this->table();
    }

    private function table(): string {

        $className = get_called_class();
        $className = explode('\\', $className);
        $className = end($className);

        return strtolower($className) . 's';
    }

    private function entity(): Entity {

        $className = get_called_class();
        $className = explode('\\', $className);
        $className = '\\app\\entities\\' .  end($className) . 'Entity';

        return new $className();
    }

    public function create(array $data): void {
        $keys = implode(', ', array_keys($data));
        $placeholder = array_map(function($key) {
            return ":$key";
        }, array_keys($data));
        $placeholder = implode(', ', $placeholder);

        $data = new $this->entity(...$data);

        $this->rawQuery(
            query: "INSERT INTO {$this->table} ({$keys}) VALUES ({$placeholder})",
            params: $data
        );
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

    private function rawQuery(string $query, array|Entity|null $params = []): void {
        // executa uma query bruta no banco de dados
        dd(query: $query, params: $params);
    }

}
