@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <section class="content-section" id="portfolio">
                <div class="container">
                  <div class="content-section-heading text-center">
                    <h2 class="mb-5">Available Quizes</h2>
                  </div>
                  <div class="row no-gutters">
                    @foreach($categories as $category)
                    <div class="col-lg-6">
                      <a class="portfolio-item" href="{{route('quiz',$category->id)}}">
                        <span class="caption">
                          <div class="caption-content">
                            <h3>{{$category->name}}</h3>
                            <p class="">{{$category->description}}</p>
                          </div>
                        </span>
                        <img class="img-fluid" src="{{asset('storage/thumbnails/' . $category->image)}}" alt="">
                      </a>
                    </div>
                    @endforeach
                  </div>
                </div>
              </section>
        </div>
    </div>
</div>
@endsection
