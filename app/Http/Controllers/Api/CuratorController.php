<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\CuratorRepository;
use App\Http\Transformers\CuratorTransformer;
use EllipseSynergie\ApiResponse\Contracts\Response;

class CuratorController extends Controller
{
    protected $response;
    protected $curatorRepository;

    public function __construct(Response $response, CuratorRepository $curatorRepository)
    {
        $this->response = $response;
        $this->curatorRepository = $curatorRepository;
    }

    public function index(Request $request)
    {
        $clips = $this->curatorRepository->paginate($limit = 10, $columns = ['*']);        

        return $this->response->withPaginator($clips, new CuratorTransformer);
    }

    public function show(Request $request)
    {
        $clip = $this->curatorRepository->find($request->curator_id);

        return $this->response->withItem($clip, new CuratorTransformer);
    }
}
