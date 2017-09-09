@extends('layouts.app')

@section('title')
 {{ $spell->name }}
@endsection
 
@section('keywords')
lol,{{$spell->name}},{{$spell->seo}},adc,sup,jung,mid,solo,tank,büyü,sihirdar,yetenek
@endsection

@section('scripts') 
<script>
    window.spell = <?= json_encode($spell->name); ?>;    
</script>
@endsection 

@section('content')
<div class="row">
    <div class="col-md-2">
      <img src="/img/spell/{{$spell->image}}" alt="">
    </div>
    <div class="col-md-2">
      <p>{{$spell->name}}</p>
      <p>{{$spell->description}}</p>
    </div>
</div>
<h2>{{$spell->name}} kullanan şampiyonlar</h2>
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

<h2>{{$spell->name}} için yapılmış yorumlar </h2>
    <div class="row" ng-controller="spellCommentsController">
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