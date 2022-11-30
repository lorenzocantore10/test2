


@extends('layouts.app')
@section('content')
<h1 class="text-center" style="font-size:110px ;">Sezione contatti</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-3">
        <div class="card" style="width:380px ;">
  <img src="images/cell.jpg" class="card-img-top" alt="..." style="width:380px ;height:300px; ">
  <div class="card-body">
    <h5 class="card-title">MAIL:{{$contacts[0]->email}}</h5><!--dalla var contacts nel quale ho salvato il modello,mi vado a prendere la mail-->
    <p class="card-text">TELEFONO:{{$contacts[0]->telefono}}</p>
    <a href="#" >{{$contacts[0]->facebook}}</a>
  </div>
</div>
        </div>
    </div>
</div>












@endsection






