@extends('layouts.app')

@section('content')
<section id="rune-mapper" ng-controller="runeMapperController">
    <input type="text" ng-model="championName">
    <button ng-click="getChampion()"> Get Champion </button>
    <div class="row">
      <div class="col-md-6">
        <img src="/img/champion/<%champion.image %>" alt="">
        <span><% champion.name %></span>
        <div class="chosen-runes" ng-repeat="rune in championRunes">
          <img src="/img/rune/<%rune.image %>" alt="" title="<%rune.description%>">        
          <span><% rune.name %></span>
          <button ng-click="removeRune(rune)" >Remove Rune</button>
        </div>
      </div>
      <div class="col-md-6">
        <input type="text" placeholder="Search Runes" ng-model="runeName">
        <button ng-click=addRunesToChampion()> Add runes to <%champion.name%> </button>
        <div class="rune" ng-repeat="rune in runes | filter:runeName">
        <img src="/img/rune/<%rune.image %>" alt="" title="<%rune.description%>">        
        <span><% rune.name %></span>
        <button ng-click="addRune(rune)" >Add Rune</button>
        </div>
      </div>
    </div>
</section>
@endsection
