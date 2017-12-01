@extends('panel.layouts.app')

@section('content')

    <div class="bred">
        <a href="{{ route('homepanel') }}" class="bred">Home > </a>
        <a href="{{ route('brands.index') }}" class="bred">Marcas > </a>
        <a href="#" class="bred">Cadastrar</a>
    </div>

    <div class="title-pg">
        <h1 class="title-pg">Cadastrar</h1>
    </div>

    <div class="content-din">

        <form class="form form-search form-ds" action="{{ route('brands.store') }}" method="POST">

            {!! csrf_field() !!}

            <div class="form-group">
                <input type="text" name="name" placeholder="Nome:" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-search">Cadastrar</button>
            </div>
        </form>

    </div><!--Content Dinâmico-->

@endsection