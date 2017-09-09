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
<div class="heading">
  <h2 style="text-align:center" >RÜNLER</h2>
</div>
<div class="row" ng-controller="runesController">
  <div class="search-box">
    <label for="searchbox">RÜN ARAMA</label>
    <input id="searchbox" class="search-box" type="text" placeholder="Rün Ara" ng-model="runeName">
  </div>
  <div ng-repeat="rune in allRunes | filter:runeName">
    <div class="clearfix" ng-if="$index % 6 == 0"></div>
    <div class="col-md-2">
      <a href="/runler/<% rune.seo %>">
        <img src="/img/rune/<% rune.image %>" alt="<% rune.image %>">
        <p><% rune.name %></p>
      </a>
    </div>
  </div>
</div>
@endsection