@extends('layouts.app')
 
@section('title')
 Rünler
@endsection

@section('keywords')
lol,ad,ap,adc,sup,jung,mid,solo,tank,rün,rünler
@endsection

@section('scripts') 
<script>
    window.ALL_RUNES = <?= json_encode($runes)?>;
</script>
@endsection 

@section('content')
<section id="runes">
<!-- <div class="title">
  <h1>RÜNLER</h1>
</div> -->
<div class="body">
  <div class="row" ng-controller="runesController">
    <div class="col-md-3 stickit filtering">
        <div class="row search">
          <div class="col-md-12">
            <input id="search" class="form-control" type="text" placeholder="Ara" ng-model="runeName">           
          </div>
        </div>
    </div>
    <div class="col-md-9 item-list">
        <div class="row">
          <div class="col-md-12" ng-if="(allRunes|filter:runeName).length == 0">
            <p class="not-found">Böyle bir rün mevcut değil !</p>
          </div>
          
          <div ng-repeat="rune in allRunes | filter:runeName">
            <div class="clearfix" ng-if="$index % 6 == 0"></div>
            <div class="col-md-2">
              <a href="/runler/<% rune.seo %>" class="rune-item">
                <img ng-src="/img/rune/<% rune.image %>" alt="<% rune.name %>" class="image">
                <p ng-bind="rune.name" class="name"></p>
              </a>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
</section>
@endsection

