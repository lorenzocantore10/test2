@extends('layouts.app')

@section('content')

       
<h1 class="text-center text-success">I NOSTRI GRAFICI</h1>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/grafico1.jpg" class="d-block w-100" style="width:100% ;height: 700px;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/grafico3.jpg" class="d-block w-100" style="width:100% ;height: 700px;" alt="...">
    </div>
    
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<h3 class="text-center">successo</h3>
                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
