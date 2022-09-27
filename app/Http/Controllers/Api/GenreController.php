<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Base\BaseApiController;
use App\Http\Requests\Genre\StoreOrUpdateGenreRequest;
use App\Http\Resources\GameResource;
use App\Http\Resources\GenreResource;
use App\Models\Genre;
use App\Repositories\GenreEloquentRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Throwable;

class GenreController extends BaseApiController
{
    public function __construct(private GenreEloquentRepository $repository)
    {
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request): JsonResponse
    {
        $games = $this->repository->get(relations: ['games']);

        return $this->successResponse('List of genres fetched.', GenreResource::collection($games));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreOrUpdateGenreRequest $request
     * @return JsonResponse
     */
    public function store(StoreOrUpdateGenreRequest $request): JsonResponse
    {
        $genre = $this->repository->create($request->validated());

        return $this->successResponse('Genre created.', new GenreResource($genre), Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param Genre $genre
     * @return JsonResponse
     */
    public function show(Genre $genre): JsonResponse
    {
        return $this->successResponse('Genre retrieved', new GenreResource($genre->load('games')));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreOrUpdateGenreRequest $request
     * @param Genre $genre
     * @return JsonResponse
     * @throws Throwable
     */
    public function update(StoreOrUpdateGenreRequest $request, Genre $genre): JsonResponse
    {
        $genre = $this->repository->update($genre, $request->validated());

        return $this->successResponse('Game updated.', new GenreResource($genre));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Genre $genre
     * @return JsonResponse
     */
    public function destroy(Genre $genre): JsonResponse
    {
        $this->repository->delete($genre);

        return $this->successResponse('Genre deleted.', []);
    }
}
