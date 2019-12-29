<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
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

    public function show(Requests\ShowClipRequest $request)
    {
        $this->clipRepository->pushCriteria(new Criterias\Active());

        $clip = $this->clipRepository->find($request->clip_id);

        return $this->response->withItem($clip, new ClipTransformer);
    }
}
