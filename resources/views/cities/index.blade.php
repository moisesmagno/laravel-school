@extends('panel.layouts.app')

@section('content')

    <div class="bred">
        <a href="{{ route('homepanel') }}" class="bred">Home > </a>
        <a href="{{ route('states.index') }}" class="bred">States > </a>
        <a href="{{ route('state.cities', $state->initials) }}" class="bred">{{ $state->name }} > </a>
        <a href="#" class="bred">Cidades</a>
    </div>

    <div class="title-pg">
        <h1 class="title-pg">Cidades do estados: <strong>{{ $state->name }}</strong></h1>
    </div>


    <div class="content-din bg-white">

        <div class="form-search">
            {!! Form::open(['route' => 'state.cities.search', 'class' => 'form form-inline']) !!}
            {!! Form::text('key_search', null, ['class' => 'form-control', 'placeholder' => 'Buscar']) !!}
            <button class="btn btn-search">Pesquisar</button>
            {!! Form::close() !!}

            @if(isset($dataForm['key_search']))
                <div class="alert alert-info">
                    <p>
                        <a href="{{ route('states.cities.index') }}">
                            <i class="fa fa-refresh" aria-hidden="true"></i>
                        </a>
                        Resultados para: <strong>{{ $dataForm['key_search'] }}</strong>
                    </p>
                </div>
            @endif
        </div>

        <div class="messages">
            @include('panel.includes.alerts')
        </div>

        <table class="table table-striped">

            <tr>
                <th>Nome</th>
                <th width="200">Ações</th>
            </tr>

            @forelse($cities as $city)
                <tr>
                    <td>{{ $city->name }}</td>
                    <td>
                        #ações
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="200">Nenhum item cadastrado!</td>
                </tr>
            @endforelse
        </table>

    </div><!--Content Dinâmico-->

@endsection