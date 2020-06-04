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
                        {{-- Email --}}
                        <div class="input-field">
                            <i class="material-icons prefix">email</i>
                            <input type="email" name="email" id="email" @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <label for="email">Email</label>
                            {!! $errors->first('email', '<span class="help-block red-text">:message</span>') !!}
                        </div><br>

                        {{-- Password --}}
                        <div class="input-field">
                            <i class="material-icons prefix">vpn_key</i>
                            <input type="password" name="password" id="password" @error('password') is-invalid @enderror" required autocomplete="current-password">
                            <label for="password">Password</label>
                            {!! $errors->first('password', '<span class="help-block red-text">:message</span>') !!}
                        </div><br>

                        {{-- Remember me --}}
                        <p>
                            <label>
                              <input type="checkbox" value="{{ old('remember') ? 'checked' : '' }}">
                                <span>Remember me</span>
                            </label>
                        </p><br>
                        <div class="form-field">
                            <button class="btn-large waves-effect waves-dark" style="width: 100%;">Login</button>
                        </div><br>
                        <div class="form-field center-align">
                            <strong><a href="/register">Resgister</a></strong>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
