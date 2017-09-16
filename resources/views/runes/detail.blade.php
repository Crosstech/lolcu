@extends('layouts.app')

@section('title')
 {{ $rune->name }}
@endsection

@section('keywords')
lol,rün,rünler,{{$rune->seo}},{{$rune->name}},ad,ap,adc,sup,mid,jung,solo
@endsection

@section('scripts') 
<script>
    window.rune = <?= json_encode($rune->name); ?>;    
</script>
@endsection 

@section('content')
<section id="{{ $rune->seo }}-profile" class="item-profile">
    <div class="header card clearfix">
      <img src="/img/rune/{{$rune->image}}" alt="{{ $rune->name }}" class="image">
      <div class="description">
          <h1>{{$rune->name}}</h1>
          <p>{{$rune->description}}</p>
      </div>
    </div>
    <div class="row tabs">
      <div class="col-md-12">
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#champions">{{$rune->name}} Kullanan Şampiyonlar</a></li>
          <li><a data-toggle="tab" href="#comments">{{$rune->name}} Hakkında Yapılmış Yorumlar</a></li>
        </ul>
      </div>
    </div>
    <div class="row content">
      <div class="col-md-12">
        <div class="tab-content card">
            <div id="champions" class="tab-pane fade in active">
            @if(!$champions->isEmpty())
            @foreach($champions->chunk(6) as $chunk)
              <div class="row item-champions">
                @foreach($chunk as $c)
                <div class="col-md-2">
                  <a href="/sampiyonlar/{{$c->seo}}" class="champion-item">
                    <img src="/img/champion/{{$c->image}}" alt="{{ $c->name }}" class="image">
                    <p class="name">{{$c->name}}</p>
                  </a>
                </div>
                @endforeach
              </div>
            @endforeach
            @else
              <div class="row">
                <div class="col-md-12">
                  <p class="not-found">
                    Şampiyon Bulunamadı.
                  </p>
                </div>
              </div>
            @endif
            </div>
            <div id="comments" class="tab-pane fade">
              <div class="row item-comments" ng-controller="runeCommentsController">
                  <div class="col-md-9">
                    <div class="comment-item" ng-repeat = "comment in comments">
                      <p class="body" ng-bind="comment.comment"></p>
                      <p class="author" ng-bind-template="<%comment.name%> - <%comment.summoner_name%>"></p>
                    </div>
                    <p ng-if="comments.length <=0" class="not-found">
                      Yorum Bulunamadı.
                    </p>
                  </div>
                  <div class="col-md-3">        
                    <div class="form-group">
                      <input type="text" placeholder="Adın(İsteğe Bağlı)" ng-model="name" class="form-control">
                    </div>
                    <div class="form-group">
                      <input type="text" placeholder="Sihirdar Adın (İsteğe Bağlı)" ng-model="summoner_name" class="form-control">
                    </div>
                    <div class="form-group">
                      <textarea name="comment" id="comment" ng-model="comment" placeholder="Yorumunu yaz." rows="5" class="form-control"></textarea>
                    </div>
                    <button ng-click="saveComment()" class="btn btn-main">Yorum Yap</button>
                </div>
              </div>
          </div>
        </div>
      </div>  
    </div>
  </section>
@endsection