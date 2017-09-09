@extends('layouts.app')

@section('content')
<section id="tip-mapper" ng-controller="itemTipMapperController">
    <input type="text" ng-model="itemName">
    <button ng-click="getItem()"> Get Item </button>
    <div class="row">
      <div class="col-md-6">
        <img src="/img/item/<%item.image %>" alt="">
        <span><% item.name %></span>
        <ul>
          <div class="item-tips" ng-repeat="tip in tips">
            <li>
              <span><% tip.tip %></span>
              <button ng-click="editTip(tip)" >Edit Tip</button>
            </li>
          </div>
        </ul>
      </div>
      <div class="col-md-6">
        <textarea ng-model="newTip"></textarea>
        <button ng-click=addTip()>Save Tip</button>
      </div>
    </div>
</section>
@endsection
