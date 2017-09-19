@extends('layouts.app')

@section('title')
 En Çok Cana Sahip Şampiyonlar
@endsection

@section('keywords')
lol,şampiyonlar,can,hp,tank
@endsection

@section('scripts') 

@endsection 

@section('content')
<section id="champions">
   <div class="title">
    <h1>EN ÇOK CANA SAHİP ŞAMPİYONLAR</h1>
  </div> 
  <div class="body">
  <p class="text-center">Aşağıda belirtilen değerler şampiyonların başlangıçta sahip oldukları can değerleridir. Oyuncuların kullandığı rünler ve oyun içinde alınan eşyalara göre bu değerler değişebilir.</p>
    <div class="row">
      <div class="champion-list col-md-12">
        <table class="champions-table">
          <tr>
            <th>Sırası</th>
            <th>Şampiyon Adı</th>
            <th>Saldırı Gücü</th>
          </tr>
          @foreach($champions as $key=>$c)
          <tr>
            <td>{{$key+1}}</td>
            <td> 
              <a href="/sampiyonlar/{{$c->seo}}">
                <img src="/img/champion/{{$c->image}}" alt="{{$c->name}}">
                <p class="name">{{$c->name}}</p>
              </a>
            </td>
            <td>{{$c->hp}}</td>
          </tr>
        @endforeach
        </table>
      <div>
    </div>
  </div>
</section>
@endsection