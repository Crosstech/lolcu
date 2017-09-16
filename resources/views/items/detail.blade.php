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
  <section id="{{ $item->seo }}-profile" class="item-profile">
    <div class="header card clearfix">
      <img src="/img/item/{{$item->image}}" alt="{{ $item->name }}" class="image">
      <div class="description">
          <h1>{{$item->name}}</h1>
          <p class="price">Alış Fiyatı: <span>{{$item->gold_buy}} Altın</span></p>
          <p>{!! $item->description !!}</p>
      </div>
    </div>
    <div class="row tabs">
      <div class="col-md-12">
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#champions">{{$item->name}} Kullanan Şampiyonlar</a></li>
          <li><a data-toggle="tab" href="#hints">{{$item->name}} için İpuçları</a></li>
          <li><a data-toggle="tab" href="#comments">{{$item->name}} Hakkında Yapılmış Yorumlar</a></li>
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
            <div id="hints" class="tab-pane fade ">
              <div class="row item-hints">
                <div class="col-md-12">
                  @if(!$tips->isEmpty())
                  <ul>
                  @foreach($tips as $tip)
                    <li>{{$tip->tip}}</li>
                  @endforeach
                  </ul>
                  @else
                  <p class="not-found">
                    İpuçları Bulunamadı .
                  </p>
                  @endif
                </div>
              </div>
            </div>
            <div id="comments" class="tab-pane fade">
              <div class="row item-comments" ng-controller="itemCommentsController">
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