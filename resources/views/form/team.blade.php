@extends('layouts.app')
@section('content')


<h1 class="text-center ">INSERISCI TEAM</h1>

<div class="container my-5 col-3" >
<form method="post" action="{{route('addTeam')}}">
  @csrf


  <div class="mb-3">
    <label for="nome" class="form-label">Inserisci Squadra</label>
    <input type="text" class="form-control" id="nome" name="nome">
  </div>

  <div class="mb-3">
  <select name="tipo" class="form-select" aria-label="Default select example">
  <option selected>tipo</option>

  <option value="CLUB">CLUB</option>
  <option value="NAZIONALE">NAZIONALE</option>
  
</select>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>



@endsection

