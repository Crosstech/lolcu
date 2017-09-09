@extends('layouts.app')

@section('title')
 Şampiyonlar
@endsection

@section('keywords')
lol,şampiyonlar,şampiyon,kaç k
@endsection

@section('scripts') 
<script>
    window.ALL_CHAMPIONS = <?= json_encode($champions)?>;
</script>
@endsection 

@section('content')
<div class="heading">
  <h2 style="text-align:center" >ŞAMPİYONLAR </h2>
</div>
<div class="row" ng-controller="championsController">
  <div class="search-box">
    <label for="searchbox">ŞAMPİYON ARAMA</label>
    <input id="searchbox" class="search-box" type="text" placeholder="Şampiyon Ara" ng-model="c">
  </div>
  <div ng-repeat="champion in allChampions | filter:c">
    <div class="clearfix" ng-if="$index % 6 == 0"></div>
    <div class="col-md-2">
      <a href="/sampiyonlar/<% champion.name %>">
        <img src="/img/champion/<% champion.image %>" alt="<% champion.image %>">
        <p><% champion.name %></p>
      </a>
    </div>
  </div>
</div>
@endsection