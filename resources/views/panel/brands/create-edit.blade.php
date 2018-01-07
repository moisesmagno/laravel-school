@extends('panel.layouts.app')

@section('content')

    <div class="bred">
        <a href="{{ route('homepanel') }}" class="bred">Home > </a>
        <a href="{{ route('brands.index') }}" class="bred">Marcas > </a>
        <a href="#" class="bred">Gestão</a>
    </div>

    <div class="title-pg">
        <h1 class="title-pg">Gestão das Marcas</h1>
    </div>

    <div class="content-din">

       @include('panel.includes.errors')

        @if(isset($brand))
            {!! Form::model($brand, ['route' => ['brands.update', $brand->id], 'class' => 'form form-search form-ds', 'method' => 'PUT']) !!}
            {!! method_field('PUT') !!}
        @else
            {!! Form::open(['route' => 'brands.store', 'class' => 'form form-search form-ds']) !!}
        @endif

            <div class="form-group">
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nome']) !!}
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-search">Cadastrar</button>
            </div>
        {!! Form::close() !!}

    </div><!--Content Dinâmico-->

@endsection