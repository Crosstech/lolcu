@extends('layouts.app')

@section('content')
<section id="mastery-mapper" ng-controller="masteryMapperController">
    <input type="text" ng-model="championName">
    <button ng-click="getChampion()"> Get Champion </button>
    <div class="row">
      <div class="col-md-6">
        <img src="/img/champion/<%champion.image %>" alt="">
        <span><% champion.name %></span>
        <div class="chosen-masteries" ng-repeat="mastery in championMasteries">
          <img src="/img/mastery/<%mastery.image %>" alt="" title="<%mastery.description%>">        
          <span><% mastery.name %></span>
          <button ng-click="removeMastery(mastery)" >Remove Mastery</button>
        </div>
      </div>
      <div class="col-md-6">
        <input type="text" placeholder="Search Masteries" ng-model="masteryName">
        <button ng-click=addMasteriesToChampion()> Add masteries to <%champion.name%> </button>
        <div class="mastery" ng-repeat="mastery in masteries | filter:masteryName">
        <img src="/img/mastery/<%mastery.image %>" alt="" title="<%mastery.description%>">        
        <span><% mastery.name %></span>
        <button ng-click="addMastery(mastery)" >Add Mastery</button>
        </div>
      </div>
    </div>
</section>
@endsection
