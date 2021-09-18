@extends('usuarios.layout')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 col-12">
                <form action="{{ route('usuarios.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="inputNombre" class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="inputNombre" placeholder="Nombre">
                    </div>
                    <div class="mb-3">
                        <label for="inputApellido" class="form-label">Apellido</label>
                        <input type="text" name="apellido" class="form-control" id="inputApellido" placeholder="Apellido">
                    </div>
                    <div class="mb-3">
                        <label for="inputEmail1" class="form-label">Correo electrónico</label>
                        <input type="text" name="correo" class="form-control" id="inputEmail1" placeholder="Correo electrónico">
                    </div>
                    <div class="mb-3">
                        <label for="inputEdad" class="form-label">Edad</label>
                        <input type="text" name="edad" class="form-control" id="inputEdad" placeholder="Edad">
                    </div>
                    <div class="mb-3">
                        <label for="inputPass" class="form-label">Contraseña</label>
                        <input type="password" name="contra" class="form-control" id="inputPass" placeholder="Contraseña">
                    </div>
                    <div class="d-grid gap-2 mt-3 mb-3">
                        <button type="submit" class="btn btn-primary ">Registrar</button>
                    </div>
                </form>
            </div>

            <div class="col-md-8 col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Edad</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($usuarios as $user)<!--el foreach trae o tiene la variable que enviamos desde el controlador-->
                                    <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->nombre }}</td>
                                    <td>{{ $user->apellido }}</td>
                                    <td>{{ $user->correo }}</td>
                                    <td>{{ $user->edad }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $usuarios->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

