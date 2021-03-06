@extends('layouts.app')

@section('title', 'Books')

@section('content')
    <div class="row">
        <a href="/create" title="Agregar Libro" class="waves-effect waves-light btn-floating btn-large blue lighten-1 right">
            <i class="material-icons">add</i>
        </a>
    </div>
    <div class="row">
        @foreach ($books as $book)
            <div class="card large col s12 m6 l4 xl3">
                <div class="card-image waves-effect waves-block waves-light" title="{{$book->book_name}}">
                    <img class="activator" src="images/{{$book->book_image}}">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">{{$book->book_name}}<i title="Contenido" class="material-icons right">eject</i></span>
                    <p>Libro {{$book->name}}</p>
                    <div class="card-action">
                        <div class="row">
                        @if (Route::has('login'))
                            @auth
                                {{-- Mostrar --}}
                                <div class="col s4">
                                    <a href="/book/{{$book->id}}" title="Mostrar"
                                    class="waves-effect waves-light btn-floating btn-small green darken-3">
                                        <i class="material-icons">remove_red_eye</i>
                                    </a>
                                </div>
                                {{-- Editar --}}
                                <div class="col s4">
                                    <a href="/book/{{$book->id}}/edit" title="Editar"
                                    class="waves-effect waves-light btn-floating btn-small amber accent-3">
                                        <i class="material-icons">edit</i>
                                    </a>
                                </div>
                                {{-- Eliminar --}}
                                {{-- <div class="col s4">
                                    <a href="#eliminar" title="Eliminar"
                                    class="waves-effect waves-light btn modal-trigger btn-floating btn-small deep-orange darken-4">
                                        <i class="material-icons">delete</i>
                                    </a>
                                </div> --}}
                                {!! Form::open([ 'route' => ['book.destroy', $book->id], 'method' => 'DELETE']) !!}
                                {!! Form::close() !!}
                            @else
                                <p><a href="/book/{{$book->id}}">Ver más...</a></p>
                            @endauth
                        @endif
                        </div>
                    </div>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">{{$book->book_name}}<i class="material-icons right">close</i></span>
                    <span>{{$book->book_author}}</span>
                    <p>{{substr($book->book_description, 0, 345)."..."}}</p>
                    <p><a href="/book/{{$book->id}}">Ver más...</a></p>
                </div>
            </div>
        @endforeach
    </div>
    <!-- Modal Structure -->
    <form action="{{route('book.destroy', $book->id ?? '')}}" method="POST">
        @csrf
        @method('DELETE')
        <div id="eliminar" class="modal" style="width: 30%; height: 45%; border-radius: 15px;">
            <div class="modal-content center-align">
                <i class="material-icons large" style="color: #e57373">error_outline</i>
                <h4 style="color: gray">¿Eliminar?</h4>
                <p style="color: gray">Borraras el libro...</p>
            </div>
            <div class="modal-footer">
                <div class="center-align">
                    <button type="submit" class="waves-effect waves-light btn-flat blue lighten-1 white-text" style="border-radius: 15px;">
                        Aceptar
                    </button>
                    <a class="modal-close waves-effect waves-light btn-flat deep-orange accent-4 white-text" style="border-radius: 15px;">Cancelar</a>
                </div>
            </div>
        </div>
    </form>
@endsection
