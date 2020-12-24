@extends('layouts.app')

@section('titolo', 'Dettaglio Prodotti - La Molisana')

@section('contenuto')
    <div class="contenitore-titolo">
        <h1 class="titolo-prodotto">{{ $formati['titolo'] }}</h1>
    </div>
    <div class="pasta">
        <img class="regola" src="{{ $formati['src-h'] }}" alt="{{ $formati['titolo'] }}">
    </div>
    <div class="pacco-pasta">
        <img class="regola" src="{{ $formati['src-p'] }}" alt="{{ 'confezione' . $formati['titolo'] }}">
    </div>
    <div class="descrizione">
        <div class="contenitore">
            <p>{!! $formati['descrizione'] !!}</p>
        </div>
    </div>
@endsection
