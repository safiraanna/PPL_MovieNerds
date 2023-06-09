@extends('layouts.main')

@section('container')
        <h1 class="mb-5">{{ $title }}</h1>
        <div class="container">
            <div class="row">
                @foreach ($tags as $tag)
                    <div class="col-md-4">
                        <a href="/articles/?tag={{ $tag->slug }}">
                            <div class="card bg-dark text-white">
                                <img src="https://source.unsplash.com/500x500/?{{ $tag->name }}"  class="card-img" alt="{{ $tag->name }}">                            
                                <div class="card-img-overlay d-flex align-items-center p-0">
                                    <h5 class="card-title text-center flex-fill p-4 fs-5" style="background-color: rgba(0, 0,0, 0.6)">{{ $tag->name }}</h5>                    
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
@endsection