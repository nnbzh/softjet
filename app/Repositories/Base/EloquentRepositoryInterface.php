<?php

namespace App\Repositories\Base;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface EloquentRepositoryInterface
{
    /**
     * @param array $attributes
     * @return Model
     */
    public function create(array $attributes): Model;

    /**
     * @param int $id
     * @return Model
     */
    public function find(int $id): Model;

    /**
     * @param array $filters
     * @param array $relations
     * @return Collection|LengthAwarePaginator
     */
    public function get(array $filters = [], array $relations = []): Collection|LengthAwarePaginator;

    /**
     * @param Model $model
     * @param array $attributes
     * @return Model
     */
    public function update(Model $model, array $attributes): Model;

    /**
     * @param Model $model
     * @return mixed
     */
    public function delete(Model $model): Model;
}
