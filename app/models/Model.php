<?php

namespace app\models;

use app\entities\Entity;
use core\database\Connection;

abstract class Model {

    private ?string $table = null;

    // public ?Entity $entity = null;

    public function __construct()
    {
        $this->table = $this->getTable();
    }

    private function getTable(): string {

        $className = get_called_class();
        $className = explode('\\', $className);
        $className = end($className);

        return strtolower($className) . 's';
    }

    private function getEntity(?array $data = []): Entity {

        $className = get_called_class();
        $className = explode('\\', $className);
        $className = '\\app\\entities\\' .  end($className) . 'Entity';

        return new $className(...$data);
    }

    public function create(array $data): void {
        $keys = implode(', ', array_keys($data));

        $placeholder = implode(', ',
            array_map(function($key) {
                return ":$key";
            }, array_keys($data))
        );

        $data = $this->getEntity($data);

        $this->rawQuery(
            query: "INSERT INTO {$this->table} ({$keys}) VALUES ({$placeholder})",
            params: (array) $data
        );
    }

    public function all() {
        // retorna todos os registros de uma tabela
        // $keys = implode(', ', array_keys($data));
        // $placeholder = implode(', ',
        //     array_map(function($key) {
        //         return ":$key";
        //     }, array_keys($data))
        // );
        // $data = [];

        // return $this->rawQuery(
        //     query: "INSERT INTO {$this->table} ({$keys}) VALUES ({$placeholder})",
        //     params: (array) $data
        // );
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

        // montar query com os placeholders

        // executar a query com os parâmetros

        //    $pdo = Connection::getConnection();

        //    dd($pdo);

        $pdo = Connection::getConnection();

        $stmt = $pdo->prepare($query);

        $result = $stmt->execute((array) $params);

        // tem ou não tem retorno
        dd(query: $query, params: $params, result: $result ?? null);
    }

}
