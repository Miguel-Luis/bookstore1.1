@extends('layouts.app')

@section('title', $category->name)

@section('content')
    <a href="/category/"><i title="Regresar" class="small material-icons left">arrow_back</i></a>
    <a href="/book/create" title="Agregar Libro" class="waves-effect waves-light btn-floating btn-large blue lighten-1 right">
        <i class="material-icons">add</i>
    </a>

    <h2 class="header center-align">{{$category->name}}</h2>
    <table class="striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Autor</th>
                <th>Descripción</th>
                <th>Categoría</th>
                <th>Imagen</th>
                <th>Show</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            <tbody>
                @foreach ($category->books as $book)
                    <tr>
                        <td>{{$book->id}}</td>
                        <td>{{$book->book_name}}</td>
                        <td>{{$book->book_author}}</td>
                        <td>{{$book->book_description}}</td>
                        <td>{{$category->name}}</td>
                        <td><img src="/images/{{$book->book_image}}" width="70" height="100"></td>
                        <td>
                            <a href="/category/show/tables/{{$category->id}}" title="Mostrar"
                            class="waves-effect waves-light btn-floating btn-large green darken-3">
                                <i class="material-icons">remove_red_eye</i>
                            </a>
                        </td>
                        <td>
                            <a href="/category/{{$category->id}}/edit" title="Editar"
                            class="waves-effect waves-light btn-floating btn-large amber accent-3">
                                <i class="material-icons">edit</i>
                            </a>
                        </td>
                        <td>
                            <a href="#eliminar" title="Eliminar"
                            class="waves-effect waves-light btn modal-trigger btn-floating btn-large deep-orange darken-4">
                                <i class="material-icons">delete</i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </thead>
    </table>
@endsection
