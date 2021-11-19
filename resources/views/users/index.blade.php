@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            
            <table class="table col-12">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Correo</td>
                        <td>Eliminar</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                    <tr>
                        
                        <td>{{ $usuario->id }}</td>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>
                            
                            <form 
                                action="{{url('/users/'.$usuario->id)}}"
                                method="POST"
                                class="d-inline"
                            >
                                @csrf
                                {{method_field('DELETE')}}
                                <button 
                                    onclick="return confirm()"
                                    value="delete"
                                    class="btn btn-danger"
                                    data-toggle="modal"
                                    data-target="#deleteModal"
                                >
                                DELETE
                                </button>
                            </form>
                            <!--
                            <button
                                class="btn btn-danger"
                                data-toggle="modal"
                                data-target="#deleteModal"
                                data-id
                            >
                            </button>
                            -->
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection