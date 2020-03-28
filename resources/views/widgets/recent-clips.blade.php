<div class="widget widget-list">
    <h5 class="widget-header mb-1">Clips récents</h5>
    @foreach(\App\Clip::limit(10)->get() as $clip)
    <div class="media">
        <a class="img-cover img-lg" href="#">
            <img src="{{$clip->thumbnail}}" alt="">
        </a>
        <div class="media-body">
            <h6><a href="#">{{$clip->title}}</a></h6>
            <div class="font-size-sm font-weight-semibold text-muted">{{$clip->game}}</div>
            <div class="font-size-sm font-weight-semibold text-muted">{{$clip->approved_at}}</div>
        </div>
    </div>
    @endforeach
    <a class="btn btn-outline btn-block btn-sm mt-2" href="#" role="button">More Clips</a>
</div>