@extends('layouts.base')

@section('title', 'qsdqsdqs')
@section('body', 'fixed-navbar page-lg')

@section('content')
<div class="site-content" role="main">
    <nav class="bg-white" aria-label="breadcrumb">
        <div class="container d-flex align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="videos.html">Clips</a></li>
                <li class="breadcrumb-item"><a href="videos.html">{{$clip->game}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$clip->title}}</li>
            </ol>
            <div class="btn-group ml-auto">
                <a class="btn btn-default btn-icon btn-xs" href=""><i class="ya ya-small-left"></i></a>
                <a class="btn btn-default btn-icon btn-xs" href=""><i class="ya ya-small-right"></i></a>
            </div>
        </div>
    </nav>
    <section class="bg-image py-0 py-lg-5">
        <img class="background" src="{{$clip->thumbnail}}" alt="">
        <div class="container">
            @livewire('embed-clip', [
                'clip' => $clip,
            ])            
        </div>
    </section>
    <section class="py-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="post post-single border-bottom-dashed">
                        <div class="post-header post-header-author">
                            <img src="https://image.noelshack.com/fichiers/2020/13/6/1585391073-uozsj9ni-400x400.jpg" alt="">
                            <div>
                                <h1 class="post-title">{{$clip->title}}</h1>
                                <div class="post-meta">
                                    <span class="post-meta-item"><i class="ya ya-calendar"></i> {{$clip->approved_at}}</span>
                                    <span class="post-meta-item"><i class="ya ya-eye"></i> {{$clip->views}} views</span>
                                    <a class="post-meta-item" href="#comments"><i class="ya ya-comment"></i> 5 comments</a>
                                </div>
                            </div>
                        </div>
{{--                         <div class="post-body">
                            <p></p>
                        </div> --}}
                    </div>
                    <!-- end .post-single -->
                    <div id="comments" class="comments mt-3 mt-lg-0">
                        <div class="d-flex align-items-center mb-3">
                            <h5 class="mb-0"><i class="ya ya-comment mr-1"></i> 2 Comments</h5>
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
                            qsd qsd qsd qsd 
                        </div>
{{--                         <div class="media">
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
                        </div> --}}
                        <!-- end .media -->
                        <div class="media">
                            <div class="avatar">
                                <img src="https://image.noelshack.com/fichiers/2020/13/6/1585391073-uozsj9ni-400x400.jpg" alt="Nathan Drake">
                            </div>
                            <div class="media-body">
                                <div class="d-flex">
                                    <div class="d-flex">
                                        <a class="h6" href="profile.html">TheRusianOne</a>
                                        <div class="media-meta">10 hours ago</div>
                                    </div>
                                    <div class="media-tools">
                                        <a class="btn btn-link btn-icon btn-xs" href="#" data-toggle="tooltip" title="report"><i class="ya ya-flag"></i></a>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-default btn-xs mr-2">Reply</button>
                                    <button class="btn btn-default btn-xs"><i class="ya ya-like ml-0"></i> (27)</button>
                                </div>
                                <div class="media">
                                    <div class="avatar">
                                        <img src="https://image.noelshack.com/fichiers/2020/13/6/1585391132-kplub30b-400x400.png" alt="Trevor">
                                    </div>
                                    <div class="media-body">
                                        <div class="d-flex">
                                            <div class="d-flex">
                                                <a class="h6" href="profile.html">Adwim</a>
                                                <div class="media-meta">14 hours ago</div>
                                            </div>
                                            <div class="media-tools">
                                                <a class="btn btn-link btn-icon btn-xs" href="#" data-toggle="tooltip" title="report"><i class="ya ya-flag"></i></a>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <div class="d-flex align-items-center">
                                            <button class="btn btn-default btn-xs mr-2">Reply</button>
                                            <button class="btn btn-default btn-xs"><i class="ya ya-like ml-0"></i> (72)</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="avatar">
                                        <img src="https://image.noelshack.com/fichiers/2020/13/6/1585391132-kplub30b-400x400.png" alt="Trevor">
                                    </div>
                                    <div class="media-body">
                                        <div class="d-flex">
                                            <div class="d-flex">
                                                <a class="h6" href="profile.html">Adwim</a>
                                                <div class="media-meta">14 hours ago</div>
                                            </div>
                                            <div class="media-tools">
                                                <a class="btn btn-link btn-icon btn-xs" href="#" data-toggle="tooltip" title="report"><i class="ya ya-flag"></i></a>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <div class="d-flex align-items-center">
                                            <button class="btn btn-default btn-xs mr-2">Reply</button>
                                            <button class="btn btn-default btn-xs"><i class="ya ya-like ml-0"></i> (72)</button>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                        <div class="media">
                            <div class="avatar">
                                <img src="https://image.noelshack.com/fichiers/2020/13/6/1585391073-uozsj9ni-400x400.jpg" alt="Nathan Drake">
                            </div>
                            <div class="media-body">
                                <div class="d-flex">
                                    <div class="d-flex">
                                        <a class="h6" href="profile.html">TheRusianOne</a>
                                        <div class="media-meta">10 hours ago</div>
                                    </div>
                                    <div class="media-tools">
                                        <a class="btn btn-link btn-icon btn-xs" href="#" data-toggle="tooltip" title="report"><i class="ya ya-flag"></i></a>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-default btn-xs mr-2">Reply</button>
                                    <button class="btn btn-default btn-xs"><i class="ya ya-like ml-0"></i> (27)</button>
                                </div>
                                <div class="media">
                                    <div class="avatar">
                                        <img src="https://image.noelshack.com/fichiers/2020/13/6/1585391132-kplub30b-400x400.png" alt="Trevor">
                                    </div>
                                    <div class="media-body">
                                        <div class="d-flex">
                                            <div class="d-flex">
                                                <a class="h6" href="profile.html">Adwim</a>
                                                <div class="media-meta">14 hours ago</div>
                                            </div>
                                            <div class="media-tools">
                                                <a class="btn btn-link btn-icon btn-xs" href="#" data-toggle="tooltip" title="report"><i class="ya ya-flag"></i></a>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <div class="d-flex align-items-center">
                                            <button class="btn btn-default btn-xs mr-2">Reply</button>
                                            <button class="btn btn-default btn-xs"><i class="ya ya-like ml-0"></i> (72)</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                        <!-- end .media -->
                    </div>
                    <!-- end .comments -->
                    <h5 class="mt-4 mt-md-5 mb-3">Exprime toi, connard</h5>
                    @livewire('form-comment', [
                        'clip' => \App\Clip::first(),
                    ])
                </div>
                <div class="col-lg-4">
                    @include('widgets.recent-clips')
                    <!-- end .widget-video -->
                </div>
            </div>
        </div>
    </section>
</div>
@endsection