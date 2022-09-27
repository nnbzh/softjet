<?php

namespace App\Repositories\Base;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Throwable;

abstract class EloquentRepository implements EloquentRepositoryInterface
{
    protected $model;

    public function create(array $attributes): Model
    {
        return $this->newQuery()->create($attributes);
    }

    public function find(int $id): Model
    {
        return $this->newQuery()->find($id);
    }

    public function get(array $filters = [], array $relations = []): Collection|LengthAwarePaginator
    {
        return $this->newQuery()->with($relations)->paginate();
    }

    /**
     * @throws Throwable
     */
    public function update(Model $model, array $attributes): Model
    {
        $model->fill($attributes);
        $model->saveOrFail();

        return $model;
    }

    public function delete(Model $model): Model
    {
        $model->delete();

        return $model;
    }

    private function newQuery(): Builder
    {
        return ((new $this->model)->newQuery());
    }
}
