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
<section id="items">
  <!-- <div class="title">
    <h1>EŞYALAR</h1>
  </div> -->
  <div class="body">
    <div class="row" ng-controller="itemsController">
      <div class="col-md-3 stickit filtering">
          <div class="row search">
            <div class="col-md-12">
              <input id="search" class="form-control" type="text" placeholder="Ara" ng-model="itemName">           
            </div>
          </div>
      </div>
      <div class="col-md-9 item-list">
          <div class="row">
            <div class="col-md-12" ng-if="(allItems|filter:itemName).length == 0">
              <p class="not-found">Böyle bir eşya mevcut değil !</p>
            </div>
            
            <div ng-repeat="item in allItems | filter:itemName">
              <div class="clearfix" ng-if="$index % 6 == 0"></div>
              <div class="col-md-2">
                <a href="/esyalar/<% item.seo %>" class="item-content" data-toggle="tooltip" data-placement="left" data-html="true" title="<% item.description %>">
                  <img ng-src="/img/item/<% item.image %>" alt="<% item.image %>" class="image">
                  <p ng-bind="item.name" class="name"></p>
                </a>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>
@endsection