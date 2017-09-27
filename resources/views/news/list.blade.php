@extends('layouts.app')

@section('title')
 {{ $tag->tag }} Hakkındaki Haberler
@endsection
 
@section('keywords')
lol,haberler,makaleler,yeni,güncelleme
@endsection

@section('scripts') 

@endsection 

@section('content')
<h2>{{$tag->tag}} Hakkındaki Haberler</h2>
@foreach(array_chunk($news,3) as $chunk)
    <div class="row">
    @foreach($chunk as $n)
    <div class="col-md-4">
        <a href="/haberler/{{$n->seo}}" class="news-link">
            <div class="news-item">
                <div class="news-image">
                    <img src="/newsImages/{{$n->cover_image}}" alt="{{ $n->title }}" class="img img-responsive .img-rounded">
                </div>
                <div class="news-content">
                    <div class="news-title">
                        <h3>{{$n->title}}</h3>
                    </div>
                    <div class="news-subtitle">
                        <p>{{$n->subtitle}}</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @endforeach
    </div>
@endforeach

@endsection