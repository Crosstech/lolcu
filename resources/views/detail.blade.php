@extends('layouts.app')

@section('scripts')
<script>
    window.CURRENT_GAME = <?= json_encode($current_game); ?>
</script>
@endsection
@section('content')
<div ng-controller="matchController">
    <div class="row">
        <div class="col-xs-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Sihirdar</th>
                        <th>Ligi</th>
                        <th>Yetkinlik Seviyesi</th>
                        <th>Runler</th>
                        <th>Kabiliyetler</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="p in current_game.participants track by $index" 
                        ng-class="{ blueTeam : p.teamId == 100, redTeam : p.teamId == 200 }">
                        <td>
                            <span ng-bind="p.summonerName"></span>
                        </td>
                        <td>
                            null
                        </td>
                        <td>null</td>
                        <td>null</td>
                        <td>null</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection