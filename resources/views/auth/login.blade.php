@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <div class="row">
        <div class="col s12 m4 offset-m4">
            <div class="card">
                <div class="card-action center-align white text">
                    <h3>Login</h3>
                </div>
                <form action="">
                    <div class="card-content">
                        <div class="form-field">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email">
                        </div><br>
                        <div class="form-field">
                            <label for="password">Contraseña</label>
                            <input type="password" name="password" id="password">
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
