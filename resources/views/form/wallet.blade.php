@extends('layouts.app')
@section('content')


<h1 class="text-center ">INSERISCI Ral</h1>

<div class="container my-5 col-3" >
<form method="post" action="{{route('wallet')}}">
  @csrf
  <div class="mb-3">
    <label for="nome" class="form-label">Nome e Cognome</label>
    <input type="text" class="form-control" id="nome" name="nome" >
    
  </div>
  <div class="mb-3">
    <label for="mensilita" class="form-label">nr.mensilita'</label>
    <input type="text" class="form-control" id="mensilita" name="mensilita">
  </div>

  <div class="mb-3">
    <label for="guadagno" class="form-label">Guadagno</label>
    <input type="text" class="form-control" id="guadagno" name="guadagno">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>



@endsection