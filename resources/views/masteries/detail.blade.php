@extends('layouts.app') 

@section('title')
 {{ $mastery->name }}
@endsection

@section('keywords')
lol,kabiliyet,{{$mastery->name}},{{$mastery->seo}}adc,solo,mid,sup,jung,ormanci,top,destek,orta
@endsection

@section('scripts') 
<script>
    window.mastery = <?= json_encode($mastery->name); ?>;    
</script>
@endsection 

@section('content')
<div class="row">
    <div class="col-md-2">
      <img src="/img/mastery/{{$mastery->image}}" alt="">
    </div>
    <div class="col-md-2">
      <p>{{$mastery->name}}</p>
    </div>
    <div class="col-md-8">
      <p>{{$mastery->description1}}</p>
      <p>{{$mastery->description2}}</p>
      <p>{{$mastery->description3}}</p>
      <p>{{$mastery->description4}}</p>
      <p>{{$mastery->description5}}</p>
    </div>
</div>

<h2>{{$mastery->name}} kullanan şampiyonlar</h2>
@foreach($champions->chunk(4) as $chunk)
        <div class="row">
          @foreach($chunk as $c)
          <div class="col-md-3">
            <a href="/sampiyonlar/{{$c->name}}">
              <img src="/img/champion/{{$c->image}}" alt="">
              <p>{{$c->name}}</p>
              <p>{{$c->title}}</p>
            </a>
          </div>
          @endforeach
        </div>
      @endforeach

<h2>{{$mastery->name}} için yapılmış yorumlar </h2>
    <div class="row" ng-controller="masteryCommentsController">
      <div class="col-md-6">
        <div class="comment" ng-repeat = "comment in comments">
          <p><% comment.comment %></p>
          <span><% comment.name %> - <% comment.summoner_name %></span>
          <hr>
        </div>
      </div>
      <div class="col-md-6">        
        <input type="text" placeholder="Adin(Istege bagli)" ng-model="name">
        <input type="text" placeholder="Sihirdar Adin (Istege bagli)" ng-model="summoner_name">
        <textarea name="comment" id="" ng-model="comment" placeholder="Yorumunu yaz." cols="30" rows="10"></textarea>
        <button ng-click="saveComment()">Yorum Yap</button>
    </div>
  </div>
@endsection