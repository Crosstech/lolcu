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
  <div class="row">
    <div class="col-md-2">
      <img src="/img/champion/{{$champion->image}}" alt="{{$champion->name}}">
    </div>
    <div class="col-md-2">
      <h1>{{$champion->name}}</h1>
      <p>{{$champion->title}}</p>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12">
      <p>{!!$champion->description!!}</p>
    </div>
    <div class="row">
      <div class="col-md-3">
      <h3>Genel Bakış</h3>
        <p>Atak Gücü: {{$champion->attack}}</p>
        <p>Defans: {{$champion->defense}} </p>
        <p>Büyü Hasarı: {{$champion->magic}}</p>
        <p>Zorluk: {{$champion->difficulty}}</p>
      </div>
      <div class="col-md-3">
      <h3>Değerler</h3>
        <p>Bu değerler, rün kullanımı olmadan oyun başındaki değerlerdir. Rün seçimine göre bu değerler değişebilir.</p>
        <p>Atak Gücü: {{$champion->attack_damage}}</p>
        <p>Can: {{$champion->hp}}</p>
        <p>Mana: {{$champion->mp}} </p>
        <p>Hareket Hızı: {{$champion->move_speed}}</p>
        <p>Zırh: {{$champion->armor}}</p>
        <p>Büyü Direnci: {{$champion->spell_block}}</p>
        <p>Menzili: {{$champion->attack_range}}</p>
      </div>
      <div class="col-md-3">
        <h4>{{$champion->name}} Takım Arkadaşınsa: </h4>
        <p>{{$champion->allytip1}}</p>
        <p>{{$champion->allytip2}}</p>
        <p>{{$champion->allytip3}}</p>
      </div>
      <div class="col-md-3">
        <h4>{{$champion->name}} Karşı Takımdaysa: </h4>
        <p>{{$champion->enemytip1}}</p>
        <p>{{$champion->enemytip2}}</p>
        <p>{{$champion->enemytip3}}</p>
      </div>
    </div>
  </div>
  <h2>{{$champion->name}} Counterları</h2> 
  @if(isset($counters))
    <div class="row">
      @foreach($counters as $c)
        <div class="col-md-3">
          <a href="/sampiyonlar/{{$c->name}}">
            <img src="/img/champion/{{$c->image}}" alt="{{$champion->name}} counter {{$c->name}}">
            <span>{{$c->name}}</span>
          </a>
        </div>
      @endforeach
  @else
      <p>Counter Bulunamadı</p>
  @endif
    </div>

  <h2>{{$champion->name}} için önerilen eşyalar</h2>
  @foreach($items->chunk(4) as $chunk)
    <div class="row">
      @foreach($chunk as $i)
      <div class="col-md-3">
        <a href="/esyalar/{{$i->seo}}">
          <img src="/img/item/{{$i->image}}" alt="">
          <span>{{$i->name}}</span>
        </a>
      </div>
      @endforeach
    </div>
  @endforeach

    <h2>{{$champion->name}} için önerilen sihirdar büyüleri </h2>
    @foreach($spells->chunk(4) as $chunk)
      <div class="row">
        @foreach($chunk as $s)
          <div class="col-md-3">
            <a href="/sihirdar-buyuleri/{{$s->seo}}">
              <img src="/img/spell/{{$s->image}}" alt="">
              <span>{{$s->name}}</span>
            </a>
          </div>
          @endforeach
      </div>
    @endforeach

     <h2>{{$champion->name}} için önerilen rünler </h2>
    @foreach($runes->chunk(4) as $chunk)
      <div class="row">
        @foreach($chunk as $r)
          <div class="col-md-3">
            <a href="/runler/{{$r->seo}}">
              <img src="/img/rune/{{$r->image}}" alt="">
              <span>{{$r->name}}</span>
            </a>
          </div>
          @endforeach
      </div>
    @endforeach

    <h2>{{$champion->name}} için önerilen kabiliyetler </h2>
    @foreach($masteries->chunk(4) as $chunk)
      <div class="row">
        @foreach($chunk as $m)
          <div class="col-md-3">
            <a href="/kabiliyetler/{{$m->seo}}">
              <img src="/img/mastery/{{$m->image}}" alt="">
              <span>{{$m->name}}</span>
            </a>
          </div>
          @endforeach
      </div>
    @endforeach

    <h2>{{$champion->name}} için yapılmış yorumlar </h2>
      <div class="row" ng-controller="championCommentsController">
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