@extends('layouts.app')

@section('content')
<section id="item-mapper" ng-controller="itemMapperController">
    <input type="text" ng-model="championName">
    <button ng-click="getChampion()"> Get Champion </button>
    <div class="row">
      <div class="col-md-6">
        <img src="/img/champion/<%champion.image %>" alt="">
        <span><% champion.name %></span>
        <div class="chosen-items" ng-repeat="item in championItems">
          <img src="/img/item/<%item.image %>" alt="" title="<%item.description%>">        
          <span><% item.name %></span>
          <button ng-click="removeItem(item)" >Remove Item</button>
        </div>
      </div>
      <div class="col-md-6">
        <input type="text" placeholder="Search items" ng-model="itemName">
        <button ng-click=addItemsToChampion()> Add items to <%champion.name%> </button>
        <div class="item" ng-repeat="item in items | filter:itemName">
        <img src="/img/item/<%item.image %>" alt="" title="<%item.description%>">        
        <span><% item.name %></span>
        <button ng-click="addItem(item)" >Add Item</button>
        </div>
      </div>
    </div>
</section>
@endsection
