@extends('layouts.app')

@section('content')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
    .bigicon {
        font-size: 15px;
        color: #13314b;
    }
    .italic-placeholder::placeholder {
        font-style: italic;
    }
</style>

<div class="row justify-content-center">

    @if (session("correcto"))
        <div class="alert alert-success">{{session("correcto")}}</div>
    @endif

    @if (session("incorrecto"))
        <div class="alert alert-danger">{{session("incorrecto")}}</div>
    @endif


    <div class="col-md-6 align-self-center">
        <div class="well well-sm text-center">
            <form action="{{route("perfil.modificar", $docente->id)}}" method="POST" class="form-horizontal border p-4">
                @csrf
                <fieldset>
                    <h3 class="text-center header mb-4">Mis Datos</i></h3>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-id-card m-1"></i>  ID</span>
                        <input id="id" name="id" type="text" class="form-control" value={{$docente->id}} disabled>
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text"><i class="fa fa-user bigicon m-1"></i> Nombre y Apellido</span>
                        <input id="nombre" name="nombre" type="text" class="form-control" value={{$docente->nombre}}>
                        <input id="apellido" name="apellido" type="text" class="form-control" value={{$docente->apellido}}>
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text"><i class="fa fa-envelope bigicon m-1"></i> E-mail</span>
                        <input id="email" name="mail" type="text" class="form-control" value={{$docente->email}} disabled>
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text"><i class="fa fa-phone-square bigicon m-1"></i> Telefono</span>
                        <input id="telefono" name="telefono" type="text" class="form-control" value={{$docente->telefono}}>
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-graduation-cap m-1"></i> Rol</span>
                        <input id="rol" name="rol" type="text" class="form-control" value={{$docente->rol}} disabled>
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-chalkboard-user m-1"></i> Materia 1° Modulo</span>
                        <input id="materia1" name="materia1" type="text" class="form-control" value={{$docente->materia1}} disabled> 
                        <input id="aniomateria1" name="aniomateria1" type="text" class="form-control" value={{$docente->aniomateria1}} disabled>                           
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-chalkboard-user m-1"></i> Materia 2° Modulo</span>
                        <input id="materia2" name="materia2" type="text" class="form-control" value={{$docente->materia2}} disabled>
                        <input id="aniomateria2" name="aniomateria2" type="text" class="form-control" value={{$docente->aniomateria2}} disabled>                            
                    </div>

                </fieldset>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-primary" type="button">Guardar Cambios</button>
                    </div>
                
            </form>
        </div>

        <form action="{{route("perfil.cambioPassword", $docente->email)}}" method="POST" class="form-horizontal border p-4">
            @csrf
            <fieldset>
                <h3 class="text-center header mb-4">Cambiar contraseña</i></h3>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text"><i class="fa fa-envelope bigicon m-1"></i> E-mail</span>
                    <input id="email" name="mail" type="text" class="form-control" value={{$docente->email}} disabled>
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-lock fa-lg m-1"></i>Actual Contraseña</span>
                    <input id="currentPassword" name="currentPassword" type="password" class="form-control italic-placeholder"  placeholder="Ingrese su actual contraseña">
                    <button class="btn btn-outline-secondary toggle-password" type="button" data-target="#currentPassword">
                        <i class="fas fa-eye-slash"></i>
                    </button>
                </div>
                
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-key fa-lg m-1"></i>Nueva contraseña</span>
                    <input id="newPassword" name="newPassword" type="password" class="form-control italic-placeholder" placeholder="Ingrese su nueva contraseña">
                    <button class="btn btn-outline-secondary toggle-password" type="button" data-target="#newPassword">
                        <i class="fas fa-eye-slash"></i>
                    </button>
                </div>
                
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-key fa-lg m-1"></i>Confirmar Contraseña</span>
                    <input id="confirmPassword" name="confirmPassword" type="password" class="form-control italic-placeholder" placeholder="Confirme su nueva contraseña">
                    <button class="btn btn-outline-secondary toggle-password" type="button" data-target="#confirmPassword">
                        <i class="fas fa-eye-slash"></i>
                    </button>
                </div>

            </fieldset>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary" type="button">Cambiar contraseña</button>
                </div>
            
        </form>
    </div>
</div>


<script>
    $(document).ready(function () {
        $('.toggle-password').on('click', function () {
            const passwordField = $($(this).data('target'));
            const passwordFieldType = passwordField.attr('type');

            if (passwordFieldType === 'password') {
                passwordField.attr('type', 'text');
                $(this).find('i').removeClass('fa-eye-slash').addClass('fa-eye');
            } else {
                passwordField.attr('type', 'password');
                $(this).find('i').removeClass('fa-eye').addClass('fa-eye-slash');
            }
        });
    });
</script>


@endsection