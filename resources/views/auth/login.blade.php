@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <div class="row">
        <div class="col s12 m4 offset-m4">
            <div class="card">
                <div class="card-action center-align white text">
                    <h3>Login</h3>
                </div>
            <form method="POST" action="{{route('login')}}">
                    {{ csrf_field() }}
                    <div class="card-content">
                        <div class="input-field {{ $errors->has('email') ? 'red darken-3' : '' }}">
                            <i class="material-icons prefix">account_circle</i>
                            <input type="email" name="email" id="email" {{ old('email') }}>
                            <label for="email">Email</label>
                            {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                        </div><br>
                        <div class="input-field {{ $errors->has('password') ? 'red darken-3' : '' }}">
                            <i class="material-icons prefix">block</i>
                            <input type="password" name="password" id="password">
                            <label for="password">Contraseña</label>
                            {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                        </div><br>
                        <p>
                            <label>
                              <input type="checkbox"/>
                              <span>Remember me</span>
                            </label>
                        </p><br>
                        <div class="form-field">
                            <button class="btn-large waves-effect waves-dark" style="width: 100%;">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
