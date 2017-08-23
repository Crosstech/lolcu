@extends('layouts.app')

@section('title')
    Sihirdar Arama
@endsection

@section('content')
<div class="row" style="margin-top:15%;">
    <div class="col-xs-12 text-center">
        <h1>Sihirdar Ara !</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-3 col-xs-12">
        <form action="{{ url('/profile_get') }}" method="POST" class="row">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <div class="col-md-5 col-xs-12 mbx-20">
                <select id="region_selector" name="region"  class="form-control">
                    <option value="na1">Kuzey Amerika</option>
                    <option value="euw1">AB Batı</option>
                    <option value="eune1">AB Kuzey & Doğu</option>
                    <option value="oc1">Okyanusya</option>
                    <option value="jp1">Japonya</option>
                    <option value="tr1">Türkiye</option>
                    <option value="ru">Rusya</option>
                    <option value="br1">Brezilya</option>
                    <option value="la1">Latin Amerika Güney</option>
                    <option value="la2">Latin Amerika Kuzey</option>
                    <option value="kr">Kore</option>
                </select>
            </div>

            <div class="col-md-5 col-xs-12 mbx-20">
                <input type="text" name="summoner_name" id="summoner_name" placeholder="Sihirdar Adı" class="form-control">
            </div>

            <div class="col-md-2 col-xs-12 mbx-20">
                <input type="submit" value="Ara" class="btn btn-info btn-fill pull-right">
            </div>
        </form>
    </div>
</div>
@endsection