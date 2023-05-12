@extends('layouts/main')

@section('content')

<div class="container text-center">
  <h1>Treni</h1>
</div>
<div class="container card-container">
  @foreach ($trains as $singleTrain)
  <div class="card {{$singleTrain->cancellato ? 'cancelled' : ''}}" style="width: 18rem;">
    <div class="card-body">
    <h5 class="card-title">Stazione di partenza: {{$singleTrain->stazione_partenza}}</h5>
      <h5 class="card-title">Stazione di arrivo: {{$singleTrain->stazione_arrivo}}</h5>
      <div class="card-text">Azienda: <span class="weight600">{{$singleTrain->azienda}}</span></div>
      <div class="card-text">Orario di partenza: <span class="weight600">{{$singleTrain->orario_partenza}}</span></div>
      <div class="card-text">Orario di arrivo: <span class="weight600">{{$singleTrain->orario_arrivo}}</span></div>
    
      {{-- Stato del treno cancellato o regolare --}}
      {{-- @if ($singleTrain->cancellato == 0)
        <div class="card-text">Stato: <span class="weight600">Regolare</span></div>
      @else 
        <div class="card-text">Stato: <span class="weight600">Cancellato</span></div>
      @endif --}}

      {{-- Stato del treno in orario o in ritardo --}}
      @if ($singleTrain->in_orario == 1)
        <div class="card-text">Stato: <span class="weight600">In orario</span></div>
      @else 
        <div class="card-text">Stato: <span class="weight600">In Ritardo</span></div>
      @endif

        {{-- Se il numero di carrozze non è indicato non lo visualizzo --}}
      @if ($singleTrain->numero_carrozze > 0)
        <div class="card-text">N. Carrozze: {{$singleTrain->numero_carrozze}}</div>
      @endif
    </div>
  </div>
  @endforeach
</div>



@endsection