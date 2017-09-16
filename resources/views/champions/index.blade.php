@extends('layouts.app')

@section('title')
 Şampiyonlar
@endsection

@section('keywords')
lol,şampiyonlar,şampiyon,kaç k
@endsection

@section('scripts') 
<script>
    window.CHAMPIONS = <?= json_encode($champions)?>;
</script>
@endsection 

@section('content')
<section id="champions">
  <!-- <div class="title">
    <h1>ŞAMPİYONLAR</h1>
  </div> -->
  <div class="body">
    <div class="row" ng-controller="championsController">
      <div class="col-md-3 stickit filtering">
        <div class="row search">
          <div class="col-md-12">
            <input id="search" class="form-control" type="text" placeholder="Ara" ng-model="c.name">           
          </div>
        </div>
        <div class="row filters">
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <input type="checkbox" ng-model="r.tag1" ng-true-value="'Assassin'" ng-false-value="''">
                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                Suikastçi
              </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" ng-model="r.tag1" ng-true-value="'Fighter'" ng-false-value="''">
                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                Dövüşçü
              </label>
            </div>
            <div class="checkbox">
              <label>  
                <input type="checkbox" ng-model="r.tag1" ng-true-value="'Mage'" ng-false-value="''">
                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                Büyücü
              </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" ng-model="r.tag1" ng-true-value="'Marksman'" ng-false-value="''">
                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                Nişancı
              </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" ng-model="r.tag1" ng-true-value="'Support'" ng-false-value="''">
                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                Destek
              </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" ng-model="r.tag1" ng-true-value="'Tank'" ng-false-value="''">
                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                Tank
              </label>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-9 champion-list">
        <div class="row">
          <div class="col-md-12" ng-if="(champions|filter:c).length == 0">
            <p class="not-found">Böyle bir şampiyon mevcut değil !</p>
          </div>
          <div ng-repeat="champion in champions | filter:c | filter: r">
            <div class="clearfix" ng-if="$index % 6 == 0"></div>
            <div class="col-md-2">
              <a ng-href="/sampiyonlar/<% champion.seo %>" class="champion-item">
                <img ng-src="/img/champion/<% champion.image %>" alt="<% champion.image %>" class="image">
                <p ng-bind="champion.name" class="name"></p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection