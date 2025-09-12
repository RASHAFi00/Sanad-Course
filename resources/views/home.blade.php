@extends('layouts.app')


@section('content')


    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
            </div>
        </div>
    </header>
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Featured blog post-->
                <div class="card mb-4">
                    <a href="#!"><img class="card-img-top" src="{{asset("media/images/25572.jpg")}}" alt="..." /></a>
                    <div class="card-body">

                        <div class="small text-muted">
                            {{ $featuredpost->created_at }}
                            {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, accusamus odio minima dicta
                            officiis delectus. --}}
                        </div>

                        <h2 class="card-title">
                            {{ $featuredpost->title }}
                            {{-- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat, beatae. --}}
                        </h2>
                        <p class="card-text">
                            {{ $featuredpost->text }}

                            {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, illo autem unde dolor
                            facilis modi! --}}

                        </p>
                        <a class="btn btn-primary" href="#!">Read more →</a>
                    </div>
                </div>
                <!-- Nested row for non-featured blog posts-->
                <div class="row">

                    @foreach ($posts as $post)

                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4 post-card">
                                <a href="#!"><img class="card-img-top" src="{{asset("media/images/image_omelette.jpeg")}}"
                                        alt="..." /></a>
                                <div class="card-body">
                                {{-- @dd($post) --}}
                                    <div class="small text-muted"> {{ $post->created_at }} </div>
                                    <h2 class="card-title h4"> {{ $post->title }} </h2>
                                    <p class="card-text">
                                        {{ $post->text }}
                                    </p>
                                    <a class="btn btn-primary" href="#!">Read more →</a>
                                </div>
                            </div>
                        </div>

                    @endforeach

                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"
                                    aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav>
                </div>



            </div>

            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Search widget-->
                <div class="card mb-4">
                    <div class="card-header">Search</div>
                    <div class="card-body">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Enter search term..."
                                aria-label="Enter search term..." aria-describedby="button-search" />
                            <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                        </div>
                    </div>
                </div>
                <!-- Categories widget-->
                <div class="card mb-4">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">

                                @foreach ($cats as $cat)

                                    <li> <a href="{{route('home')}}?category_id={{$cat->id}}"> {{$cat->name}} </a> </li>

                                @endforeach

                            </div>

                        </div>
                    </div>
                </div>
                <!-- Side widget-->
                <div class="card mb-4">
                    <div class="card-header">Side Widget</div>
                    <div class="card-body">You can put anything you want inside of these side widgets. They are easy to
                        use, and feature the Bootstrap 5 card component!</div>
                </div>
            </div>
        </div>
    </div>


@endsection
