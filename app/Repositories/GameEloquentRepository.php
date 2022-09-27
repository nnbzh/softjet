<?php

namespace App\Repositories;

use App\Models\Game;
use App\Repositories\Base\EloquentRepository;
use Illuminate\Database\Eloquent\Model;
use function PHPUnit\Framework\at;

class GameEloquentRepository extends EloquentRepository
{
    protected $model = Game::class;

    public function create(array $attributes): Model
    {
        $game = parent::create($attributes);

        if (isset($attributes['genres'])) {
            $game->genres()->sync($attributes['genres'] ?? []);
            $game->load('genres');
        };

        return $game;
    }

    public function update(Model $model, array $attributes): Model
    {
        $game = parent::update($model, $attributes);

        if (isset($attributes['genres'])) {
            $game->genres()->sync($attributes['genres'] ?? []);
            $game->load('genres');
        };

        return $game;
    }
}
