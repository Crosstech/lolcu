@extends('layouts.app')

@section('title')
 {{ $item->name }}
@endsection
 
@section('keywords')
lol,esya,{!! $item->description !!},{{$item->seo}},{{$item->name}},ad,ap,yetenek,atak,saldırı,gücü,hızı
@endsection

@section('scripts') 
<script>
    window.item = <?= json_encode($item->name); ?>;    
</script>
@endsection 

@section('content')
  <div class="row">
      <div class="col-md-2">
        <img src="/img/item/{{$item->image}}" alt="">
      </div>
      <div class="col-md-2">
        <p>{{$item->name}}</p>
        <p>Açıklaması: {!! $item->description !!}</p>
        <p>Alış Fiyatı: {{$item->gold_buy}} Altın</p>
      </div>
  </div>
  <div class="row">
    <div class="col-md-12">
  <h2>{{$item->name}} kullanan şampiyonlar</h2>
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
      </div>
  </div>
    <h2>{{$item->name}} için ipuçları</h2>
    <div class="row">
      <div class="col-md-12">
        <ul>
        @foreach($tips as $tip)
        <li>{{$tip->tip}}</li>
        @endforeach
        </ul>
      </div>
    </div>


  <div class="row" ng-controller="itemCommentsController">
    <h2>{{$item->name}} için yapılmış yorumlar </h2>
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