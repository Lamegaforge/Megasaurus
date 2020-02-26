<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Repositories\GameRepository;
use App\Http\Controllers\Controller;
use App\Http\Transformers\GameTransformer;
use EllipseSynergie\ApiResponse\Contracts\Response;

class GameController extends Controller
{
    protected $response;
    protected $gameRepository;

    public function __construct(Response $response, GameRepository $gameRepository)
    {
        $this->response = $response;
        $this->gameRepository = $gameRepository;
    }

    public function index(Request $request)
    {
        $game = $this->gameRepository->paginate($limit = 10, $columns = ['*']);

        return $this->response->withPaginator($game, new GameTransformer);
    }

    public function show(Request $request)
    {
        $game = $this->gameRepository->find($request->clip_id);

        return $this->response->withItem($game, new GameTransformer);
    }
}
