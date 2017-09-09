@extends('layouts.app')

@section('content')
<section id="counter-mapper" ng-controller="counterMapperController">
    <input type="text" ng-model="championName">
    <button ng-click="getChampion()"> Get Champion </button>
    <div class="row">
      <div class="col-md-6">
        <img src="/img/champion/<%champion.image %>" alt="">
        <span><% champion.name %></span>
        <div class="chosen-counters" ng-repeat="counter in championCounters">
          <img src="/img/champion/<%counter.image %>">        
          <span><% counter.name %></span>
          <button ng-click="removeCounter(counter)" >Remove Counter</button>
        </div>
      </div>
      <div class="col-md-6">
        <input type="text" placeholder="Search Champions" ng-model="counterName">
        <button ng-click=addCountersToChampion()> Add counters to <%champion.name%> </button>
        <div class="counter" ng-repeat="counter in counters | filter:counterName">
        <img src="/img/champion/<%counter.image %>" alt="" >        
        <span><% counter.name %></span>
        <button ng-click="addCounter(counter)" >Add Counter</button>
        </div>
      </div>
    </div>
</section>
@endsection
