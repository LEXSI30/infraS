@extends('layouts.app')
@section('content')
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
<div class="bac" style="text-align:center">
<h1>NEWS</h1>
<div class="dropdown show"style="text-align:center">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    video

  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Event</a>
    <a class="dropdown-item" href="#">Nuit du hack</a>
    <a class="dropdown-item" href="#">Hackathon</a>
  </div>
</div>
<div class="card-group">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Sensibilation</h5>
      <img class="card-img-top" src="https://cdn.discordapp.com/attachments/515565524214743052/564453142389850131/56775661_433662720734710_3064231330565849088_n.jpg" alt="Card image cap">
      <p class="card-text">Les attaques wifi</p>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted"></small></p>
      <a href="#">Voir plus</a>

    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Evenement</h5>
      <img class="card-img-top" src="https://cdn.discordapp.com/attachments/515565524214743052/564453142389850131/56775661_433662720734710_3064231330565849088_n.jpg" alt="Card image cap">
      <p class="card-text">Les evenments</p>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted"></small></p>
      <a href="#">Voir plus</a>

    </div>
  </div>

</div>
<hr></
@endsection
