
@extends('panel.layouts.app')

@section('content')

    <div class="bred">
        <a href="{{ route('homepanel') }}" class="bred">Home > </a>
        <a href="{{ route('brands.index') }}" class="bred">Marcas > </a>
        <a href="#" class="bred">Editar</a>
    </div>

    <div class="title-pg">
        <h1 class="title-pg">Editar: {{ $brand->name }}</h1>
    </div>

    <div class="content-din">

        @if(isset($errors) && $errors->any())
            <div class="alert alert-warning">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="form form-search form-ds" action="{{ route('brands.update', $brand->id) }}" method="POST">

            {!! csrf_field() !!}
            {!! method_field('PUT') !!}

            <div class="form-group">
                <input type="hidden" name="id" value="{{ $brand->id }}">
                <input type="text" name="name" placeholder="Nome:" class="form-control" value="{{ $brand->name }}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-search">Atualizar</button>
            </div>
        </form>

    </div><!--Content Dinâmico-->

@endsection