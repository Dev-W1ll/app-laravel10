<?php

use App\DTO\{
    CreateSupportDTO,
    UpdateSupportDTO
};
use App\Models\Support;
use App\Repositories\SupportRepositoryInterface;

class SupportEloquentORM implements SupportRepositoryInterface
{
    public function __construct(
        protected Support $model
    ) {}

    public function getAll(string $filter = null): array
    {
        return $this->model
                    ->where(function ($query) use ($filter) {
                        if ($filter) {
                            $query->where('subject', $filter);
                            $query->orWhere('body', 'like', "%{$filter}%");
                        }
                    })
                    ->all()
                    ->toArray();
    }

    public function findOne(string $id): stdClass|null
    {
        $support = $this->model->find($id);

        if (!$support) {
            return null;
        }

        return (object) $support->toArray();

    }

    public function delete(string $id): void
    {
        $this->model->findOrFail($id)->delete();
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
