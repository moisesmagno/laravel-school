@extends('panel.layouts.app')

@section('content')

    <div class="bred">
        <a href="{{ route('homepanel') }}" class="bred">Home > </a>
        <a href="#" class="bred">Marcas</a>
    </div>

    <a href="{{ route('brands.create') }}" class="btn btn-success">
        <i class="fa fa-plus-circle" aria-hidden="true"></i> Cadastrar
    </a>

    <div class="title-pg">
        <h1 class="title-pg">Marcas de aviões</h1>
    </div>

@endsection