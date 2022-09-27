<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Base\BaseApiController;
use App\Http\Requests\Game\StoreOrUpdateGameRequest;
use App\Http\Resources\GameResource;
use App\Models\Game;
use App\Repositories\GameEloquentRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Throwable;

class GameController extends BaseApiController
{
    public function __construct(private GameEloquentRepository $repository)
    {
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request): JsonResponse
    {
        $games = $this->repository->get(relations: ['genres']);

        return $this->successResponse('List of games fetched.', GameResource::collection($games));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreOrUpdateGameRequest $request
     * @return JsonResponse
     */
    public function store(StoreOrUpdateGameRequest $request): JsonResponse
    {
        $game = $this->repository->create($request->validated());

        return $this->successResponse('Game created.', new GameResource($game), Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param Game $game
     * @return JsonResponse
     */
    public function show(Game $game): JsonResponse
    {
        return $this->successResponse('Game retrieved', new GameResource($game->load('genres')));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreOrUpdateGameRequest $request
     * @param Game $game
     * @return JsonResponse
     * @throws Throwable
     */
    public function update(StoreOrUpdateGameRequest $request, Game $game): JsonResponse
    {
        $game = $this->repository->update($game, $request->validated());

        return $this->successResponse('Game updated.', new GameResource($game));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Game $game
     * @return JsonResponse
     */
    public function destroy(Game $game): JsonResponse
    {
        $this->repository->delete($game);

        return $this->successResponse('Game deleted.', []);
    }
}
