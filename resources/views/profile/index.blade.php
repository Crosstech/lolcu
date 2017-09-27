@extends('layouts.app')

@section('title')
    {{$summoner['name']}} Profili
@endsection

@section('scripts')
<script>
    window.CURRENT_GAME = <?= json_encode($game); ?>;
    window.CHAMPIONS = <?= json_encode($champions); ?>;
    
</script>
@endsection

@section('content')
<section id="summoner-info" class="jumbotron text-center">
    <h1>{{ $summoner['name'] }}</h1>
    <h2>Seviye {{ $summoner['summonerLevel'] }}</h2>
</section>

@if ($game != null)


<section id="live-game" ng-controller="liveController">
    <div class="row">
        <div class="col-xs-12">
            <h3 class="section-title">
                {{ $game['gameMode'] }}
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
                </thead>
                <tbody>
                    <tr ng-repeat="p in current_game.participants track by $index" 
                        ng-class="{ blueTeam : p.teamId == 100, redTeam : p.teamId == 200 }">
                        <td>
                            <span ng-bind="p.summonerName"></span>
                        </td>
                        <td>
                            <span ng-bind="p.league[0].tier +' '+p.league[0].rank ">UNRANKED</span>
                        </td>
                        <td>
                            <a ng-href="/sampiyonlar/<%champions[p.summonerId]%>" target="_blank">
                                <img ng-src="/img/champion/<%champions[p.summonerId].split(' ').join('')%>.png">
                           </a>
                         </td>
                        <td ng-bind="p.championMastery['championPoints'] == null ? 'Yetkinlik Puanı Bulunamadı' : p.championMastery['championPoints']"></td>
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