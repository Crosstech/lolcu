@extends('layouts.app')

@section('title')
    {{$summoner['name']}} Profili
@endsection

@section('scripts')
<script>
    window.LEAGUES = <?= json_encode($leagues)?>;
    window.CURRENT_GAME = <?= json_encode($current_game); ?>;
    window.MASTERIES = <?= json_encode($champion_masteries); ?>;
    window.IMAGES = <?= json_encode($champion_images); ?>;
    
</script>
@endsection

@section('content')
<div ng-controller="matchController">
    <section id="summoner-info" class="jumbotron text-center">
    <h1>{{ $summoner['name'] }}</h1>
    <h2>Seviye {{ $summoner['summonerLevel'] }}</h2>
</section>
@if ($current_game != null)
<section id="live-game">
    <div class="row">
        <div class="col-xs-12">
            <h3 class="section-title">
                <strong>{{ $summoner['name'] }}</strong>
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="live-game">
            <table class="table">
                <thead>
                    <tr>
                        <th>Sihirdar</th>
                        <th>Ligi</th>
                        <th>Şampiyon</th>
                        <th>Yetkinlik Seviyesi</th>
                        <!--<th>Runler</th>
                        <th>Kabiliyetler</th>-->
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="p in current_game.participants track by $index" 
                        ng-class="{ blueTeam : p.teamId == 100, redTeam : p.teamId == 200 }">
                        <td>
                            <span ng-bind="p.summonerName"></span>
                        </td>
                        <td>
                            <span ng-bind="leagues[p.summonerId]"></span>
                        </td>
                        <td>
                            <a ng-href="/sampiyonlar/<%images[p.summonerId][0].name%>">
                                <img ng-src="/img/champion/<%images[p.summonerId][0].image%>">
                           </a>
                         </td>
                        <td ng-bind="masteries[p.summonerId]"></td>
                        <!--<td>null</td>
                        <td>null</td>-->
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div></section>
@else
<section id="live-game-not-found">
    <div class="row">
        <div class="col-xs-12">
            <p>
                <strong>{{ $summoner['name'] }}</strong>, ait canlı maç verisi bulunamadı.
            </p>
        </div>
    </div>
</section>
@endif
<section id="recent-games" ng-controller="recentController">
    <h3 class="section-title">
        GEÇMİŞ OYUNLAR
    </h3>
</section>
@endsection