@extends('layouts.app')

@section('content')
<section id="spell-mapper" ng-controller="spellMapperController">
    <input type="text" ng-model="championName">
    <button ng-click="getChampion()"> Get Champion </button>
    <div class="row">
      <div class="col-md-6">
        <img src="/img/champion/<%champion.image %>" alt="">
        <span><% champion.name %></span>
        <div class="chosen-spells" ng-repeat="spell in championSpells">
          <img src="/img/spell/<%spell.image %>" alt="" title="<%spell.description%>">        
          <span><% spell.name %></span>
          <button ng-click="removeSpell(spell)" >Remove Spell</button>
        </div>
      </div>
      <div class="col-md-6">
        <input type="text" placeholder="Search Spells" ng-model="spellName">
        <button ng-click=addSpellsToChampion()> Add spells to <%champion.name%> </button>
        <div class="spell" ng-repeat="spell in spells | filter:spellName">
        <img src="/img/spell/<%spell.image %>" alt="" title="<%spell.description%>">        
        <span><% spell.name %></span>
        <button ng-click="addSpell(spell)" >Add Spell</button>
        </div>
      </div>
    </div>
</section>
@endsection
