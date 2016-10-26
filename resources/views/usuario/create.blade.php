@extends('layouts.admin')
@section('content')

  {!!Form::open(['route' => 'usuario.store', 'method' => 'POST'])!!}
    <div class="form-group">
      {!!Form::label('Nombre: ')!!}
      {!!Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de usuario'])!!}
    </div>
    <div class="form-group">
      {!!Form::label('Correo: ')!!}
      {!!Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el email del usuario'])!!}
    </div>
    <div class="form-group">
      {!!Form::label('Password: ')!!}
      {!!Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ingrese el password del usuario'])!!}
    </div>
    {!!Form::submit('Registrar', ['class' => 'btn btn-primary'])!!}
  {!!Form::close()!!}

@endsection
