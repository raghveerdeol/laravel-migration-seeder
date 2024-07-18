@extends('layouts.app')

@section('title', 'trains')

@section('main-content')
    <div class="contrainer">
        <div class="row">
            @foreach ($trains as $train )
                <div class="col3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$train->azienda}}</h5>
                            <p class="card-text">Partenza da: {{$train->stazione_di_partenza}} alle: {{$train->orario_di_partenza}}</p>
                            <p class="card-text">Arrivo a: {{$train->stazione_di_arrivo}} alle: {{$train->orario_di_arrivo}}</p>
                            @if ($train->in_orario === 1)
                                <p class="card-text">In orario</p>
                            @else
                                <p class="card-text">In ritardo</p>
                            @endif
                            @if ($train->cancellato === 1)
                            <p class="card-text">Treno cancellato</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @dump($trains)
@endsection
