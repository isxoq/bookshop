@extends('layouts.master')

@section('content')
    <!-- Slider Area -->
    <section class="welcome-area">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="slider-img slider-bg-1"></div>
                    <div class="carousel-caption">
                        <h2>Badiiy kitoblar</h2>
                        <p class="d-none d-md-block">Let the pain itself be loved, enhanced, adipisicing. The wise man of their labors.
                            Because of the hardships we have in our offices, the practice of cheering for forgiveness will indeed come to pass.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-img slider-bg-2"></div>
                    <div class="carousel-caption">
                        <h2>Ilmiy kitoblar</h2>
                        <p class="d-none d-md-block">The love of the main character, the adipisic The wise man of their labors, is the suffering itself. Duties due to our distress, the practice of appealing for pardon will be implemented.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-img slider-bg-3"></div>
                    <div class="carousel-caption">
                        <h2>Hikmat kitoblari</h2>
                        <p class="d-none d-md-block">The love of the main character, the adipisic The wise man of their labors, is the suffering itself. Duties due to our distress, the practice of appealing for pardon will be implemented.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main-content">
        <div class="container">
            <div class="row">
                <!-- Sidebar Content -->
                @include('layouts.includes.side-bar')
                <!-- //Sidebar End -->
                <div class="col-md-8">
                    <div class="content-area">
                        <div class="card my-4">
                            <div class="card-header bg-dark">
                                <h4><a href="{{route('category', 'engineering')}}" class="text-white">Muhandislik kitoblari</a></h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @if(! $engineering_books->count())
                                       <div class="alert alert-warning">Kitoblar mavjud emas</div>
                                    @else
                                        @foreach($engineering_books as $book)
                                            <div class="col-lg-3 col-6">
                                                <div class="book-wrap">
                                                    <div class="book-image mb-2">
                                                        <a href="{{route('book-details', $book->id)}}"><img src="{{$book->image_url}}" alt=""></a>
                                                        @if($book->discount_rate)
                                                            <h6><span class="badge badge-warning discount-tag">Discount {{$book->discount_rate}}%</span></h6>
                                                        @endif
                                                    </div>
                                                    <div class="book-title mb-2">
                                                        <a href="{{route('book-details', $book->id)}}">{{str_limit($book->title, 30)}}</a>
                                                    </div>
                                                    <div class="book-author mb-2">
                                                        <small>By <a href="{{route('author', $book->author->slug)}}">{{$book->author->name}}</a></small>
                                                    </div>
                                                    <div class="pbook-price mb-3">
                                                        @if($book->discount_rate)
                                                            <span class="line-through mr-3">${{$book->init_price}}</span>
                                                        @endif
                                                        <span class=""><strong>${{$book->price}}</strong></span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="show-more pt-2 text-right">
                                    <a href="{{route('category', 'engineering')}}" class="text-secondary">Ko'proq ko'rish <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card my-4">
                            <div class="card-header bg-dark">
                                <h4><a href="{{route('category', 'literature')}}" class="text-white">Adabiy kitoblar</a></h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @if(! $literature_books->count())
                                        <div class="alert alert-warning">Kitoblar mavjud emas</div>
                                    @else
                                        @foreach($literature_books as $book)
                                            <div class="col-lg-3 col-6">
                                                <div class="book-wrap">
                                                    <div class="book-image mb-2">
                                                        <a href="{{route('book-details', $book->id)}}"><img src="{{$book->image_url}}" alt=""></a>
                                                        @if($book->discount_rate)
                                                            <h6><span class="badge badge-warning discount-tag">Discount {{$book->discount_rate}}%</span></h6>
                                                        @endif
                                                    </div>
                                                    <div class="book-title mb-2">
                                                        <a href="{{route('book-details', $book->id)}}">{{str_limit($book->title, 30)}}</a>
                                                    </div>
                                                    <div class="book-author mb-2">
                                                        <small>By <a href="{{route('author', $book->author->slug)}}">{{$book->author->name}}</a></small>
                                                    </div>
                                                    <div class="pbook-price mb-3">
                                                        @if($book->discount_rate)
                                                            <span class="line-through mr-3">${{$book->init_price}}</span>
                                                        @endif
                                                        <span class=""><strong>${{$book->price}}</strong></span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="show-more pt-2 text-right">
                                    <a href="{{route('category', 'literature')}}" class="text-secondary">Ko'proq ko'rish <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="discount-book mb-5" id="discount-books">
        <div class="container">
            <div class="card mb-10">
                <div class="card-header bg-dark text-white">
                    <h4><a href="{{route('discount-books')}}" class="text-white">Chegirmalar</a></h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        @if(! $discount_books->count())
                            <div class="alert alert-warning">Kitob mavjud emas</div>
                        @else
                            @foreach($discount_books as $book)
                                <div class="col-lg-2 col-6">
                                    <div class="book-wrap">
                                        <div class="book-image mb-2">
                                            <a href="{{route('book-details', $book->id)}}"><img src="{{$book->image_url}}" alt=""></a>
                                            @if($book->discount_rate)
                                                <h6><span class="badge badge-warning discount-tag">Discount {{$book->discount_rate}}%</span></h6>
                                            @endif
                                        </div>
                                        <div class="book-title mb-2">
                                            <a href="{{route('book-details', $book->id)}}">{{str_limit($book->title, 30)}}</a>
                                        </div>
                                        <div class="book-author mb-2">
                                            <small>By <a href="{{route('author', $book->author->slug)}}">{{$book->author->name}}</a></small>
                                        </div>
                                        <div class="pbook-price mb-3">
                                            @if($book->discount_rate)
                                                <span class="line-through mr-3">${{$book->init_price}}</span>
                                            @endif
                                            <span class=""><strong>${{$book->price}}</strong></span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="show-more pt-2 text-right">
                        <a href="{{route('discount-books')}}" class="text-secondary">Ko'proq ko'rish <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
