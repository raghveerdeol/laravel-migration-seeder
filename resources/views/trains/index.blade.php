@extends('layouts.app')

@section('title', 'trains')

@section('main-content')
    <div class="contrainer">
        <div class="row">
            @foreach ($trains as $train )
                <div class="col-3 mb-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase"><strong>{{$train->azienda}}</strong></h5>
                            <p class="card-text"><strong>Partenza da:</strong> {{$train->stazione_di_partenza}} <strong>alle:</strong>  {{$train->orario_di_partenza}}</p>
                            <p class="card-text"><strong>Arrivo a:</strong> {{$train->stazione_di_arrivo}} <strong>alle:</strong>  {{$train->orario_di_arrivo}}</p>
                            @if ($train->in_orario === 1)
                                <p class="card-text">In orario</p>
                            @else
                                <p class="card-text">In ritardo</p>
                            @endif
                            @if ($train->cancellato === 1)
                            <p class="card-text">Treno cancellato</p>
                            @endif
                            <p><strong>Codice treno:</strong> {{$train->codice_treno}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
