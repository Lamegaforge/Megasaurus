<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Repositories\Criterias;
use App\Repositories\ClipRepository;
use App\Http\Controllers\Controller;
use App\Http\Transformers\ClipTransformer;
use EllipseSynergie\ApiResponse\Contracts\Response;

class ClipController extends Controller
{
    protected $response;
    protected $clipRepository;

    public function __construct(Response $response, ClipRepository $clipRepository)
    {
        $this->response = $response;
        $this->clipRepository = $clipRepository;
    }

    public function index(Request $request)
    {
        $this->clipRepository->pushCriteria(new Criterias\Active());
        
        $clips = $this->clipRepository->paginate($limit = 10, $columns = ['*']);        

        return $this->response->withPaginator($clips, new ClipTransformer);
    }

    public function show(Request $request)
    {
        $this->clipRepository->pushCriteria(new Criterias\Active());

        $clip = $this->clipRepository->find($request->clip_id);

        return $this->response->withItem($clip, new ClipTransformer);
    }
}
