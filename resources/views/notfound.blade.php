@extends('layouts.app')

@section('title')
Sihirdar Bulunamadı
@endsection

@section('keywords')
lol,canlı,maç,analiz,çar,canlı maç analizi,level,kaç k
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12 text-center">
        <h1>Sihirdar Ara</h1>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 text-center">
        <div class="not-found">
            <p>Böyle bir sihirdar yok, emin misin? Bir daha ara!</p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-3 col-xs-12">
        <form action="{{ url('/profile_get') }}" method="POST" class="row">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <!--<div class="col-xs-5">
                <select id="region_selector" name="region"  class="form-control">
                    <option value="na1">North America</option>
                    <option value="euw1">Europe West</option>
                    <option value="eune1">Europe Nordic &amp; East</option>
                    <option value="oc1">Oceania</option>
                    <option value="jp1">Japan</option>
                    <option value="tr1">Türkiye</option>
                    <option value="ru">Russia (России)</option>
                    <option value="br1">Brazil (Brasil)</option>
                    <option value="la1">Latin America South</option>
                    <option value="la2">Latin America North</option>
                    <option value="kr">Korea (한국)</option>
                </select>
            </div>-->

            <div class="col-xs-8">
                <input type="text" name="summoner_name" id="summoner_name" placeholder="Sihirdar Adı" class="form-control">
            </div>

            <div class="col-xs-4">
                <input type="submit" value="Ara" class="btn btn-info btn-fill pull-right">
            </div>
        </form>
    </div>
</div>
@endsection