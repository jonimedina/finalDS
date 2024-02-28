@extends('layouts.app')
@section('content')

<div class="input-group mb-3"> 
    <form action="{{ route('docentes.buscar') }}" method="GET">
        <input type="text" class="form-control mb-3" name="apellido" placeholder="Ingrese apellido">
        <button class="btn btn-info" type="submit">Buscar por apellido</button>
    </form>
</div>


<table class="table table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Mail</th>
            <th scope="col">Telefono</th>
            <th scope="col">Rol</th>
            <th scope="col">Materia 1° Módulo</th>
            <th scope="col">Año materia 1° Módulo</th>
            <th scope="col">Materia 2° Módulo</th>
            <th scope="col">Año materia 2° Módulo</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody class="table-group-divider">

        @foreach($docentes as $docente)
        <tr>
            <th>{{$docente->id}}</th>
            <td>{{$docente->nombre}}</td>
            <td>{{$docente->apellido}}</td>
            <td>{{$docente->email}}</td>
            <td>{{$docente->telefono}}</td>
            <td>{{$docente->rol}}</td>
            <td>{{$docente->materia1}}</td>
            <td>{{$docente->aniomateria1}}</td>
            <td>{{$docente->materia2}}</td>
            <td>{{$docente->aniomateria2}}</td>
            @can('docentes.update')
            <td>
                <a href="" data-bs-toggle="modal" data-bs-target="#modalEditar{{$docente->id}}" class="btn btn-warning btn-sm"><i class="fa-regular fa-pen-to-square"></i>
            </td>
            @endcan
            @can('docentes.destroy')
            <td>
                <a href="{{route("docentes.destroy", $docente->id)}}" onclick="return confirm('Se eliminarán los datos')" class="btn btn-danger btn-sm"><i class="fa-regular fa-trash-can"></i>
                @method("DELETE")
            </td>
            @endcan
            <!-- Modal de Editar-->
            
            <div class="modal fade" id="modalEditar{{$docente->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar datos</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route("docentes.update", $docente->id)}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="idDocente" class="form-label" >Id Docente</label>
                                <input type="text" class="form-control" id="id" name="idD" value={{$docente->id}} disabled>
                            </div>
                            <div class="mb-3">
                                <label for="nombreDocente" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombreD" value={{$docente->nombre}}>
                            </div>
                            <div class="mb-3">
                                <label for="apellidoDocente" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="apellido" name="apellidoD" value={{$docente->apellido}}>
                            </div>
                            <div class="mb-3">
                                <label for="telefonoDocente" class="form-label">Teléfono</label>
                                <input type="text" class="form-control" id="telefono" name="telefonoD" value={{$docente->telefono}}>
                            </div>
                            <div class="mb-3">
                                <label for="mail" class="form-label">Mail</label>
                                <input type="email" class="form-control" id="mail" name="mailD" value={{$docente->email}} disabled>
                            </div>
                            <div class="mb-3">
                                <label for="rolDocente" class="form-label">Rol</label>
                                <select class="form-select" aria-label="Default select example" name="rolD">
                                    <option>--Elegir rol--</option>                                     
                                    <option value="0">Coordinador</option>
                                    <option value="1">Docente</option>
                                    <option value="2">Preceptor</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="materiaDocente" class="form-label">Materia 1° Módulo</label>
                                <select class='form-select' name="materia1D" id="materia1D"> 
                                    <option>--Elegir materia--</option>
                                    <option>{{$docente->materia1}}</option>
                                    @foreach($materias as $materia)                          
                                        <option value="{{ $materia->nombre}}">{{$materia->nombre}}</option>
                                    @endforeach
                                </select> 
                            </div>

                            <div class="mb-3">
                                <label for="aniomateria1" class="form-label">Año Materia 1° Módulo</label>
                                <select class='form-select' name="aniomateria1D" id="aniomateria1D">      
                                    <option>{{$docente->aniomateria1}}</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                </select> 
                            </div>

                            <div class="mb-3">
                                <label for="materiaDocente" class="form-label">Materia 2° Módulo</label>
                                <select class='form-select' name="materia2D" id="materia2D"> 
                                    <option>--Elegir materia--</option>
                                    <option>No corresponde</option>
                                    <option>{{$docente->materia2}}</option>
                                    @foreach($materias as $materia)                          
                                        <option value="{{ $materia->nombre}}">{{$materia->nombre}}</option>
                                    @endforeach
                                </select> 
                            </div>

                            <div class="mb-3">
                                <label for="aniomateria2D" class="form-label">Año Materia 2° Módulo</label>
                                <select class='form-select' name="aniomateria2D" id="aniomateria2D">      
                                    <option>{{$docente->aniomateria2}}</option>
                                    <option>No corresponde</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                </select> 
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Guardar cambios</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
                </div>
            </div>
            
            </tr>    
        @endforeach
    </tbody>
</table>



@if($docentes->count() > 0)

@else
    <p>No se encontraron docentes con ese apellido.</p>
@endif
</tbody>

@endsection