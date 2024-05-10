@extends('layouts.app')
@section('content')
<h1>Trains</h1>
@forelse($trains as $train)
<div class="card" style="width:18rem;">
  <div class="card-body">
    <h5 class="card-title">Treno{{$train->codice_treno}}</h5>
    <h6 class="card-subtitle mb-2 text-muted ">{{$train->azienda}}</h6>
    <p class="card-text">{{$train->orario_di_partenza}}</p>
  </div>
</div>
@empty
<div>
    No trains avalable
</div>
@endforelse

@endsection