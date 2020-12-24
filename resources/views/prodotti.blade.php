@extends('layouts.app')

@section('titolo', 'Tutti i Prodotti - La Molisana')

@section('contenuto')
    <main>
        <div id="wrapper">
            <div class="contenitore">
                <div class="contenitore-pasta">
                    @foreach ($formati as $tipo => $pasta)
                        <h1>{{ $tipo }}</h1>
                        <div class="card-contenitore">
                            @foreach ($pasta as $key => $formato)
                                <div class="card">
                                    <img src="{{ $formato['src'] }}" alt="{{ $formato['titolo'] }}">
                                    <div class="overlay">
                                        <a href="{{ route('dettaglio-prodotti', ['id' => $key]) }}">
                                        {{ $formato['titolo'] }}
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
