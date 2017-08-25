@extends('layouts.app')

@section('title')
    {{ $summoner['name'] }} Profili
@endsection

@section('keywords')

@endsection

@section('content')
<section id="summoner-info" class="jumbotron text-center">
    <h1>{{ $summoner['name'] }}</h1>
    <h2>Seviye {{ $summoner['summonerLevel'] }}</h2>
</section>
<!-- Partial Live Match -->
<section id="live-game" ng-controller="liveController">
    <div class="row">
        <div class="col-xs-12">
            <h3 class="section-title">
                CANLI MAÇ
            </h3>

            {{ dump($game) }}
        </div>
    </div>
</section>
<!-- Partial Live Match -->

<!-- Partial Recent Match -->
<section id="recent-games" ng-controller="recentController">
    <h3 class="section-title">
        GEÇMİŞ OYUNLAR
    </h3>
</section>
<!-- Partial Recent Match -->
@endsection