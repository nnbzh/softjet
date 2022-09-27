<?php

namespace App\Repositories;

use App\Models\Genre;
use App\Repositories\Base\EloquentRepository;
use Illuminate\Database\Eloquent\Model;

class GenreEloquentRepository extends EloquentRepository
{
    protected $model = Genre::class;

    public function create(array $attributes): Model
    {
        $genre = parent::create($attributes);

        if (isset($attributes['games'])) {
            $genre->games()->sync($attributes['games'] ?? []);
            $genre->load('games');
        };

        return $genre;
    }

    public function update(Model $model, array $attributes): Model
    {
        $genre
            = parent::update($model, $attributes);

        if (isset($attributes['games'])) {
            $genre->games()->sync($attributes['games'] ?? []);
            $genre->load('games');
        };

        return $genre;
    }
}
