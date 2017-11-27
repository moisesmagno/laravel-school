@extends('site.layouts.app')

@section('content-site')

    <div class="content">
        <div class="container">

            <h1 class="title">Login</h1>

            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail</label>

                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Senha</label>

                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control" name="password" placeholder="Senha" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12 text-right">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12 text-right">
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Esqueceu a senha?
                        </a>
                        <button type="submit" class="btn btn-primary">
                            Entrar
                        </button>
                    </div>
                </div>
            </form>


        </div>
    </div>
@endsection
