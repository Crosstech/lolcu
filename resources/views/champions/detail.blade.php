@extends('layouts.app') 

@section('title')
 {{ $champion->name }}
@endsection

@section('keywords')
lol,sampiyon,sihirdar,çar,{{$champion->name}},build,eşya,set, eşya seti,rün,dizilim,ct,counter,rünler
@endsection

@section('scripts')
<script>
    window.champion = <?= json_encode($champion->name); ?>;   
</script>
@endsection

@section('content')
  <section id="{{ $champion->name }}-profile" class="champion-profile">
    <div class="row header">
      <div class="col-md-12">
        <div class="cover" style="background: url('img/splash/{{ preg_replace('/[^A-Za-z0-9]/', "", $champion->name) }}_1.jpg') no-repeat">
          <div class="pp">
            <img src="/img/champion/{{$champion->image}}" alt="{{$champion->name}}">
          </div>
          <div class="name">
            <h1>{{$champion->name}}</h1>
            <h2>{{$champion->title}}</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row tabs">
      <div class="col-md-12 pd0">
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#about">Şampiyon Hakkında</a></li>
        <li><a data-toggle="tab" href="#counters">{{$champion->name}} Counterları</a></li>
        <li><a data-toggle="tab" href="#items">{{$champion->name}} için Önerilen Eşyalar</a></li>
        <li><a data-toggle="tab" href="#runes">{{$champion->name}} için Önerilen Rünler</a></li>
        <li><a data-toggle="tab" href="#masteries">{{$champion->name}} için Önerilen Kabiliyetler</a></li>
        <li><a data-toggle="tab" href="#spells">{{$champion->name}} için Önerilen Sihirdar Büyüleri</a></li>
        <li><a data-toggle="tab" href="#comments">{{$champion->name}} Hakkında Yapılmış Yorumlar</a></li>
      </ul>
      </div>
    </div>
    <div class="row content">
      <div class="col-md-12">
        <div class="tab-content card">
          <div id="about" class="tab-pane fade in active">
            <div class="row champion-description">
              <div class="col-md-12">
                <h3>Hikaye</h3>
                <p>{!!$champion->description!!}</p>
              </div>
            </div>
            <div class="row champion-stats">
              <div class="col-md-6">
                <h3>Genel Bakış</h3>
                <p><strong>Atak Gücü:</strong> {{$champion->attack}}</p>
                <p><strong>Defans:</strong>  {{$champion->defense}} </p>
                <p><strong>Büyü Hasarı:</strong>  {{$champion->magic}}</p>
                <p><strong>Zorluk:</strong>  {{$champion->difficulty}}</p>
              </div>
              <div class="col-md-6">
                <h3>Değerler</h3>
                  <p><strong>Bu değerler, rün kullanımı olmadan oyun başındaki değerlerdir. Rün seçimine göre bu değerler değişebilir.</strong></p>
                  <p><strong>Atak Gücü:</strong> {{$champion->attack_damage}}</p>
                  <p><strong>Can:</strong> {{$champion->hp}}</p>
                  <p><strong>Mana:</strong> {{$champion->mp}} </p>
                  <p><strong>Hareket Hızı:</strong> {{$champion->move_speed}}</p>
                  <p><strong>Zırh:</strong> {{$champion->armor}}</p>
                  <p><strong>Büyü Direnci:</strong> {{$champion->spell_block}}</p>
                  <p><strong>Menzili:</strong> {{$champion->attack_range}}</p>
              </div>
            </div>
            <div class="row champion-recommendations">
              <div class="col-md-6">
                <h3>{{$champion->name}} Takım Arkadaşınsa: </h3>
                <ul>
                  <li>{{$champion->allytip1}}</li>
                  <li>{{$champion->allytip2}}</li>
                  <li>{{$champion->allytip3}}</li>
                </ul>
              </div>
              <div class="col-md-6">
                <h3>{{$champion->name}} Karşı Takımdaysa: </h3>
                <ul>
                  <li>{{$champion->enemytip1}}</li>
                  <li>{{$champion->enemytip2}}</li>
                  <li>{{$champion->enemytip3}}</li>
                </ul>
              </div>
            </div>
          </div>
          <div id="counters" class="tab-pane fade">
          @if($counters != null)
            <div class="row champion-counter">
              @foreach($counters as $c)
                <div class="col-md-2">
                  <a href="/sampiyonlar/{{$c->seo}}" class="champion-item">
                    <img src="/img/champion/{{$c->image}}" alt="{{$champion->name}} counter {{$c->name}}" class="image">
                    <p class="name">{{$c->name}}</p>
                  </a>
                </div>
              @endforeach
            </div>
          @else
            <div class="row">
              <div class="col-md-12 text-center">
                <p class="not-found mrb0">Counter Bulunamadı</p>
              </div>
            </div>
          @endif
          </div>
          <div id="items" class="tab-pane fade">
          @if(!$items->isEmpty())
            @foreach($items->chunk(6) as $chunk)
              <div class="row champion-items">
                @foreach($chunk as $i)
                <div class="col-md-2">
                  <a href="/esyalar/{{$i->seo}}" class="item-content">
                    <img src="/img/item/{{$i->image}}" alt="{{ $i->name }}" class="image">
                    <p class="name">{{$i->name}}</p>
                  </a>
                </div>
                @endforeach
              </div>
            @endforeach
          @else
            <div class="row">
              <div class="col-md-12 text-center">
                <p class="not-found mrb0">Şampiyona Önerilen Eşya Bulunamadı...</p>
              </div>
            </div>
          @endif
          </div>
          <div id="runes" class="tab-pane fade">
          @if(!$runes->isEmpty())
            @foreach($runes->chunk(6) as $chunk)
              <div class="row champion-runes">
                @foreach($chunk as $r)
                  <div class="col-md-2">
                    <a href="/runler/{{$r->seo}}" class="rune-item">
                      <img src="/img/rune/{{$r->image}}" alt="{{$r->name}}" class="image">
                      <p class="name">{{$r->name}}</p>
                    </a>
                  </div>
                  @endforeach
              </div>
            @endforeach
            @else
              <div class="row">
                <div class="col-md-12 text-center">
                  <p class="not-found mrb0">Şampiyona Önerilen Rün Bulunamadı...</p>
                </div>
              </div>
            @endif
          </div>
          <div id="masteries" class="tab-pane fade">
          @if(!$masteries->isEmpty())
            @foreach($masteries->chunk(6) as $chunk)
              <div class="row champion-masteries">
                @foreach($chunk as $m)
                  <div class="col-md-2">
                    <a href="/kabiliyetler/{{$m->seo}}" class="mastery-item">
                      <img src="/img/mastery/{{$m->image}}" alt="{{ $m->name }}" class="image">
                      <p class="name">{{$m->name}}</p>
                    </a>
                  </div>
                  @endforeach
              </div>
            @endforeach
          @else
            <div class="row">
              <div class="col-md-12 text-center">
                <p class="not-found mrb0">Şampiyona Önerilen Kabiliyetler Bulunamadı...</p>
              </div>
            </div>
          @endif
          </div>
          <div id="spells" class="tab-pane fade">
          @if(!$spells->isEmpty())
          @foreach($spells->chunk(6) as $chunk)
            <div class="row champion-spells">
              @foreach($chunk as $s)
                <div class="col-md-2">
                  <a href="/sihirdar-buyuleri/{{$s->seo}}" class="spell-item">
                    <img src="/img/spell/{{$s->image}}" alt="{{ $s->name }}" class="image">
                    <p class="name">{{$s->name}}</p>
                  </a>
                </div>
                @endforeach
            </div>
          @endforeach
          @else
            <div class="row">
              <div class="col-md-12 text-center">
                <p class="not-found mrb0">Şampiyona Önerilen Sihirdar Büyüleri Bulunamadı...</p>
              </div>
            </div>
          @endif
          </div>
          <div id="comments" class="tab-pane fade">
            <div class="row champion-comments" ng-controller="championCommentsController">
                <div class="col-md-9">
                  <div class="comment-item" ng-repeat = "comment in comments">
                    <p class="body" ng-bind="comment.comment"></p>
                    <p class="author" ng-bind="comment.name - comment.summoner_name"></p>
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