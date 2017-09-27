@extends('layouts.app')

@section('title')
 {{ $news->title }}
@endsection

@section('keywords')
lol,{{$news->seo}},{{$news->title}},haber,haberler
@endsection

@section('scripts') 
@endsection 

@section('content')

<h2>{{$news->title}}</h2>
<h6 style="font-weight:300">{{$news->created_at->format('d-m-Y')}}</h6>
<div class="row">
  <div class="col-md-12">
    <div class="news-detail-image">
      <img class="img img-responsive" src="/newsImages/{{$news->cover_image}}" alt="{{$news->title}}">
    </div>
  </div>
</div>  
<div class="row">
  <div class="col-md-9">
    {!! $news->content!!}
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <label for="tag">Etiketler:</label>
    <div id="tags" class="tags">
      @foreach($news->tags as $t)
      <a href="/etiketler/{{$t->tag}}">
        <span id="tag" class="tag">{{$t->tag}},</span>
      </a>
      @endforeach
    </div>
  </div>
</div>
@endsection