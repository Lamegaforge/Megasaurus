@extends('layouts.base')

@section('content')
<div class="site-content" role="main">
    <nav class="bg-white" aria-label="breadcrumb">
        <div class="container d-flex align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="videos.html">Videos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Video Post</li>
            </ol>
            <div class="btn-group ml-auto">
                <a class="btn btn-default btn-icon btn-xs" href=""><i class="ya ya-small-left"></i></a>
                <a class="btn btn-default btn-icon btn-xs" href=""><i class="ya ya-small-right"></i></a>
            </div>
        </div>
    </nav>
    <section class="bg-image py-0 py-lg-5">
        <img class="background" src="https://img.youtube.com/vi/LDzYR5_TR2o/maxresdefault.jpg" alt="">
        <div class="container">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://clips.twitch.tv/embed?clip=KitschySucculentTroutVoHiYo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>                
            </div>
        </div>
    </section>
    <section class="py-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="post post-single border-bottom-dashed">
                        <div class="post-header post-header-author">
                            <img src="img/user-5.jpg" alt="">
                            <div>
                                <h1 class="post-title">Battlefield 5 Official Multiplayer Trailer</h1>
                                <div class="post-meta">
                                    <span class="post-meta-item"><i class="ya ya-calendar"></i> September 14, 2018</span>
                                    <span class="post-meta-item"><i class="ya ya-eye"></i> 4499 views</span>
                                    <a class="post-meta-item" href="#comments"><i class="ya ya-comment"></i> 5 comments</a>
                                </div>
                            </div>
                        </div>
                        <div class="post-body">
                            <p>Remain valley who mrs uneasy remove wooded him you. Her questions favourite him concealed. We to wife face took he. The taste begin early old why since dried can first. Prepared as or humoured formerly. Evil mrs true get post. Express village evening prudent my as ye hundred forming thoughts she why not directly packages you.</p>
                            <a class="btn btn-outline btn-block btn-sm mt-4" href="#" role="button">Read More <i class="ya ya-caret-down m-0"></i></a>
                        </div>
                    </div>
                    <!-- end .post-single -->
                    <div id="comments" class="comments mt-3 mt-lg-0">
                        <div class="d-flex align-items-center mb-3">
                            <h5 class="mb-0"><i class="ya ya-comment mr-1"></i> 5 Comments</h5>
                            <div class="dropdown ml-auto">
                                <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sort by date
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item active" href="#">Latest</a>
                                    <a class="dropdown-item" href="#">Oldest</a>
                                    <a class="dropdown-item" href="#">Best</a>
                                    <a class="dropdown-item" href="#">Random</a>
                                </div>
                            </div>
                        </div>
                        <div class="alert alert-primary">
                            Please login to submit a comment under this post!
                        </div>
                        <div class="media">
                            <div class="avatar avatar-badge">
                                <img src="img/user-3.jpg" alt="Elizabeth">
                                <a class="badge badge-primary" href="#" data-toggle="tooltip" data-placement="bottom" title="Add friend"><i class="ya ya-user-add"></i></a>
                            </div>
                            <div class="media-body">
                                <div class="d-flex">
                                    <div class="d-flex">
                                        <a class="h6" href="profile.html">Elizabeth</a>
                                        <div class="media-meta">9 hours ago</div>
                                    </div>
                                    <div class="media-tools">
                                        <a class="btn btn-link btn-icon btn-xs" href="#" data-toggle="tooltip" title="hide"><i class="ya ya-hide"></i></a>
                                        <a class="btn btn-link btn-icon btn-xs" href="#" data-toggle="tooltip" title="report"><i class="ya ya-flag"></i></a>
                                    </div>
                                </div>
                                <p>Attended no do thoughts me on dissuade scarcely. Own are pretty spring suffer old denote his. By proposal speedily mr striking am. But attention sex questions applauded how happiness.</p>
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-default btn-xs mr-2">Reply</button>
                                    <button class="btn btn-default btn-xs"><i class="ya ya-like ml-0"></i> (96)</button>
                                </div>
                            </div>
                        </div>
                        <!-- end .media -->
                        <div class="media">
                            <div class="avatar">
                                <img src="img/user-1.jpg" alt="Nathan Drake">
                            </div>
                            <div class="media-body">
                                <div class="d-flex">
                                    <div class="d-flex">
                                        <a class="h6" href="profile.html">Nathan Drake</a>
                                        <div class="media-meta">10 hours ago</div>
                                    </div>
                                    <div class="media-tools">
                                        <a class="btn btn-link btn-icon btn-xs" href="#" data-toggle="tooltip" title="hide"><i class="ya ya-hide"></i></a>
                                        <a class="btn btn-link btn-icon btn-xs" href="#" data-toggle="tooltip" title="report"><i class="ya ya-flag"></i></a>
                                    </div>
                                </div>
                                <p>Repulsive questions contented him few extensive supported. Of remarkably thoroughly he appearance in. Supposing tolerably applauded or of be. Suffering unfeeling so objection agreeable allowance me of. Ask within entire season sex common far who family.</p>
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-default btn-xs mr-2">Reply</button>
                                    <button class="btn btn-default btn-xs"><i class="ya ya-like ml-0"></i> (27)</button>
                                </div>
                                <div class="media">
                                    <div class="avatar">
                                        <img src="img/user-4.jpg" alt="Trevor">
                                    </div>
                                    <div class="media-body">
                                        <div class="d-flex">
                                            <div class="d-flex">
                                                <a class="h6" href="profile.html">Trevor</a>
                                                <div class="media-meta">14 hours ago</div>
                                            </div>
                                            <div class="media-tools">
                                                <a class="btn btn-link btn-icon btn-xs" href="#" data-toggle="tooltip" title="hide"><i class="ya ya-hide"></i></a>
                                                <a class="btn btn-link btn-icon btn-xs" href="#" data-toggle="tooltip" title="report"><i class="ya ya-flag"></i></a>
                                            </div>
                                        </div>
                                        <p>Delightful remarkably mr on announcing themselves entreaties favourable. About to in so terms voice at. Equal an would is found seems of. The particular friendship one sufficient terminated frequently themselves.</p>
                                        <div class="d-flex align-items-center">
                                            <button class="btn btn-default btn-xs mr-2">Reply</button>
                                            <button class="btn btn-default btn-xs"><i class="ya ya-like ml-0"></i> (72)</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="avatar">
                                        <img src="img/user-5.jpg" alt="Clark Kent">
                                    </div>
                                    <div class="media-body">
                                        <div class="d-flex">
                                            <div class="d-flex">
                                                <a class="h6" href="profile.html">Clark Kent</a>
                                                <div class="media-meta">15 hours ago</div>
                                            </div>
                                            <div class="media-tools">
                                                <a class="btn btn-link btn-icon btn-xs" href="#" data-toggle="tooltip" title="hide"><i class="ya ya-hide"></i></a>
                                                <a class="btn btn-link btn-icon btn-xs" href="#" data-toggle="tooltip" title="report"><i class="ya ya-flag"></i></a>
                                            </div>
                                        </div>
                                        <p>To sorry world an at do spoil along. Incommode he depending do frankness remainder to. Edward day almost active him friend thirty piqued.</p>
                                        <div class="d-flex align-items-center">
                                            <button class="btn btn-default btn-xs mr-2">Reply</button>
                                            <button class="btn btn-default btn-xs"><i class="ya ya-like ml-0"></i> (29)</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end .media -->
                        <div class="media">
                            <div class="avatar">
                                <img src="img/user-2.jpg" alt="Venom">
                            </div>
                            <div class="media-body">
                                <div class="d-flex">
                                    <div class="d-flex">
                                        <a class="h6" href="profile.html">Venom</a>
                                        <div class="media-meta">15 hours ago</div>
                                    </div>
                                    <div class="media-tools">
                                        <a class="btn btn-link btn-icon btn-xs" href="#" data-toggle="tooltip" title="hide"><i class="ya ya-hide"></i></a>
                                        <a class="btn btn-link btn-icon btn-xs" href="#" data-toggle="tooltip" title="report"><i class="ya ya-flag"></i></a>
                                    </div>
                                </div>
                                <p>Barton did feebly change man she afford square add. Want eyes by neat so just must. Past draw tall up face show rent oh mr. Required is debating extended wondered as do. New get described applauded incommode shameless out extremity but. Resembled at perpetual no believing is otherwise sportsman.</p>
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-default btn-xs mr-2">Reply</button>
                                    <button class="btn btn-default btn-xs"><i class="ya ya-like ml-0"></i> (48)</button>
                                </div>
                            </div>
                        </div>
                        <!-- end .media -->
                    </div>
                    <!-- end .comments -->
                    <h5 class="mt-4 mt-md-5 mb-3">Leave a comment</h5>
                    <form class="mb-4 mb-lg-0">
                        <div class="form-group">
                            <textarea class="form-control" rows="5"></textarea>
                            <small class="form-text text-muted">Enter your comment in the textarea. Maximum 250 characters.</small>
                        </div>
                        <button type="button" class="btn btn-primary">Submit comment</button>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="widget widget-list">
                        <h5 class="widget-header mb-1">Recent Videos</h5>
                        <div class="media">
                            <a class="img-cover img-lg" href="#">
                                <img src="https://i.ytimg.com/vi/YIRWzlMki4E/mqdefault.jpg" alt="">
                            </a>
                            <div class="media-body">
                                <h6><a href="#">Far Cry 5 Live Action Gameplay Teaser Trailer</a></h6>
                                <div class="font-size-sm font-weight-semibold text-muted">September 14, 2018</div>
                            </div>
                        </div>
                        <div class="media">
                            <a class="img-cover img-lg" href="#">
                                <img src="https://i.ytimg.com/vi/HYrcX8QIIAs/mqdefault.jpg" alt="">
                            </a>
                            <div class="media-body">
                                <h6><a href="#">God of War 4: The Lost Pages of Norse</a></h6>
                                <div class="font-size-sm font-weight-semibold text-muted">September 13, 2018</div>
                            </div>
                        </div>
                        <div class="media">
                            <a class="img-cover img-lg" href="#">
                                <img src="https://i.ytimg.com/vi/N9fTYUj8pLE/mqdefault.jpg" alt="">
                            </a>
                            <div class="media-body">
                                <h6><a href="#">Cyberpunk 2077 Gameplay Walkthrough 50 Minutes Demo</a></h6>
                                <div class="font-size-sm font-weight-semibold text-muted">September 11, 2018</div>
                            </div>
                        </div>
                        <div class="media">
                            <a class="img-cover img-lg" href="#">
                                <img src="https://i.ytimg.com/vi/czv5bp3iObY/mqdefault.jpg" alt="">
                            </a>
                            <div class="media-body">
                                <h6><a href="#">Forza Horizon 4 Summer Season Gameplay Demo</a></h6>
                                <div class="font-size-sm font-weight-semibold text-muted">August 25, 2018</div>
                            </div>
                        </div>
                        <div class="media">
                            <a class="img-cover img-lg" href="#">
                                <img src="https://i.ytimg.com/vi/nLR5DXRqtis/mqdefault.jpg" alt="">
                            </a>
                            <div class="media-body">
                                <h6><a href="#">Battlefield 5 - Battle Royale Mode First Look Gameplay Trailer</a></h6>
                                <div class="font-size-sm font-weight-semibold text-muted">August 25, 2018</div>
                            </div>
                        </div>
                        <div class="media">
                            <a class="img-cover img-lg" href="#">
                                <img src="https://i.ytimg.com/vi/aUeZB5mA1JA/mqdefault.jpg" alt="">
                            </a>
                            <div class="media-body">
                                <h6><a href="#">40 Minutes of PUBG's New Desert Map Gameplay</a></h6>
                                <div class="font-size-sm font-weight-semibold text-muted">August 23, 2018</div>
                            </div>
                        </div>
                        <div class="media">
                            <a class="img-cover img-lg" href="#">
                                <img src="https://i.ytimg.com/vi/YpEFYDkpXE0/mqdefault.jpg" alt="">
                            </a>
                            <div class="media-body">
                                <h6><a href="#">Uncharted: The Nathan Drake Review</a></h6>
                                <div class="font-size-sm font-weight-semibold text-muted">August 20, 2018</div>
                            </div>
                        </div>
                        <div class="media">
                            <a class="img-cover img-lg" href="#">
                                <img src="https://i.ytimg.com/vi/By4cVkexOoE/mqdefault.jpg" alt="">
                            </a>
                            <div class="media-body">
                                <h6><a href="#">Greedfall Actual Gameplay Footage Breakdown</a></h6>
                                <div class="font-size-sm font-weight-semibold text-muted">August 19, 2018</div>
                            </div>
                        </div>
                        <div class="media">
                            <a class="img-cover img-lg" href="#">
                                <img src="https://i.ytimg.com/vi/BGFhr0JcDew/mqdefault.jpg" alt="">
                            </a>
                            <div class="media-body">
                                <h6><a href="#">Shadow of the Tomb Raider All Cutscenes Movie 60FPS</a></h6>
                                <div class="font-size-sm font-weight-semibold text-muted">August 05, 2018</div>
                            </div>
                        </div>
                        <div class="media">
                            <a class="img-cover img-lg" href="#">
                                <img src="https://i.ytimg.com/vi/mcF6KH4BCxA/mqdefault.jpg" alt="">
                            </a>
                            <div class="media-body">
                                <h6><a href="#">Anthem Full Gameplay Demo — E3 Best Action Game Winner</a></h6>
                                <div class="font-size-sm font-weight-semibold text-muted">July 30, 2018</div>
                            </div>
                        </div>
                        <div class="media">
                            <a class="img-cover img-lg" href="#">
                                <img src="https://i.ytimg.com/vi/N0EHIQQ-UP0/mqdefault.jpg" alt="">
                            </a>
                            <div class="media-body">
                                <h6><a href="#">God of War Gameplay Trailer Paris Week</a></h6>
                                <div class="font-size-sm font-weight-semibold text-muted">July 29, 2018</div>
                            </div>
                        </div>
                        <a class="btn btn-outline btn-block btn-sm mt-2" href="#" role="button">More Videos</a>
                    </div>
                    <!-- end .widget-video -->
                </div>
            </div>
        </div>
    </section>
</div>
@endsection