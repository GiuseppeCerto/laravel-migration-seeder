@extends('layouts.app')

@section('content')

        
    <div class="container mt-4">
        <div class="row d-flex gap-3">
            @forelse ($trains as $train)
                <div class="col-3 card pt-4 pb-4">
                    <h3>{{ $train->azienda }}</h3>
                    <p>{{ $train->stazione_di_partenza }}</p>
                    <p>{{ $train->stazione_di_arrivo }}</p>
                </div>
            @endforeach
        </div>
    </div>

@endsection