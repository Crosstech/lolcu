@extends('layouts.app')

@section('title')
 Eşyalar
@endsection

@section('keywords')
lol,esyalar,esya,set,esya seti
@endsection

@section('scripts') 
<script>
    window.ALL_ITEMS = <?= json_encode($items)?>;
</script>
@endsection 

@section('content')
<div class="heading">
  <h2 style="text-align:center" >EŞYALAR </h2>
</div>
<div class="row" ng-controller="itemsController">
  <div class="search-box">
    <label for="searchbox">EŞYA ARAMA</label>
    <input id="searchbox" class="search-box" type="text" placeholder="Eşya Ara" ng-model="itemName">
  </div>
  <div ng-repeat="item in allItems | filter:itemName">
    <div class="clearfix" ng-if="$index % 6 == 0"></div>
    <div class="col-md-2">
      <a href="/esyalar/<% item.seo %>">
        <img src="/img/item/<% item.image %>" alt="<% item.image %>">
        <p><% item.name %></p>
      </a>
    </div>
  </div>
</div>
@endsection