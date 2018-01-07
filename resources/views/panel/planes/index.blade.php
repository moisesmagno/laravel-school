@extends('panel.layouts.app')

@section('content')

    <div class="bred">
        <a href="{{ route('homepanel') }}" class="bred">Home > </a>
        <a href="{{ route('planes.index') }}" class="bred">Aviões</a>
    </div>

    <div class="title-pg">
        <h1 class="title-pg">Lista de aviões</h1>
    </div>


    <div class="content-din bg-white">

        <div class="form-search">
            {!! Form::open(['route' => 'brands.search', 'class' => 'form form-inline']) !!}
            {!! Form::text('key_search', null, ['class' => 'form-control', 'placeholder' => 'Buscar']) !!}
            <button class="btn btn-search">Pesquisar</button>
            {!! Form::close() !!}

            @if(isset($dataForm['key_search']))
                <div class="alert alert-info">
                    <p>
                        <a href="{{ route('planes.index') }}">
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

        <div class="class-btn-insert">
            <a href="{{ route('planes.create') }}" class="btn-insert">
                <span class="glyphicon glyphicon-plus"></span>
                Cadastrar Avião
            </a>
        </div>

        <table class="table table-striped">

            <tr>
                <th>#id</th>
                <th>Classe</th>
                <th>Marcas</th>
                <th>Total de passageiros</th>
                <th width="150">Ações</th>
            </tr>

            @forelse($planes as $plane)
                <tr>
                    <td>{{ $plane->id }}</td>
                    <td>{{ $plane->classes($plane->class)}}</td>
                    <td>{{ $plane->brand->name }}</td>
                    <td>{{ $plane->qty_passengers}}</td>
                    <td>
                        <a href="{{ route('planes.edit', $plane->id) }}" class="edit">Edit</a>
                        <a href="{{ route('planes.show', $plane->id) }}" class="delete">View</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="200">Nenhum item cadastrado!</td>
                </tr>
            @endforelse
        </table>

        @if(isset($dataForm))
            {!! $planes->appends($dataForm)->links() !!}
        @else
            {!! $planes->links() !!}
        @endif


    </div><!--Content Dinâmico-->

@endsection