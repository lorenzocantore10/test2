@extends('layouts.app')
@section('content')


<h1 class="text-center ">INSERISCI IL CALCIATORE</h1>

<div class="container my-5 col-3" >
<form method="post" action="{{route('soccer')}}">
  @csrf
  <div class="mb-3">
    <label for="nome" class="form-label">Calciatore</label>
    <input type="text" class="form-control" id="nome" name="nome" >
    
  </div>
  <div class="mb-3">
    <label for="goal" class="form-label">Nr.goal segnati</label>
    <input type="text" class="form-control" id="goal" name="goal">
  </div>

  <div class="mb-3">
    <label for="assist" class="form-label">Nr.assist</label>
    <input type="text" class="form-control" id="assist" name="assist">
  </div>

  <div class="mb-3">
    <label for="presenze" class="form-label">Nr.presenze</label>
    <input type="text" class="form-control" id="presenze" name="presenze">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>



@endsection




