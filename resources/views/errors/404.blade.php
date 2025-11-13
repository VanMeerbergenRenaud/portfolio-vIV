@extends('errors::minimal')

@section('title', __('Erreur 404'))
@section('icon')
    <img src="{{ asset('img/signature.png') }}" alt="signature de Renaud Vmb" class="w-[50%] md:w-[20%] lg:w-[10%] lg:mb-4">
@endsection
@section('code', '404')
@section('description', __('Oups, page non trouvée'))
@section('message', __('Je peux aider à résoudre certains problèmes mais trouver cette page n’en fait pas partie. Je vous prie de m\'excuser pour tout problème que cela pourrait causer.'))
