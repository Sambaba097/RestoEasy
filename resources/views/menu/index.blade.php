@extends('frontend.app')
@section('content')


<div class="relative h-screen bg-cover bg-center" style="background-image: url('{{ asset('img/menu.png') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        {{-- <div class="text-center text-white">
            <h1 class="text-4xl font-bold mb-4">Bienvenue sur notre plateforme</h1>
            <p class="text-lg">Explorez nos fonctionnalités et services dès maintenant.</p>
        </div> --}}
    </div>
</div>

@endsection