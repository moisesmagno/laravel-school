@extends('panel.layouts.app')

@section('content')

    <div class="bred">
        <a href="{{ route('homepanel') }}" class="bred">Home > </a>
        <a href="{{ route('brands.index') }}" class="bred">Marcas > </a>
        <a href="#" class="bred">{{ $brand->name }}</a>
    </div>

    <div class="title-pg">
        <h1 class="title-pg">{{ $brand->name }}</h1>
    </div>

    <div class="content-din">

        <ul>
            <li>Nome: <strong>{{ $brand->name }}</strong></li>
        </ul>

        @if(session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
        @endif

        {!! Form::open(['route' => ['brands.destroy', $brand->id], 'class' => 'form form-search form-ds', 'method'=>'DELETE']) !!}
        <div class="form-group">
            <button type="submit" class="btn btn-danger">Excluir a marca {{ $brand->name }}</button>
        </div>
        {!! Form::close() !!}

    </div><!--Content Dinâmico-->

@endsection