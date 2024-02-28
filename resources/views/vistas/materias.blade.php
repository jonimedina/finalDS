@extends('layouts.app')
@section('content')

<div class="container mt-4">
    
    @if (session("correcto"))
        <div class="alert alert-success">{{session("correcto")}}</div>
    @endif

    @if (session("incorrecto"))
        <div class="alert alert-danger">{{session("incorrecto")}}</div>
    @endif

    <!-- Modal de Nueva Materia-->
    <div class="modal fade" id="modalAgregarMateria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar nueva materia</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="{{route("materia.create")}}" method="POST">
                @csrf
                    <div class="mb-3">
                        <label for="nombreMateria" class="form-label">Nombre de la materia</label>
                        <input type="text" class="form-control" id="nombre" name="nombreMateria">
                    </div>
                    <div class="mb-3">
                        <label for="anioMateria" class="form-label">Año</label>
                        <select class='form-select' name="anioMateria">
                            <option value="1">1° Año</option>
                            <option value="2">2° Año</option>
                            <option value="3">3° Año</option>
                            <option value="4">4° Año</option>
                            <option value="5">5° Año</option>
                            <option value="6">6° Año</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Agregar</button>
                        </div>
                </form>
            </div>
            
        </div>
        </div>
    </div>

    <table class="table table-striped table-hover">

        <div class="d-grid gap-2 d-md-flex justify-content-md-end" >
            @can('materia.create')
            <button type="button" class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#modalAgregarMateria">Agregar materia</button>
            @endcan
        </div>

        <thead>
            <tr>
                <th scope="col">Materia</th>
                <th scope="col">Año</th>
                <th> </th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($materias as $materia)            
            <tr>
                <td>{{$materia->nombre}}</td>
                <td>{{$materia->anio}}</td>
                
                @can('docentes.destroy')
                <td>
                <a href="{{route("materia.destroy", $materia->id)}}" onclick="return confirm('Se eliminará la materia')" class="btn btn-danger btn-sm"><i class="fa-regular fa-trash-can"></i>
                @method("DELETE")
                </td>
                @endcan

            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="pagination justify-content-center">
        {{$materias->links('pagination::bootstrap-4')}}
    </div>

</div>
@endsection


