@extends('layouts.app')

@section('titolo', 'Prodotti - La Molisana')

@section('contenuto')
    <main>
        <div class="contenitore">
            <div class="contenitore-pasta">
                <h1>Le Lunghe</h1>
                <div class="card-contenitore">
                    @foreach ($formati as $formato)
                        @if ($formato['tipo'] == 'lunga')
                            <div class="card">
                                <img src="{{ $formato['src'] }}" alt="Pasta Lunga">
                            </div>
                        @endif
                    @endforeach
                </div>
                <h1>Le corte</h1>
                <div class="card-contenitore">
                    @foreach ($formati as $formato)
                        @if ($formato['tipo'] == 'corta')
                            <div class="card">
                                <img src="{{ $formato['src'] }}" alt="Pasta Corta">
                            </div>
                        @endif
                    @endforeach
                </div>
                <h1>Le cortissime</h1>
                <div class="card-contenitore">
                    @foreach ($formati as $formato)
                        @if ($formato['tipo'] == 'cortissima')
                            <div class="card">
                                <img src="{{ $formato['src'] }}" alt="Pasta Cortissima">
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
