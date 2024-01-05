<?php

use App\DTO\{
    CreateSupportDTO,
    UpdateSupportDTO
};
use App\Repositories\SupportRepositoryInterface;

class SupportEloquentORM implements SupportRepositoryInterface
{
    public function getAll(string $filter = null): array
    {
        // Código para buscar todos os registros
    }

    public function findOne(string $id): stdClass|null
    {
        // Código para buscar um registro pelo ID
    }

    public function delete(string $id): void
    {
        // Código para excluir um registro pelo ID
    }

    public function new(CreateSupportDTO $dto): stdClass
    {
        // Código para criar um novo registro com base nos dados fornecidos pelo DTO
    }

    public function update(UpdateSupportDTO $dto): stdClass|null
    {
        // Código para atualizar um registro com base nos dados fornecidos pelo DTO
    }
}
