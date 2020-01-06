<?php

namespace App\Http\Controllers\Api;

use Gate;
use Event;
use Illuminate\Http\Request;
use App\Repositories\Criterias;
use App\Repositories\ClipRepository;
use App\Http\Controllers\Controller;
use App\Http\Transformers\ClipTransformer;
use App\Events\ClipVisibilityHasBeenUpdated;
use App\Http\Requests\UpdateClipVisibilityRequest;
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
        if (Gate::none('access-deactivated-clips')) {
            $this->clipRepository->pushCriteria(new Criterias\Active());
        }

        $clips = $this->clipRepository->paginate($limit = 10, $columns = ['*']);

        return $this->response->withPaginator($clips, new ClipTransformer);
    }

    public function show(Request $request)
    {
        if (Gate::none('access-deactivated-clips')) {
            $this->clipRepository->pushCriteria(new Criterias\Active());
        }

        $clip = $this->clipRepository->find($request->clip_id);

        return $this->response->withItem($clip, new ClipTransformer);
    }

    public function updateVisibility(UpdateClipVisibilityRequest $request)
    {
        $clip = $this->clipRepository->update([
            'active' => (bool) $request->visibility,
        ], $request->clip_id);

        Event::dispatch(new ClipVisibilityHasBeenUpdated($clip));

        return $this->response->withItem($clip, new ClipTransformer);
    }    
}
